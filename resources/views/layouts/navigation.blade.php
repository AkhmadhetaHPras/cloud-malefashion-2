<div class="offcanvas-menu-overlay"></div>

<!-- HEADER OFFCANVAS -->
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">Sign in</a>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><i class="fa fa-search text-dark"></i></a>
        <a href="#"><i class="icon_cart_alt text-dark font-weight-bold"></i>
            <span class="badge rounded-pill bg-warning text-dark">0</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>

<header class="header">
    <!-- HEADER -->
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="/"><img src="img/logo-light.webp" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="./about.html">About Us</a></li>
                        <li><a href="./contact.html">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3 d-flex justify-content-end align-items-center">
                <button type="button" class="primary-btn mb-3 py-2 px-2" data-toggle="modal" data-target="#signinmodal">
                    Sign In
                </button>
                <div class="px-2"></div>
                <a href="{{ route('register') }}">
                    <button type="button" class="primary-btn mb-3 py-2 px-2">
                        Sign Up
                    </button>
                </a>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

<!-- Modal Signin-->
<div class="modal fade" id="signinmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="checkout__input">
                        <p>Username<span>*</span></p>
                        <input type="text" class="checkout__input__add" />
                    </div>
                    <div class="checkout__input">
                        <p>Password<span>*</span></p>
                        <input type="password" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="btn btn-secondary" value="Sign In" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>
                    Belum punya akun? lakukan registrasi di
                    <a href="" class="text-danger">sini</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- NAVBAR SEARCH -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here....." />
        </form>
    </div>
</div>