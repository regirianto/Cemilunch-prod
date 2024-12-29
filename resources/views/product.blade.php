@extends('layouts.app')

@section('title', 'product')

@section('css_page')
@endsection

@section('content')


    <div>
        <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
        <section class="product-details-area mtb-40px" style="margin-top:150px;padding-bottom: 90px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-img product-details-tab">
                            <div class="zoompro-wrap zoompro-2">
                                <div class="zoompro-border zoompro-span">
                                    <img class="zoompro" src="{{ $product->image_url }}"
                                        data-zoom-image="{{ $product->image_url }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-content">
                            <h2>{{ $product->name }}</h2>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <p style="margin-left:-15px">(5)</p>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">Rp {{ number_format($product->price, 0, '.', '.') }}</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et
                                dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-list">
                                <ul>
                                    <li>- 0.5 mm Dail</li>
                                    <li>- Inspired vector icons</li>
                                    <li>- Very modern style</li>
                                </ul>
                            </div>
                            <div class="pro-details-quality mt-0px">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#"> + Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
