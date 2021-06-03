@extends('layouts.home')

@section('title', $search ." Products List")

@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"><a href=>{{$search}} ProductList</a></li>
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
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Price</h3>
                        <div id="price-slider"></div>
                    </div>
                    <!-- aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter By Language:</h3>
                        <ul class="size-option">
                            <li class="active"><a href="#">Türkçe</a></li>
                            <li ><a href="#">İngilizce</a></li>
                            <li><a href="#">Almanca</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Brand</h3>
                        <ul class="list-links">
                            <li><a href="#">Hayalperest Yayınevi</a></li>
                            <li><a href="#">Doğan Yayınevi</a></li>
                            <li><a href="#">Ve Yayınevi</a></li>
                            <li><a href="#">Kitap Yayınevi</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="pull-left">
                            <div class="row-filter">
                                <a href="#"><i class="fa fa-th-large"></i></a>
                                <a href="#" class="active"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="sort-filter">
                                <span class="text-uppercase">Sort By:</span>
                                <select class="input">
                                    <option value="0">Position</option>
                                    <option value="0">Price</option>
                                    <option value="0">Rating</option>
                                </select>
                                <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="page-filter">
                                <span class="text-uppercase">Show:</span>
                                <select class="input">
                                    <option value="0">10</option>
                                    <option value="1">20</option>
                                    <option value="2">30</option>
                                </select>
                            </div>
                            <ul class="store-pages">
                                <li><span class="text-uppercase">Page:</span></li>
                                <li class="active">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- STORE -->
                    <div id="store">
                        <!-- row -->
                        <div class="row">

                        @foreach($datalist as $rs)
                            <!-- Product Single -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="product product-single">
                                        <div class="product-thumb">
                                            <div class="product-label">
                                                <span>New</span>
                                                <span class="sale">-20%</span>
                                            </div>
                                            <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug ])}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</a>
                                            <img src="{{ Storage::url($rs->image)}}" style="height: 200px" alt="">
                                        </div>
                                        @php
                                            $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                            $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                        @endphp
                                        <div class="product-body">
                                            <h3 class="product-price">{{$rs->price}} <del class="product-old-price">{{$rs->price}}</del></h3>
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
                                </div>
                                <!-- /Product Single -->
                            @endforeach

                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /STORE -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
