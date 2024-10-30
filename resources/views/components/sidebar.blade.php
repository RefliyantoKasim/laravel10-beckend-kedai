<div class="main-sidebar sidebar-style-2">
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">my-KEDAI</a>
                <a href="index.html"><img src="{{ asset('img/kedai.png') }}" alt="logo" width="80"></a>

            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">MK</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="{{ Request::is('home*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('home') }}"><i
                            class="fas fa-chart-line"></i><span>Dashboard</span></a>
                </li>
                <li class="menu-header">Users</li>
                <li class="{{ Request::is('user*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-user"></i><span>All
                            Users</span></a>
                </li>

                <li class="menu-header">Product</li>
                <li class="{{ Request::is('product*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('product.index') }}"><i class="fas fa-box"></i><span>All
                            Products</span></a>

                </li>

            </ul>
        </aside>
    </div>
</div>
