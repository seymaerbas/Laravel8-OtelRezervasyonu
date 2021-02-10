@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')
@section('title', $setting->title)

@section('description'){{ $setting->description}}@endsection

@section('keywords',$setting->keywords)

@section('content')

    @include('home._slider')




    <!-- price -->
    <div class="rooms-w3ls bg-li py-5" id="price">
        <div class="container-fluid py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Fırsatlar</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>

            <div class="row">
                @foreach($firsat as $rs)
                <div class="col-lg-4 price-mobamus">

                    <div class="price-top">
                        <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">
                            <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid" />
                        </a>
                    </div>
                    <div class="price-w3ls-bottom p-4">
                        <h4 class="my-2"><a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></h4>
                        <div class="lm-item-price">
                            <h6>
                                <span class="price-midd-head">{{$rs->city}}</span>
                            </h6>
                        </div>
                        <ul class="style-lists">
                            <li>{{$rs->address}} </li>
                            <li>{{$rs->country}}</li>
                        </ul>
                        <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn button-style-2 mt-sm-5 mt-4">Oteli İncele</a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="rooms-w3ls bg-li py-5" id="price">
            <div class="container-fluid py-xl-5 py-lg-3">
                <h3 class="tittle text-center text-bl font-weight-bold">En Son Eklenenler</h3>
                <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>

                <div class="row">
                    @foreach($last as $rs)
                        <div class="col-lg-4 price-mobamus">

                            <div class="price-top">
                                <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">
                                    <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid" />
                                </a>
                            </div>
                            <div class="price-w3ls-bottom p-4">
                                <h4 class="my-2"><a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></h4>
                                <div class="lm-item-price">
                                    <h6>
                                        <span class="price-midd-head">{{$rs->city}}</span>
                                    </h6>
                                </div>
                                <ul class="style-lists">
                                    <li>{{$rs->address}} </li>
                                    <li>{{$rs->country}}</li>

                                </ul>
                                <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="rooms-w3ls bg-li py-5" id="price">
                <div class="container-fluid py-xl-5 py-lg-3">
                    <h3 class="tittle text-center text-bl font-weight-bold">Sizin İçin Seçtiklerimiz</h3>
                    <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>

                    <div class="row">
                        @foreach($picked as $rs)
                            <div class="col-lg-4 price-mobamus">

                                <div class="price-top">
                                    <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">
                                        <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="price-w3ls-bottom p-4">
                                    <h4 class="my-2"><a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></h4>
                                    <div class="lm-item-price">
                                        <h6>
                                            <span class="price-midd-head">{{$rs->city}}</span>
                                        </h6>
                                    </div>
                                    <ul class="style-lists">
                                        <li>{{$rs->address}} </li>
                                        <li>{{$rs->country}}</li>

                                    </ul>
                                    <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn button-style-2 mt-sm-5 mt-4">Book Now</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    <!-- //price -->

    <!-- why -->

    <!-- why -->









@endsection
