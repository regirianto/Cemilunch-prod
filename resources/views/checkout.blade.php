@extends('layouts.app')

@section('title', 'product')

@section('css_page')
@endsection

@section('content')
    <div class="checkout-area mb-40px" style="margin-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <form action="/checkout" method="POST">
                            <h3>Order Details</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="billing-info mb-20px">
                                        <label>Nama Penerima</label>
                                        <input placeholder="Nama" type="text" name="name" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Alamat Penerima</label>
                                        <input class="billing-address" placeholder="Alamat Lengkap" name="address"
                                            type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Kota</label>
                                        <input placeholder="Kota" type="text" name="city" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Kecamatan</label>
                                        <input placeholder="Kecamatan" type="text" name="district" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Kelurahan</label>
                                        <input placeholder="Kelurahan" type="text" name="sub_district" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Kode pos</label>
                                        <input placeholder="Kode Pos" type="number" name="postal_code" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>No Telepon Penerima</label>
                                        <input type="number" placeholder="Telphone" name="phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="additional-info-wrap">
                                <h4>Additional information</h4>
                                <div class="additional-info">
                                    <label>Order notes</label>
                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message" name="notes"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Your order</h3>

                        @csrf
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @foreach ($carts as $cart)
                                            <li><span class="order-middle-left">{{ $cart->products->name }} x
                                                    {{ $cart->quantity }}</span> <span class="order-price">Rp
                                                    {{ number_format($cart->products->price * $cart->quantity, 0, '.', '.') }}
                                                </span></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>Rp {{ number_format($total, 0, '.', '.') }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#method1">
                                                        Direct bank transfer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-two">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#method2">
                                                        Check payments
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-three">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#method3">
                                                        Cash on delivery
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <button type="submit" class="btn-hover" href="#">Order Now</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
