<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->with(['products'])->latest()->get();
        $total = 0;

        foreach ($carts as $cartItem) {
            $total += $cartItem['products']['price'] * $cartItem['quantity'];
        }

        return view('cart', ['carts' => $carts, 'total' => $total]);
    }


    public function create(Request $request)
    {
        try {
            $user = Auth::user();
            $data = [
                'user_id' => $user->id, // ID user
                'product_id' =>  $request->product, // ID produk
                'quantity' => $request->quantity, // Jumlah produk
            ];

            $checkProduct = Cart::where('user_id', $user->id)
                ->where('product_id', $request->product)
                ->first();

            if ($checkProduct) {
                Cart::where('id', $checkProduct->id)->update(['quantity' => $checkProduct->quantity + $request->quantity]);
            } else {
                $data = [
                    'user_id' => $user->id, // ID user
                    'product_id' =>  $request->product, // ID produk
                    'quantity' => $request->quantity, // Jumlah produk
                ];
                Cart::create($data);
            }



            $response = ['message' => 'success', 'data' => $data];
            return response()->json($response, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to insert data!',
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        $user = Auth::user();
        Cart::where('id', $id)->where('user_id', $user->id)->delete();
        return redirect('/cart');
    }

    public function getCount()
    {
        try {
            $user = Auth::user();
            $carts = Cart::where('user_id', $user->id)->get()->count();
            $data = $carts;

            return response()->json([
                'success' => true,
                'message' => 'Success Get Cart Count',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to insert data!',
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
