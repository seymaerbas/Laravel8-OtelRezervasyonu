@extends('layouts.home')

@section('title','Contact -' . $setting->title)

@section('description'){{ $setting->description}}@endsection

@section('keywords',$setting->keywords)

@section('content')
<div class="main-top" id="home">


    <!-- banner -->
    <div class="banner_w3lspvt-2">

    </div>
    <!-- //banner -->
</div>
<!-- //main banner -->

<!-- page details -->
<div class="breadcrumb-mobamu">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('home')}}">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
</div>


    <section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
            <div class="col-md-6">
                <h3 class="aside-title"></h3>
                {!! $setting->contact !!}
            </div>
            <div class="col-md-6">
                <h3 class="aside-title">İletişim Bilgiler</h3>
                İletişim formu
            </div>
        </div>
        </div>
    </section>
</div>

@endsection
