@extends('layouts.app')

@section('title', 'Home')

@section('css_page')
@endsection

@section('content')
    <!-- Slider Arae Start -->
    {{-- <div class="slider-area">
        <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
            <!-- Slider Single Item Start -->
            <div class="slider-height-13 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-28.jpg);">
                <div class="container">
                    <div class="slider-content-15 slider-content-13 slider-animated-1 text-left">
                        <h1 class="animated">
                            XECH T5 Sleek Desk Lamp<br />
                            <strong>With Wireless Charger</strong>
                        </h1>
                        <p class="animated">Wireless Charging Output: 5V/1A Lamp Arm Rotation Angle: 90 Degree</p>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item End -->
            <!-- Slider Single Item Start -->
            <div class="slider-height-13 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-29.jpg);">
                <div class="container">
                    <div class="slider-content-15 slider-content-13 slider-animated-1 text-left">
                        <h1 class="animated">
                            Interior Design Furniture<br />
                            <strong>For Your Dream Room</strong>
                        </h1>
                        <p class="animated">Kiln-dried hardwood frame. Apartment friendly design Sinuous Spring suspension system</p>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item End -->
        </div>
    </div>
    <!-- Slider Arae End -->
    <!-- Banner Area Start -->
    <div class="banner-3-area mt-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-res-xs-30 mb-res-sm-30">
                    <div class="banner-wrapper banner-box">
                        <a href="shop-4-column.html"><img src="assets/images/banner-image/40.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-res-xs-30 mb-res-sm-30">
                    <div class="banner-wrapper banner-box">
                        <a href="shop-4-column.html"><img src="assets/images/banner-image/41.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="banner-wrapper banner-box">
                        <a href="shop-4-column.html"><img src="assets/images/banner-image/42.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End --> --}}
    <!-- Feature Area Start -->
    <section class="feature-area mt-100px mb-70px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Section Title -->
                    <div class="section-title underline-shape">
                        <h2>Featured Products</h2>
                        <p>Add products to weekly line up</p>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <!-- Feature Slider Start -->
            <div class="feature-slider owl-carousel owl-nav-style-3">
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/31.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/30.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Solid...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/23.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/24.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Fresh...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/25.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/16.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Originals Kaval Win...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€23.90</li>
                                    <li class="current-price">€21.51</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/7.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/8.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Originals Kaval Win...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€23.90</li>
                                    <li class="current-price">€21.51</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/9.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/10.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€35.90</li>
                                    <li class="current-price">€34.11</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/11.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/12.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€35.90</li>
                                    <li class="current-price">€34.11</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/13.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/14.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Fresh...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                    <li class="current-price">€15.12</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/15.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/16.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Fresh...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/17.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/18.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Trico...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€9.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/19.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/20.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Fila Locker Room V...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€9.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/21.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/22.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Trans-Weight Hood...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/23.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/24.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Luxury Men's...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€11.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/25.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/26.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Calvin Klein Jeans...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/27.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/28.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Water and Wind R...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€11.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/29.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/30.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Madden by Steve...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€11.90</li>
                                    <li class="current-price">€10.12</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/31.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/1.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Brixton Patrol All T...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/furniture/2.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/furniture/3.jpg" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                    <li class="current-price">€34.21</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
            </div>
            <!-- Feature Slider End -->
        </div>
    </section>
    <!-- Feature Area End -->
    <!-- Brand area start -->
    <div class="brand-area mb-100px">
        <div class="container">
            <div class="border-1px">
                <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/3.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/4.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/5.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area End -->
@endsection

@section('modal')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/images/product-image/furniture/1.jpg" alt="" />
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/images/product-image/furniture/2.jpg" alt="" />
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/images/product-image/furniture/3.jpg" alt="" />
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/images/product-image/furniture/4.jpg" alt="" />
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/images/product-image/furniture/1.jpg" alt="" /></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/images/product-image/furniture/2.jpg" alt="" /></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/images/product-image/furniture/3.jpg" alt="" /></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/images/product-image/furniture/4.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Originals Kaval Windbr</h2>
                            <p class="reference">Reference:<span> demo_17</span></p>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-size-color">
                                <div class="pro-details-color-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#"> + Add To Cart</a>
                                </div>
                            </div>
                            <div class="pro-details-wish-com">
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                </div>
                            </div>
                            <div class="pro-details-social-info">
                                <span>Share</span>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
@endsection

@section('js_page')
@endsection