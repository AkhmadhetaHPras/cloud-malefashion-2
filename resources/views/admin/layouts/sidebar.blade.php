<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('home')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
            <img src="{{ asset('img/logo-light.webp') }}" alt="logo">
            </span>            
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 lead">
        <!-- Dashboard -->
        <li class="menu-item {{ $title == 'Dashboard' ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="lead" data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Control page start  -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Manage & Controls </span>
        </li>
        <!-- Orders Start -->
        <li class="menu-item {{ $title == 'Orders-Incoming' || $title == 'Orders-ListAll' || $title == 'Orders-View' || $title == 'Orders-Edit' || $title == 'Order-Due' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div class="lead" data-i18n="Invoice">Ordes</div>
            </a>
            <ul class="menu-sub lead">
                <li class="menu-item {{ $title == 'Orders-Incoming' ? 'active' : '' }}">
                    <a href="{{ route('orders-in') }}" class="menu-link">
                        <div data-i18n="In">Incoming order</div>
                    </a>
                </li>
                <li class="menu-item  {{ $title == 'Orders-ListAll' || $title == 'Orders-View' || $title == 'Orders-Edit' || $title == 'Order-Due' ? 'active' : '' }}">
                    <a href="{{ route('orders-listall') }}" class="menu-link">
                        <div data-i18n="List">List All</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Orders end -->

        <!-- Products Start -->
        <li class="menu-item {{ $title == 'Products-Add' || $title == 'Products-ListAll' || $title == 'Products-View' || $title == 'Products-Edit' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-store-alt"></i>
                <div class="lead" data-i18n="Account Settings">Products</div>
            </a>
            <ul class="menu-sub lead">
                <li class="menu-item {{ $title == 'Products-Add' ? 'active' :'' }}">
                    <a href="{{ route('products-add') }}" class="menu-link">
                        <div data-i18n="Account">Add</div>
                    </a>
                </li>
                <li class="menu-item {{ $title == 'Products-ListAll' || $title == 'Products-Edit' || $title == 'Products-View' ? 'active' :'' }}">
                    <a href="{{ route('products-listall') }}" class="menu-link">
                        <div data-i18n="Notifications">List All</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Products End -->

        <!-- Users Start -->
        <li class="menu-item {{ $title == 'Users-Add' || $title == 'Users-ListAll' || $title == 'Users-View' || $title == 'Users-Edit' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="lead" data-i18n="Authentications">Users</div>
            </a>
            <ul class="menu-sub lead">
                <li class="menu-item {{ $title == 'Users-Add' ? 'active' :'' }}">
                    <a href="{{ route('users-add') }}" class="menu-link">
                        <div data-i18n="Basic">Add</div>
                    </a>
                </li>
                <li class="menu-item {{ $title == 'Users-ListAll' || $title == 'Users-Edit' || $title == 'Users-View'? 'active' :'' }}">
                    <a href="{{ route('users-listall') }}" class="menu-link">
                        <div data-i18n="Basic">List All</div>
                    </a>
                </li>
                <!-- <li class="menu-item">
                    <a href="app-user-verification.html" class="menu-link">
                        <div data-i18n="Basic">Verifications</div>
                    </a>
                </li> -->
            </ul>
        </li>
        <!-- Users End -->
        <!-- Control page end  -->

        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Help</span></li>
        <li class="menu-item {{ $title == '404-support' ? 'active' : '' }}">
            <a href="{{ route('404-error') }}" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div lass="lead" data-i18n="Support">Support</div>
            </a>
        </li>
    </ul>
</aside>