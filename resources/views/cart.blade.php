@extends('layouts.app')

@section('title', 'product')

@section('css_page')
@endsection

@section('content')

    <div class="cart-main-area " style="margin-top: 140px; margin-bottom: 50px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img class="product-cart-image" src="{{ $cart->products->image_url }}"
                                                alt="" />
                                        </td>
                                        <td class="product-name"><a
                                                href="/product/{{ $cart->product_id }}">{{ $cart->products->name }}</a></td>
                                        <td class="product-cart-qty">{{ $cart->quantity }}</a></td>
                                        <td class="product-price-cart"><span class="amount">Rp
                                                {{ number_format($cart->products->price, 0, '.', '.') }}</span></td>
                                        <td class="product-subtotal">
                                            Rp
                                            {{ number_format($cart->products->price * $cart->quantity, 0, '.', '.') }}
                                        </td>
                                        <td class="product-remove">
                                            <form action="{{ route('destroyCart', $cart->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="cart-delete fa fa-times"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-12 mt-4">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total Price <span>RP {{ number_format($total, 0, '.', '.') }}</span></h5>
                                <div class="total-shipping">
                                </div>
                                <h4 class="grand-totall-title">Grand Total
                                    <span>Rp {{ number_format($total, 0, '.', '.') }}</span>
                                </h4>
                                <a href="/checkout">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
