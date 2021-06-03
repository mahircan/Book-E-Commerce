<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin_home') }}" class="brand-link">
        <img src="{{asset('assets/admin/images')}}/admin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->profile_photo_path)
                    <img src="{{ Storage::url(Auth::user()->profile_photo_path)}}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                @auth
                    <a href="{{ route('admin_home') }}" class="d-block">{{ Auth::user()->name }} </a>
                    <a href="{{ route('logout') }}" class="d-block">Logout</a>
                @endauth
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{route('admin_category')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        Category
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin_products') }}" class="nav-link">
                            <i class="fa fa-book"></i>
                            Products
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin_message') }}" class="nav-link">

                            <i class="fa fa-comments"></i>
                            Contact Messages
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin_review') }}" class="nav-link">
                        <i class="fa fa-comments"></i>
                        Reviews
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin_faq') }}" class="nav-link">
                        <i class="fa fa-question-circle"></i>
                        FAQ
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>

                            Orders
                            <i class="right fas fa-angle-left"></i>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin_orders')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_order_list',['status'=>'new'])}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_order_list',['status'=>'accepted'])}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Accepted Orders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin_order_list',['status'=>'canceled'])}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Canceled Orders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin_order_list',['status'=>'shipping'])}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shipping Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_order_list',['status'=>'completed'])}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed Orders</p>
                            </a>
                        </li>
                    </ul>

                <li class="nav-item">
                    <a href="{{ route('admin_users') }}" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        Users
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin_setting')}}" class="nav-link">
                        <i class="fa fa-user-plus"></i>
                        Settings
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
