<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->with(['products'])->latest()->get();
        $total = 0;

        foreach ($carts as $cartItem) {
            $total += $cartItem['products']['price'] * $cartItem['quantity'];
        }

        return view('checkout', ['carts' => $carts, 'total' => $total]);
    }

    public function store(Request $request)
    {
        try {
            $uuid = (string)Str::uuid();
            $user = Auth::user();
            $carts = Cart::where('user_id', $user->id)->with(['products'])->latest()->get();
            $now = Carbon::now();
            $total = 0;

            $dataProducts = [];

            $idCarts = collect($carts)->map(function ($item, $key) {
                return $item->id;
            });


            foreach ($carts as $cartItem) {
                $total += $cartItem['products']['price'] * $cartItem['quantity'];
                array_push($dataProducts, [
                    'order_id' => $uuid,
                    'product_id' => $cartItem['products']['id'],
                    'quantity' => $cartItem['quantity'],
                    'price' => $cartItem['products']['price'],
                    'created_at' => $now,
                    'updated_at' => $now
                ]);
            }

            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'city' => 'required',
                'district' => 'required',
                'sub_district' => 'required',
                'postal_code' => 'required',
                'phone' => 'required'
            ]);
            DB::beginTransaction();
            DB::table('orders')->insert([
                'id' => $uuid,
                'user_id' => $user->id,
                'name' => $request->name,
                'address' => $request->address,
                'city' => $request->city,
                'district' => $request->district,
                'sub_district' => $request->sub_district,
                'postal_code' => $request->postal_code,
                'notes' => $request->notes || '',
                'phone' => $request->phone,
                'total_price' => $total,
                'status' => 'success',
                'total_price' => $total,
                'created_at' => $now,
                'updated_at' => $now
            ]);

            DB::table('order_products')->insert(
                $dataProducts
            );

            Cart::destroy($idCarts);


            // Your database operations
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception
        }
    }

    public function history()
    {
        $user = Auth::user();

        $rawOrders = DB::table('orders')
            ->join('order_products', 'orders.id', '=', 'order_products.order_id')
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->where('orders.user_id', $user->id)
            ->orderBy('orders.created_at', 'desc')
            ->select(
                'orders.id as order_id',
                'orders.total_price',
                'orders.status',
                'orders.created_at',
                'order_products.quantity',
                'order_products.price as item_price',
                'products.image_url as image',
                'products.name as product_name',
                'products.id as product_id'
            )
            ->get();

        $orders = $rawOrders->groupBy('order_id')->map(function ($items, $orderId) {
            $order = $items->first();
            return [
                'order_id' => $order->order_id,
                'total_price' => $order->total_price,
                'status' => $order->status,
                'created_at' => $order->created_at,
                'items' => $items->map(function ($item) {
                    return [
                        'product_id' => $item->product_id,
                        'product_name' => $item->product_name,
                        'image_url' => $item->image,
                        'quantity' => $item->quantity,
                        'price' => $item->item_price,
                    ];
                }),
            ];
        })->values();

        return view('order-list', ['orders' => $orders]);
    }
}
