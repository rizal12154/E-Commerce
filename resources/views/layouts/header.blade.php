<!-- announcement bar start -->
<div class="announcement-bar bg-1 py-1 py-lg-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3 d-lg-block d-none">
                <div class="announcement-call-wrapper">
                    <div class="announcement-call">
                        <a class="announcement-text text-white" href="tel:+1-078-2376">Call: +1 078 2376</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="announcement-text-wrapper d-flex align-items-center justify-content-center">
                    <p class="announcement-text text-white">New year sale - 30% off</p>
                </div>
            </div>
            <div class="col-lg-3 d-lg-block d-none">
                <div class="announcement-meta-wrapper d-flex align-items-center justify-content-end">
                    <div class="announcement-meta d-flex align-items-center">
                        <a class="announcement-login announcement-text text-white" href="login.html">
                            <svg class="icon icon-user" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                    fill="#fff" />
                            </svg>
                            <span>Login</span>
                        </a>
                        <span class="separator-login d-flex px-3">
                            <svg width="2" height="9" viewBox="0 0 2 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M1 0.5V8.5" stroke="#FEFEFE" stroke-linecap="round" />
                            </svg>
                        </span>
                        <div class="currency-wrapper">
                            <button type="button" class="currency-btn btn-reset text-white"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="flag" src="{{ asset('') }}assets/img/flag/usd.jpg" alt="img">
                                <span>USD</span>
                                <span>
                                    <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </button>

                            <ul class="currency-list dropdown-menu dropdown-menu-end px-2">
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="USD">
                                        <img class="flag" src="{{ asset('') }}assets/img/flag/usd.jpg" alt="img">
                                        <span>USD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="CAD">
                                        <img class="flag" src="{{ asset('') }}assets/img/flag/cad.jpg" alt="img">
                                        <span>CAD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="EUR">
                                        <img class="flag" src="{{ asset('') }}assets/img/flag/eur.jpg" alt="img">
                                        <span>EUR</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="JPY">
                                        <img class="flag" src="{{ asset('') }}assets/img/flag/jpy.jpg" alt="img">
                                        <span>JPY</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="GBP">
                                        <img class="flag" src="{{ asset('') }}assets/img/flag/gbp.jpg" alt="img">
                                        <span>GBP</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- announcement bar end -->

