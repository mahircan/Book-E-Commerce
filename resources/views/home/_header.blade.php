<!-- HEADER -->
<header>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-left">
                @include('home.message')
            </div>
            <div class="pull-right">
                <ul class="header-top-links">
                    <li><a href="{{route('home')}}">Store</a></li>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="{{route('home')}}">
                        <img src="{{ asset('assets')}}/img/logo.png" alt="">
                    </a>
                </div>

                <!-- Search -->
                <div class="header-search">
                    <form action="{{route('getproduct')}}" method="post">
                        @csrf
                        @livewire('search')
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                    @livewireScripts

                </div>
                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->

                    <li class="header-account dropdown default-dropdown">
                        @auth
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-user-o"></i>
                                </div>

                                <strong class="text-uppercase">{{ Auth::user()->name }}   <i class="fa fa-caret-down"></i>  </strong>
                            </div>
                        @endauth
                        @guest
                            <a href="/login" class="text-uppercase">Login</a> / <a href="/register" class="text-uppercase">Join</a>
                        @endguest

                        <ul class="custom-menu">
                            <li><a href="{{ route('myprofile') }}"><i class="fa fa-user-o"></i> My Account</a></li>
                            <li><a href="{{route('myreviews')}}"><i class="fa fa-comments-o"></i> My Reviews</a></li>
                            <li><a href="{{route('user_products')}}"><i class="fa fa-book"></i> My Products</a></li>
                            <li><a href="{{route('user_shopcart')}}"><i class="fa fa-cart-plus"></i>My Shopcart</a></li>
                            <li><a href="{{route('user_orders')}}"><i class="fa fa-shopping-cart"></i>My Orders</a></li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-user-plus"></i> Logout</a></li>
                        </ul>

                    </li>
                    <!-- /Account -->

                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <a href="{{route('user_shopcart')}}">
                                <div class="header-btns-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="qty">{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span>
                                </div>

                                <strong class="text-uppercase">My Cart:</strong>
                            </a>
                            <br>

                        </a>
                        <div class="custom-menu">
                            <div id="shopping-cart">
                                <div class="shopping-cart-list">
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets')}}/img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="{{ asset('assets')}}/img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="shopping-cart-btns">
                                    <button class="main-btn">View Cart</button>
                                    <button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- /Cart -->

                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->
