@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')
@section('title', $setting->title)

@section('description'){{ $setting->description}}@endsection

@section('keywords',$setting->keywords)

@section('content')

    @include('home._slider')


    <!-- banner bottom -->
    <div class="banner-bottom py-5">
        <div class="d-md-flex container py-xl-3 py-lg-3">
            <div class="banner-left-bottom-w3ls">
                <h6 class="text-wh let">Sed do eiusmod tempor</h6>
                <h3 class="text-wh my-3">Welcome to our Villas</h3>
                <p>Enjoy Your Every Moments With Your Partner In Villas Paradise Resort.<br>Sed do eiusmod tempor incididunt ut
                    labore.</p>
            </div>
            <div class="button offset-lg-2 offset-md-1">
                <a href="about.html" class="btn w3ls-button-mobamu">Read More</a>
            </div>
        </div>
    </div>
    <!-- //banner bottom -->

    <!-- about -->
    <section class="about py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="row py-md-5">
                <div class="col-lg-4 about-left-w3pvt offset-lg-1 mt-lg-4">
                    <div class="main-img">
                        <img src="{{asset('assets')}}/images/blog1.jpg" alt="" class="img-fluid pos-aboimg">
                        <img src="{{asset('assets')}}/images/blog2.jpg" alt="" class="img-fluid pos-aboimg2">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 about-right offset-xl-1">
                    <h4 class="sub-tittle-w3layouts let">About Us</h4>
                    <h3 class="tittle-w3layouts text-uppercase pr-lg-5 mt-2">Duis aute irure olor in cillum solore</h3>
                    <p class="mt-4 mb-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit
                        amet id tempor felis. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit.</p>
                    <a href="about.html" class="btn button-style-2 mt-sm-5 mt-4">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- price -->
    <div class="rooms-w3ls bg-li py-5" id="price">
        <div class="container-fluid py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Rooms & Suites</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row">
                <div class="col-lg-4 price-mobamus">
                    <div class="price-top">
                        <a href="single.html">
                            <img src="{{asset('assets')}}/images/price1.jpg" alt="" class="img-fluid" />
                        </a>
                    </div>
                    <div class="price-w3ls-bottom p-4">
                        <h4 class="my-2"><a href="single.html">Suite</a></h4>
                        <div class="lm-item-price">
                            <h6>
                                <span class="price-top-head">$</span>
                                <span class="price-midd-head">195</span>
                                <span class="price-right-head">/ per month</span>
                            </h6>
                        </div>
                        <ul class="style-lists">
                            <li>Only 5 rooms are available </li>
                            <li>Breakfast included </li>
                            <li>Price does not include VAT & services fee </li>
                        </ul>
                        <a href="book.html" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 price-mobamus my-lg-0 my-5">
                    <div class="price-top">
                        <a href="single.html">
                            <img src="{{asset('assets')}}/images/price2.jpg" alt="" class="img-fluid" />
                        </a>
                    </div>
                    <div class="price-w3ls-bottom p-4">
                        <h4 class="my-2"><a href="single.html">Deluxe Room</a></h4>
                        <div class="lm-item-price">
                            <h6>
                                <span class="price-top-head">$</span>
                                <span class="price-midd-head">120</span>
                                <span class="price-right-head">/ per month</span>
                            </h6>
                        </div>
                        <ul class="style-lists">
                            <li>Perfect for traveling couples </li>
                            <li>Breakfast included </li>
                            <li>Concierge services </li>
                        </ul>
                        <a href="book.html" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 price-mobamus">
                    <div class="price-top">
                        <a href="single.html">
                            <img src="{{asset('assets')}}/images/price3.jpg" alt="" class="img-fluid" />
                        </a>
                    </div>
                    <div class="price-w3ls-bottom p-4">
                        <h4 class="my-2"><a href="single.html">Family Room</a></h4>
                        <div class="lm-item-price">
                            <h6>
                                <span class="price-top-head">$</span>
                                <span class="price-midd-head">182</span>
                                <span class="price-right-head">/ per month</span>
                            </h6>
                        </div>
                        <ul class="style-lists">
                            <li>Two double beds </li>
                            <li>Babysitting facilities</li>
                            <li>1 free bed available on request</li>
                        </ul>
                        <a href="book.html" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //price -->

    <!-- why -->
    <div class="serives py-5" id="why">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Why Villas </h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 ser-grid">
                    <span class="fa fa-cutlery"></span>
                    <h4>Restaurant</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class="col-lg-3 col-md-6 ser-grid mt-md-0 mt-5">
                    <span class="fa fa-money"></span>
                    <h4>Low Price</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
                    <span class="fa fa-user-secret"></span>
                    <h4>Secure Zone</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
                    <span class="fa fa-car"></span>
                    <h4>Pick Up</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- why -->

    <!-- stats -->
    <div class="stats py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row stats-mobamu py-5">
                <div class="col-lg-4 col-md-6">
                    <div class="stats-grid">
                        <div class="row">
                            <div class="col-4 text-center">
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="col-8">
                                <h4 class="numscroller">6000</h4>
                                <p>Excellent Ratings</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="stats-grid">
                        <div class="row">
                            <div class="col-4 text-center">
                                <span class="fa fa-smile-o"></span>
                            </div>
                            <div class="col-8">
                                <h4 class="numscroller">25k</h4>
                                <p>Happy Guests</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto mt-lg-0 mt-4">
                    <div class="stats-grid">
                        <div class="row">
                            <div class="col-4 text-center">
                                <span class="fa fa-cutlery"></span>
                            </div>
                            <div class="col-8">
                                <h4 class="numscroller">150</h4>
                                <p>Food Items</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //stats -->

    <!-- blog -->
    <div class="blog-w3ls py-5" id="blog">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Accommodation</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row package-grids">
                <div class="col-lg-4 posts-mobamus">
                    <div class="posts-top">
                        <a href="single.html">
                            <img src="{{asset('assets')}}/images/blog1.jpg" alt="" class="img-fluid" />
                        </a>
                        <h3>13
                            <span>Sep</span>
                        </h3>
                    </div>
                    <div class="posts-w3ls-bottom py-4">
                        <h4 class="mb-2"><a href="single.html">Sit accus antium</a></h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <span class="fa fa-thumbs-up mr-1"></span>20 Likes</a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <span class="fa fa-comments mr-1"></span>48 Comments</a>
                            </li>
                        </ul>
                        <p class="mt-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation.</p>
                    </div>
                </div>
                <div class="col-lg-4 posts-mobamus my-lg-0 my-4">
                    <div class="posts-top">
                        <a href="single.html">
                            <img src="{{asset('assets')}}/images/blog2.jpg" alt="" class="img-fluid" />
                        </a>
                        <h3>16
                            <span>Sep</span>
                        </h3>
                    </div>
                    <div class="posts-w3ls-bottom py-4">
                        <h4 class="mb-2"><a href="single.html">Sit accus antium</a></h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <span class="fa fa-thumbs-up mr-1"></span>20 Likes</a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <span class="fa fa-comments mr-1"></span>48 Comments</a>
                            </li>
                        </ul>
                        <p class="mt-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation.</p>
                    </div>
                </div>
                <div class="col-lg-4 posts-mobamus">
                    <div class="posts-top">
                        <a href="single.html">
                            <img src="{{asset('assets')}}/images/blog3.jpg" alt="" class="img-fluid" />
                        </a>
                        <h3>20
                            <span>Sep</span>
                        </h3>
                    </div>
                    <div class="posts-w3ls-bottom py-4">
                        <h4 class="mb-2"><a href="single.html">Sit accus antium</a></h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <span class="fa fa-thumbs-up mr-1"></span>20 Likes</a>
                            </li>
                            <li class="mx-3">
                                <a href="#">
                                    <span class="fa fa-comments mr-1"></span>48 Comments</a>
                            </li>
                        </ul>
                        <p class="mt-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog -->

    <!-- services -->
    <div class="serives-mobamu py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-wh font-weight-bold">Our Services</h3>
            <p class="sub-tittle text-center text-li mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row welcome-bottom text-center">
                <div class="col-lg-3 col-sm-6 px-2">
                    <div class="welcome-grid bg-wh py-5 px-4">
                        <img src="{{asset('assets')}}/images/wh1.jpg" alt="" class="img-fluid">
                        <h4 class="mt-4 mb-3 text-bl">Service 01</h4>
                        <p>Quis nostrum ullam corporis suscipit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 px-2">
                    <div class="welcome-grid bg-wh py-5 px-4">
                        <img src="{{asset('assets')}}/images/wh2.jpg" alt="" class="img-fluid">
                        <h4 class="mt-4 mb-3 text-bl">Service 02</h4>
                        <p>Quis nostrum ullam corporis suscipit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
                    <div class="welcome-grid bg-wh py-5 px-4">
                        <img src="{{asset('assets')}}/images/wh3.jpg" alt="" class="img-fluid">
                        <h4 class="mt-4 mb-3 text-bl">Service 03</h4>
                        <p>Quis nostrum ullam corporis suscipit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
                    <div class="welcome-grid bg-wh py-5 px-4">
                        <img src="{{asset('assets')}}/images/wh4.jpg" alt="" class="img-fluid">
                        <h4 class="mt-4 mb-3 text-bl">Service 04</h4>
                        <p>Quis nostrum ullam corporis suscipit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- testimonials -->
    <section class="team-main-sec bg-li py-5" id="testi">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Our Guests Love Us</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 team-gd-info">
                    <div class="team-gd">
                        <div class="team-img mb-4">
                            <img src="{{asset('assets')}}/images/te1.jpg" class="img-fluid" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3>Jason Dono <span class="sub-tittle-team">New York</span> </h3>
                            <ul class="list-unstyled my-md-4 my-3">
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star-o"></span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-gd-info mt-md-0 mt-5">
                    <div class="team-gd">
                        <div class="team-img mb-4">
                            <img src="{{asset('assets')}}/images/te2.jpg" class="img-fluid" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3>Mariana Noe <span class="sub-tittle-team">Italy</span></h3>
                            <ul class="list-unstyled my-md-4 my-3">
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star-half-o"></span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto team-gd-info mt-lg-0 mt-5">
                    <div class="team-gd">
                        <div class="team-img mb-4">
                            <img src="{{asset('assets')}}/images/te3.jpg" class="img-fluid" alt="user-image">
                        </div>
                        <div class="team-info">
                            <h3>Daniel Doe <span class="sub-tittle-team">Germany</span></h3>
                            <ul class="list-unstyled my-md-4 my-3">
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials -->

    <!-- middle -->
    <div class="middle py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="welcome-left text-center py-md-5 py-3">
                <h3>Enjoy Your Every Moments With Your Partner In Villas Paradise Resort</h3>
                <a href="book.html" class="btn button-style button-style mt-sm-5 mt-4">Book Now</a>
            </div>
        </div>
    </div>
    <!-- //middle -->

    <!-- newsletter -->
    <div class="newsletter_w3w3pvt py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Subscribe Newsletter</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="newsletter">
                <form action="#" method="post">
                    <div class="form-group mb-0 w-100">
                        <input class="email" type="email" name="email" placeholder="Your email..." required="">
                    </div>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <!-- //newsletter -->
@endsection