<header class="sticky-header border-btm-black header-1">
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-4">
                    <div class="header-logo">
                        <a href="index.html" class="logo-main">
                            <img src="{{ asset('') }}assets/img/logo.png" loading="lazy" alt="bisum">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <nav class="site-navigation">
                        <ul class="main-menu list-unstyled justify-content-center">
                            <li class="menu-list-item nav-item has-dropdown active">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="#">
                                        Home
                                    </a>
                                    {{-- <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </span>
                                    </svg> --}}
                                </div>
                                {{-- <div class="submenu-transform submenu-transform-desktop">
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="index.html">Home 1</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="index-shoe.html">Home
                                                2</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="index-bag.html">Home
                                                3</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="index-tools.html">Home
                                                4</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </li>
                            <li class="menu-list-item nav-item has-megamenu">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="collection-left-sidebar.html">
                                        Shop
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="container">
                                        <ul class="submenu megamenu-container list-unstyled">
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="collection-left-sidebar.html">
                                                        CATEGORY PAGES
                                                    </a>
                                                </div>
                                                <div class="submenu-transform megamenu-transform">
                                                    <ul class="megamenu list-unstyled">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-left-sidebar.html">With Left
                                                                Sidebar</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-right-sidebar.html">With Right
                                                                Sidebar</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-left-sidebar.html">3 Column
                                                                Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-without-sidebar.html">4 Column
                                                                Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-without-sidebar.html">Without
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div
                                                    class="mega-menu-header d-flex align-items-center justify-content-between">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="collection-right-sidebar.html">
                                                        PRODUCT PAGES
                                                    </a>
                                                </div>
                                                <div class="submenu-transform megamenu-transform">
                                                    <ul class="megamenu list-unstyled">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Simple Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Variable Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Sale Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Featured & On Sale</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product-2.html">Tab Inside</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div
                                                    class="mega-menu-header d-flex align-items-center justify-content-between">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="index.html">
                                                        PRODUCT LAYOUTS
                                                    </a>
                                                </div>
                                                <div class="submenu-transform megamenu-transform">
                                                    <ul class="megamenu list-unstyled">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product-2.html">Grid Images</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Vertical Thumb</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Gallery Type</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Product Width Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Sticky Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div
                                                    class="mega-menu-header d-flex align-items-center justify-content-between">
                                                    <a class="mega-menu-img nav-link-sub nav-text-sub"
                                                        href="collection-left-sidebar.html">
                                                        <img class="menu-img" src="{{ asset('') }}assets/img/menu/1.jpg" alt="img">
                                                        <h2 class="img-menu-heading text_16 mt-2">Featured
                                                            Collection</h2>
                                                        <div
                                                            class="img-menu-action text_12 bg-transparent p-0">
                                                            <span>DISCOVER NOW</span>
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="30" height="18" fill="#000"
                                                                    class="icon-right-long" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item has-dropdown">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="blog.html">Blog</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="article.html">Blog
                                                Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item has-dropdown">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="about-us.html">
                                        Pages
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="about-us.html">About
                                                Us</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="contact.html">Contact</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="faq.html">FAQ</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="404.html">404 page</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="login.html">Login</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub"
                                                href="register.html">Register</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub"
                                                href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="cart.html">Cart</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub"
                                                href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-8 col-8">
                    <div class="header-action d-flex align-items-center justify-content-end">
                        <a class="header-action-item header-search" href="javascript:void(0)">
                            <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a class="header-action-item header-wishlist ms-4 d-none d-lg-block"
                            href="wishlist.html">
                            <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a class="header-action-item header-cart ms-4" href="#drawer-cart"
                            data-bs-toggle="offcanvas">
                            <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a class="header-action-item header-hamburger ms-4 d-lg-none" href="#drawer-menu"
                            data-bs-toggle="offcanvas">
                            <svg class="icon icon-hamburger" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-wrapper">
            <div class="container">
                <form action="#" class="search-form d-flex align-items-center">
                    <button type="submit" class="search-submit bg-transparent pl-0 text-start">
                        <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                fill="black" />
                        </svg>
                    </button>
                    <div class="search-input mr-4">
                        <input type="text" placeholder="Search your products..." autocomplete="off">
                    </div>
                    <div class="search-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-close">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<main id="MainContent" class="content-for-layout">
    <!-- slideshow start -->
    <div class="slideshow-section position-relative">
        <div class="slideshow-active activate-slider" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "dots": true,
            "arrows": true,
            "responsive": [
                {
                "breakpoint": 768,
                "settings": {
                    "arrows": false
                }
                }
            ]
        }'>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="{{ asset('') }}assets/img/slideshow/f1.jpg" alt="slide-1">
                <img class="slide-img d-md-none" src="{{ asset('') }}assets/img/slideshow/f1-m.jpg" alt="slide-1">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                        <div class="content-box slide-content slide-content-1 py-4">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                href="collection-left-sidebar.html"
                                data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="{{ asset('') }}assets/img/slideshow/f2.jpg" alt="slide-2">
                <img class="slide-img d-md-none" src="{{ asset('') }}assets/img/slideshow/f2-m.jpg" alt="slide-2">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-end">
                        <div class="content-box slide-content slide-content-1 py-4 text-center">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                href="collection-left-sidebar.html"
                                data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item slide-item-bag position-relative">
                <img class="slide-img d-none d-md-block" src="{{ asset('') }}assets/img/slideshow/f3.jpg" alt="slide-3">
                <img class="slide-img d-md-none" src="{{ asset('') }}assets/img/slideshow/f3-m.jpg" alt="slide-3">
                <div class="content-absolute content-slide">
                    <div class="container height-inherit d-flex align-items-center justify-content-center">
                        <div class="content-box slide-content slide-content-1 py-4 text-center">
                            <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Discover The Best Furniture
                            </h2>
                            <p class="slide-subheading heading_24 animate__animated animate__fadeInUp"
                                data-animation="animate__animated animate__fadeInUp">
                                Look for your inspiration here
                            </p>
                            <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                                href="collection-left-sidebar.html"
                                data-animation="animate__animated animate__fadeInUp">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="activate-arrows"></div>
        <div class="activate-dots dot-tools"></div>
    </div>
    <!-- slideshow end -->

    <!-- trusted badge start -->
    <div class="trusted-section mt-100 overflow-hidden">
        <div class="trusted-section-inner">
            <div class="container">
                <div class="row justify-content-center trusted-row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge rounded p-0">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="{{ asset('') }}assets/img/trusted/1.png" alt="icon-1">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">Free Shipping & Return</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">On all order over
                                    $99.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge rounded p-0">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="{{ asset('') }}assets/img/trusted/2.png" alt="icon-2">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">Customer Support 24/7</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">Instant access to
                                    support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="trusted-badge rounded p-0">
                            <div class="trusted-icon">
                                <img class="icon-trusted" src="{{ asset('') }}assets/img/trusted/3.png" alt="icon-3">
                            </div>
                            <div class="trusted-content">
                                <h2 class="heading_18 trusted-heading">100% Secure Payment</h2>
                                <p class="text_16 trusted-subheading trusted-subheading-2">We ensure secure
                                    payment!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trusted badge end -->

    <!-- banner start -->
    <div class="grid-banner mt-100 overflow-hidden">
        <div class="collection-tab-inner mt-0">
            <div class="container">
                <div class="grid-container-2">
                    <a class="grid-item grid-item-1 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                        data-aos="fade-right" data-aos-duration="700">
                        <img class="banner-img rounded" src="{{ asset('') }}assets/img/banner/f1.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex">
                                <div class="content-box banner-content p-4">
                                    <h2 class="heading_34 primary-color">20% Off On <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                        VIEW MORE
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="grid-item grid-item-2 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                        data-aos="fade-right" data-aos-duration="700">
                        <img class="banner-img rounded" src="{{ asset('') }}assets/img/banner/f3.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex justify-content-end">
                                <div class="content-box banner-content p-4 text-end">
                                    <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                        VIEW MORE
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="grid-item grid-item-3 position-relative rounded mt-0 d-flex" href="collection-left-sidebar.html"
                        data-aos="fade-left" data-aos-duration="700">
                        <img class="banner-img rounded" src="{{ asset('') }}assets/img/banner/f2.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex">
                                <div class="content-box banner-content p-4">
                                    <h2 class="heading_34 primary-color">Let’s buy <br>New Chair</h2>
                                    <p class="text_14 mt-2 primary-color">Get Instant Cashback</p>
                                    <span class="text_12 mt-4 link-underline d-block primary-color">
                                        VIEW MORE
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- collection start -->
    <div class="featured-collection mt-100 overflow-hidden">
        <div class="collection-tab-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Featured Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/9.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/1.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-badge">
                                    <span class="badge-label badge-percentage rounded">-44%</span>
                                </div>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">best wood furniture</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/10.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/2.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/11.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/3.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-badge">
                                    <span class="badge-label badge-new rounded">New</span>
                                </div>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/14.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/4.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">bisum tea table</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/15.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/5.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Eliot Reversible tool</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/16.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/6.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Vita Lounge wardrobe</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/17.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/7.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Sarno Dining Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="product-card">
                            <div class="product-card-img">
                                <a class="hover-switch" href="collection-left-sidebar.html">
                                    <img class="secondary-img" src="{{ asset('') }}assets/img/products/furniture/19.jpg"
                                        alt="product-img">
                                    <img class="primary-img" src="{{ asset('') }}assets/img/products/furniture/8.jpg"
                                        alt="product-img">
                                </a>

                                <div class="product-card-action product-card-action-2 justify-content-center">
                                    <a href="#quickview-modal" class="action-card action-quickview"
                                        data-bs-toggle="modal">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-wishlist">
                                        <svg class="icon icon-wishlist" width="26" height="22"
                                            viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>

                                    <a href="#" class="action-card action-addtocart">
                                        <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                fill="#00234D" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-card-details">
                                <ul class="color-lists list-unstyled d-flex align-items-center">
                                    <li><a href="javascript:void(0)"
                                            class="color-swatch swatch-black active"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                    <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                    </li>
                                </ul>
                                <h3 class="product-card-title">
                                    <a href="collection-left-sidebar.html">Vita Lounge Chair</a>
                                </h3>
                                <div class="product-card-price">
                                    <span class="card-price-regular">$1529</span>
                                    <span class="card-price-compare text-decoration-line-through">$1759</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                    <a class="btn-primary" href="#">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
    <!-- collection end -->

    <!-- shop by category start -->
    <div class="shop-category mt-100 overflow-hidden">
        <div class="collection-tab-inner mt-0">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Shop By Category</h2>
                </div>
                <div class="shop-category-2 shop-category-inner">
                    <div class="scattered-item" data-aos="fade-left" data-aos-duration="700">
                        <div class="scattered-wrapper">
                            <div class="scattered-content">
                                <img class="scattered-img" src="{{ asset('') }}assets/img/banner/f4.jpg" alt="img">
                            </div>
                            <div class="scattered-details">
                                <h2 class="scattered-heading primary-color">Home Decor</h2>
                                <a href="collection-left-sidebar.html"
                                    class="text_12 link-underline d-block primary-color mt-2">
                                    SHOP COLLECTION
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="scattered-item" data-aos="fade-right" data-aos-duration="700">
                        <div class="scattered-wrapper">
                            <div class="scattered-content">
                                <img class="scattered-img" src="{{ asset('') }}assets/img/banner/f5.jpg" alt="img">
                            </div>
                            <div class="scattered-details">
                                <h2 class="scattered-heading primary-color">Storage Furniture</h2>
                                <a href="#2" class="text_12 link-underline d-block primary-color mt-2">
                                    SHOP COLLECTION
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="scattered-item" data-aos="fade-left" data-aos-duration="700">
                        <div class="scattered-wrapper">
                            <div class="scattered-content">
                                <img class="scattered-img" src="{{ asset('') }}assets/img/banner/f6.jpg" alt="img">
                            </div>
                            <div class="scattered-details">
                                <h2 class="scattered-heading primary-color">Black Cusion Chair</h2>
                                <a href="#3" class="text_12 link-underline d-block primary-color mt-2">
                                    SHOP COLLECTION
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop by category end -->

    <!-- video start -->
    <div class="video-section mt-100 overflow-hidden">
        <div class="overlay-furniture section-spacing"
            style="background: url('{{ asset('') }}assets/img/video/video-furniture.jpg') no-repeat fixed bottom center/cover">
            <div class="container video-container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-tools d-flex align-items-center justify-content-center">
                            <div class="video-button-area">
                                <a class="video-button" href="#video-modal" data-bs-toggle="modal">
                                    <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.5 12.134C22.1667 12.5189 22.1667 13.4811 21.5 13.866L2 25.1244C1.33333 25.5093 0.499999 25.0281 0.499999 24.2583L0.5 1.74167C0.5 0.971867 1.33333 0.490743 2 0.875643L21.5 12.134Z"
                                            fill="#FEFEFE" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" id="video-modal">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe height="600" src="https://www.youtube.com/embed/tvPnrfQCiCo"
                            title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video end -->

    <!-- testimonial start -->
    <div class="testimonial-section mt-100 overflow-hidden home-section">
        <div class="testimonial-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12" data-aos="fade-right" data-aos-duration="700">
                        <div class="section-header">
                            <h2 class="section-heading primary-color">What customer say</h2>
                            <p class="section-subheading">
                                The services provided by the officials was smooth and satisfactory. Products and
                                goods delivered were up to satisfaction.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-12 col-12" data-aos="fade-left"
                        data-aos-duration="700">
                        <div class="testimonial-container position-relative">
                            <div class="testimonial-slideshow common-slider" data-slick='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "dots": false,
                                    "arrows": true
                                }'>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon-wrap d-flex align-items-center">
                                        <div class="testimonial-icon-quote">
                                            <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </div>
                                        <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                        </div>
                                    </div>
                                    <p class="testimonial-review my-4 text_16">
                                        “ I am purchasing furniture from Bisum since the last 6 years. I love
                                        their
                                        prompt service and so far I have faced no complaints with their
                                        furniture.”
                                    </p>
                                    <div class="testimonial-reviewer d-flex align-items-center">
                                        <div class="reviewer-img">
                                            <img src="{{ asset('') }}assets/img/testimonial/john.jpg" alt="img">
                                        </div>
                                        <div class="reviewer-info ms-4">
                                            <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                            </h4>
                                            <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon-wrap d-flex align-items-center">
                                        <div class="testimonial-icon-quote">
                                            <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </div>
                                        <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                        </div>
                                    </div>
                                    <p class="testimonial-review my-4 text_16">
                                        “ I am purchasing furniture from Bisum since the last 6 years. I love
                                        their
                                        prompt service and so far I have faced no complaints with their
                                        furniture.”
                                    </p>
                                    <div class="testimonial-reviewer d-flex align-items-center">
                                        <div class="reviewer-img">
                                            <img src="{{ asset('') }}assets/img/testimonial/john.jpg" alt="img">
                                        </div>
                                        <div class="reviewer-info ms-4">
                                            <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                            </h4>
                                            <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon-wrap d-flex align-items-center">
                                        <div class="testimonial-icon-quote">
                                            <svg width="40" height="29" viewBox="0 0 40 29" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 28.99L11.7 0H19.5L12.22 28.99H0ZM20.28 28.99L32.11 0H39.91L32.5 28.99H20.28Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </div>
                                        <div class="testimonial-icon-star d-flex align-items-center ms-3">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                            <img src="{{ asset('') }}assets/img/icon/star.png" alt="img">
                                        </div>
                                    </div>
                                    <p class="testimonial-review my-4 text_16">
                                        “ I am purchasing furniture from Bisum since the last 6 years. I love
                                        their
                                        prompt service and so far I have faced no complaints with their
                                        furniture.”
                                    </p>
                                    <div class="testimonial-reviewer d-flex align-items-center">
                                        <div class="reviewer-img">
                                            <img src="{{ asset('') }}assets/img/testimonial/john.jpg" alt="img">
                                        </div>
                                        <div class="reviewer-info ms-4">
                                            <h4 class="reviewer-name heading_18 mb-2 primary-color">Floyd Miles
                                            </h4>
                                            <p class="reviewer-desig text_14 m-0">Executive, Hypebeast</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial end -->

    <!-- single banner start -->
    <div class="single-banner-section mt-100 overflow-hidden">
        <div class="position-relative overlay">
            <img class="single-banner-img" src="{{ asset('') }}assets/img/banner/single-banner-2.jpg" alt="slide-1">

            <div class="content-absolute content-slide">
                <div class="container height-inherit d-flex align-items-center justify-content-center">
                    <div class="content-box single-banner-content py-4 text-center" data-aos="fade-up"
                        data-aos-duration="700">
                        <h2 class="single-banner-heading heading_42 text-white animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                            data-aos-duration="700">
                            Created Furniture
                        </h2>
                        <p class="single-banner-text text_16 text-white animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                            data-aos-duration="700">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.
                        </p>
                        <a class="btn-primary single-banner-btn animate__animated animate__fadeInUp"
                            href="collection-left-sidebar.html"
                            data-animation="animate__animated animate__fadeInUp" data-aos="fade-up"
                            data-aos-duration="700">
                            DISCOVER NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single banner end -->

    <!-- latest blog start -->
    <div class="latest-blog-section mt-100 overflow-hidden home-section">
        <div class="latest-blog-inner">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-heading primary-color">Latest blogs</h2>
                </div>
                <div class="article-card-container position-relative">
                    <div class="common-slider" data-slick='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "dots": false,
                        "arrows": true,
                        "responsive": [
                          {
                            "breakpoint": 1281,
                            "settings": {
                              "slidesToShow": 2
                            }
                          },
                          {
                            "breakpoint": 602,
                            "settings": {
                              "slidesToShow": 1
                            }
                          }
                        ]
                    }'>

                        <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="article-card bg-transparent p-0 shadow-none">
                                <a class="article-card-img-wrapper" href="article.html">
                                    <img src="{{ asset('') }}assets/img/blog/furniture-1.jpg" alt="img"
                                        class="article-card-img rounded">

                                    <span class="article-tag article-tag-absolute rounded">Decor</span>
                                </a>
                                <p class="article-card-published text_12 d-flex align-items-center">
                                    <span class="article-date d-flex align-items-center">
                                        <span class="icon-publish">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">30 December, 2022</span>
                                    </span>
                                    <span class="article-author d-flex align-items-center ms-4">
                                        <span class="icon-author"><svg width="15" height="17"
                                                viewBox="0 0 15 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">Lara Joe</span>
                                    </span>
                                </p>
                                <h2 class="article-card-heading heading_18">
                                    <a class="heading_18" href="article.html">
                                        Pure is the most furniture.
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="article-card bg-transparent p-0 shadow-none">
                                <a class="article-card-img-wrapper" href="article.html">
                                    <img src="{{ asset('') }}assets/img/blog/furniture-2.jpg" alt="img"
                                        class="article-card-img rounded">
                                    <span class="article-tag article-tag-absolute rounded">Furniture</span>
                                </a>
                                <p class="article-card-published text_12 d-flex align-items-center">
                                    <span class="article-date d-flex align-items-center">
                                        <span class="icon-publish">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">30 December, 2022</span>
                                    </span>
                                    <span class="article-author d-flex align-items-center ms-4">
                                        <span class="icon-author"><svg width="15" height="17"
                                                viewBox="0 0 15 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">Lara Joe</span>
                                    </span>
                                </p>
                                <h2 class="article-card-heading heading_18">
                                    <a class="heading_18" href="article.html">
                                        Minimalism in your room.
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="article-card bg-transparent p-0 shadow-none">
                                <a class="article-card-img-wrapper" href="article.html">
                                    <img src="{{ asset('') }}assets/img/blog/furniture-3.jpg" alt="img"
                                        class="article-card-img rounded">
                                    <span class="article-tag article-tag-absolute rounded">Kitchen</span>
                                </a>
                                <p class="article-card-published text_12 d-flex align-items-center">
                                    <span class="article-date d-flex align-items-center">
                                        <span class="icon-publish">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">30 December, 2022</span>
                                    </span>
                                    <span class="article-author d-flex align-items-center ms-4">
                                        <span class="icon-author"><svg width="15" height="17"
                                                viewBox="0 0 15 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">Lara Joe</span>
                                    </span>
                                </p>
                                <h2 class="article-card-heading heading_18">
                                    <a class="heading_18" href="article.html">
                                        Build up your kitchen.
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="article-slick-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="article-card bg-transparent p-0 shadow-none">
                                <a class="article-card-img-wrapper" href="article.html">
                                    <img src="{{ asset('') }}assets/img/blog/furniture-4.jpg" alt="img"
                                        class="article-card-img rounded">
                                    <span class="article-tag article-tag-absolute rounded">Furniture</span>
                                </a>
                                <p class="article-card-published text_12 d-flex align-items-center">
                                    <span class="article-date d-flex align-items-center">
                                        <span class="icon-publish">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.46875 0.875V1.59375H0.59375V17.4063H16.4063V1.59375H13.5313V0.875H12.0938V1.59375H4.90625V0.875H3.46875ZM2.03125 3.03125H3.46875V3.75H4.90625V3.03125H12.0938V3.75H13.5313V3.03125H14.9688V4.46875H2.03125V3.03125ZM2.03125 5.90625H14.9688V15.9688H2.03125V5.90625ZM6.34375 7.34375V8.78125H7.78125V7.34375H6.34375ZM9.21875 7.34375V8.78125H10.6563V7.34375H9.21875ZM12.0938 7.34375V8.78125H13.5313V7.34375H12.0938ZM3.46875 10.2188V11.6563H4.90625V10.2188H3.46875ZM6.34375 10.2188V11.6563H7.78125V10.2188H6.34375ZM9.21875 10.2188V11.6563H10.6563V10.2188H9.21875ZM12.0938 10.2188V11.6563H13.5313V10.2188H12.0938ZM3.46875 13.0938V14.5313H4.90625V13.0938H3.46875ZM6.34375 13.0938V14.5313H7.78125V13.0938H6.34375ZM9.21875 13.0938V14.5313H10.6563V13.0938H9.21875Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">30 December, 2022</span>
                                    </span>
                                    <span class="article-author d-flex align-items-center ms-4">
                                        <span class="icon-author"><svg width="15" height="17"
                                                viewBox="0 0 15 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0.59375C4.72888 0.59375 2.46875 2.85388 2.46875 5.625C2.46875 7.3573 3.35315 8.89587 4.69238 9.80274C2.12903 10.9033 0.3125 13.447 0.3125 16.4063H1.75C1.75 13.2224 4.31616 10.6563 7.5 10.6563C10.6838 10.6563 13.25 13.2224 13.25 16.4063H14.6875C14.6875 13.447 12.871 10.9033 10.3076 9.80274C11.6469 8.89587 12.5313 7.3573 12.5313 5.625C12.5313 2.85388 10.2711 0.59375 7.5 0.59375ZM7.5 2.03125C9.49341 2.03125 11.0938 3.63159 11.0938 5.625C11.0938 7.61841 9.49341 9.21875 7.5 9.21875C5.50659 9.21875 3.90625 7.61841 3.90625 5.625C3.90625 3.63159 5.50659 2.03125 7.5 2.03125Z"
                                                    fill="#00234D" />
                                            </svg>
                                        </span>
                                        <span class="ms-2">Lara Joe</span>
                                    </span>
                                </p>
                                <h2 class="article-card-heading heading_18">
                                    <a class="heading_18" href="article.html">
                                        Minimalism in your room.
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest blog end -->

    <!-- brand logo start -->
    <div class="brand-logo-section mt-100">
        <div class="brand-logo-inner">
            <div class="container">
                <div class="brand-logo-container overflow-hidden">
                    <div class="scroll-horizontal row align-items-center flex-nowrap">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                            data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{ asset('') }}assets/img/brand/1.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                            data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{ asset('') }}assets/img/brand/2.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                            data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{ asset('') }}assets/img/brand/3.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                            data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{ asset('') }}assets/img/brand/4.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                            data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{ asset('') }}assets/img/brand/5.png" alt="img">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" data-aos="fade-up"
                            data-aos-duration="700">
                            <a href="index.html" class="brand-logo d-flex align-items-center justify-content-center">
                                <img src="{{ asset('') }}assets/img/brand/6.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo end -->
</main>
