
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            My<span> Mobile</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('brand') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Brand</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Category</span>
                </a>
            </li>

            <li class="nav-item nav-category">Inventory</li>
            <li class="nav-item">
                <a href="{{ route('coupon') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Coupon</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#products" role="button" aria-expanded="false" aria-controls="emails" id="req-ex">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Products</span> &nbsp;
                    <div class="text-white invisible pending-header-req" role="status">
                        <span class="badge badge-light badge-pill bg-warning text-black text-header-indicater"></span>
                    </div>
                    <i class="link-arrow" data-feather="chevron-down" id="toggle-indicater"></i>
                </a>
                <div class="collapse" id="products">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('add-product') }}" class="nav-link">Add Products
                                &nbsp;
                                <div class="text-white invisible pending-sub-req" role="status">
                                    <span class="badge badge-light badge-pill bg-danger text-white text-sub-indicater"></span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('view-product') }}" class="nav-link">View Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('attribute') }}" class="nav-link">Attributes</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Customer</li>
            <li class="nav-item">
                <a href="{{ route('customer') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Customer</span>
                </a>
            </li>
        </ul>
    </div>
</nav>