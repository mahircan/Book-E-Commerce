@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{ $setting->description }} @endsection
@section('keywords',$setting->keywords)

@section('content')

    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Deals Of The Day</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section-title -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="section-title">Deals Of The Day</h3>
                        <div class="pull-right">
                            <div class="product-slick-dots-1 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- /section-title -->

                <!-- Product Slick -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div id="product-slick-1" class="product-slick">

                        @foreach($daily as $rs)
                            <!-- Product Single -->
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <div class="product-label">
                                            <span class="sale">-20%</span>
                                        </div>
                                        <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</a>
                                        <img src="{{ Storage::url($rs->image)}}" style="height: 250px"  alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$rs->price }} <del class="product-old-price">{{$rs->price * 1.2}}</del></h3>
                                        @php
                                            $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                            $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                        @endphp
                                        <div class="product-rating">
                                            <i class="fa fa-star @if ($avgrev<1) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<2) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<3) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<4) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($avgrev<5) -o empty @endif"></i>
                                            <i>({{$countreview}})</i>
                                        </div>

                                        <h2 class="product-name"><a href="#">{{$rs->title}}</a></h2>
                                        <div class="product-btns">
                                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                            <form action="{{route('user_shopcart_add',['id' => $rs->id])}}" method="post">
                                                @csrf
                                                <input name="quantity" type="hidden" value="1">
                                                <button type="submit"  class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->
        </div>
    </div>
@endsection
