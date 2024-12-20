@include('layouts.style')

@include('layouts.produk_header')

@section('title', 'Cek Out')
    <!-- breadcrumb start -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="/home">Home</a></li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>Cart</li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="checkout-page mt-100">
            <div class="container">
                <div class="checkout-page-wrapper">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                            <div class="section-header mb-3">
                                <h2 class="section-heading">Check out</h2>
                            </div>

                            <div class="checkout-progress overflow-hidden">
                                <ol class="checkout-bar px-0">
                                    <li class="progress-step step-done"><a href="cart.html">Cart</a></li>
                                    <li class="progress-step step-active"><a href="checkout.html">Your Details</a></li>
                                    <li class="progress-step step-todo"><a href="checkout.html">Shipping</a></li>
                                    <li class="progress-step step-todo"><a href="checkout.html">Payment</a></li>
                                    <li class="progress-step step-todo"><a href="checkout.html">Review</a></li>
                                </ol>
                            </div>

                            <div class="checkout-user-area overflow-hidden d-flex align-items-center">
                                <div class="checkout-user-img me-4">
                                    <img src="assets/img/checkout/user.jpg" alt="img">
                                </div>
                                <div class="checkout-user-details d-flex align-items-center justify-content-between w-100">
                                    <div class="checkout-user-info">
                                        <h2 class="checkout-user-name">Susan Gardner</h2>
                                        <p class="checkout-user-address mb-0">2752 avenue Royale, Quebec, G1R 2B2, Canada
                                        </p>
                                    </div>

                                    <a href="#" class="edit-user btn-secondary">EDIT PROFILE</a>
                                </div>
                            </div>

                            <div class="shipping-address-area">
                                <h2 class="shipping-address-heading pb-1">Shipping address</h2>
                                <div class="shipping-address-form-wrapper">
                                    <form action="#" class="shipping-address-form common-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">First name</label>
                                                    <input type="text" />
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Last name</label>
                                                    <input type="text" />
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Email address</label>
                                                    <input type="email" />
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Phone number</label>
                                                    <input type="text" />
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Company</label>
                                                    <input type="text" />
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Country</label>
                                                    <select class="form-select">
                                                        <option selected="ca">Canada</option>
                                                        <option value="us">USA</option>
                                                        <option value="au">Australia</option>
                                                        <option value="me">Mexico</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">City</label>
                                                    <select class="form-select">
                                                        <option selected="ca">Toronto</option>
                                                        <option value="us">Quebec</option>
                                                        <option value="au">Windsor</option>
                                                        <option value="me">Calgary</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Zip code</label>
                                                    <input type="text" />
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Address 1</label>
                                                    <input type="text" />
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Address 2</label>
                                                    <input type="text" />
                                                </fieldset>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="shipping-address-area billing-area">
                                <h2 class="shipping-address-heading pb-1">Billing address</h2>
                                <div class="form-checkbox d-flex align-items-center mt-4">
                                    <input class="form-check-input mt-0" type="checkbox">
                                    <label class="form-check-label ms-2">
                                        Same as shipping address
                                    </label>
                                </div>
                            </div>
                            <div class="shipping-address-area billing-area">
                                <div class="minicart-btn-area d-flex align-items-center justify-content-between flex-wrap">
                                    <a href="cart.html" class="checkout-page-btn minicart-btn btn-secondary">BACK TO
                                        CART</a>
                                    <a href="checkout.html" class="checkout-page-btn minicart-btn btn-primary">PROCEED TO
                                        SHIPPING</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                            <div class="cart-total-area checkout-summary-area">
                                <h3 class="d-none d-lg-block mb-0 text-center heading_24 mb-4">Order summary</h4>

                                    <div class="minicart-item d-flex">
                                        <div class="mini-img-wrapper">
                                            <img class="mini-img" src="assets/img/products/furniture/1.jpg"
                                                alt="img">
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a>
                                            </h2>
                                            <p class="product-vendor">$150 x 1</p>
                                        </div>
                                    </div>
                                    <div class="minicart-item d-flex">
                                        <div class="mini-img-wrapper">
                                            <img class="mini-img" src="assets/img/products/furniture/2.jpg"
                                                alt="img">
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a>
                                            </h2>
                                            <p class="product-vendor">$150 x 1</p>
                                        </div>
                                    </div>
                                    <div class="minicart-item d-flex">
                                        <div class="mini-img-wrapper">
                                            <img class="mini-img" src="assets/img/products/furniture/3.jpg"
                                                alt="img">
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a>
                                            </h2>
                                            <p class="product-vendor">$150 x 1</p>
                                        </div>
                                    </div>
                                    <div class="minicart-item d-flex">
                                        <div class="mini-img-wrapper">
                                            <img class="mini-img" src="assets/img/products/furniture/4.jpg"
                                                alt="img">
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a>
                                            </h2>
                                            <p class="product-vendor">$150 x 1</p>
                                        </div>
                                    </div>

                                    <div class="cart-total-box mt-4 bg-transparent p-0">
                                        <div class="subtotal-item subtotal-box">
                                            <h4 class="subtotal-title">Subtotals:</h4>
                                            <p class="subtotal-value">$465.00</p>
                                        </div>
                                        <div class="subtotal-item shipping-box">
                                            <h4 class="subtotal-title">Shipping:</h4>
                                            <p class="subtotal-value">$10.00</p>
                                        </div>
                                        <div class="subtotal-item discount-box">
                                            <h4 class="subtotal-title">Discount:</h4>
                                            <p class="subtotal-value">$100.00</p>
                                        </div>
                                        <hr />
                                        <div class="subtotal-item discount-box">
                                            <h4 class="subtotal-title">Total:</h4>
                                            <p class="subtotal-value">$1000.00</p>
                                        </div>


                                        <div class="mt-4 checkout-promo-code">
                                            <input class="input-promo-code" type="text" placeholder="Promo code" />
                                            <a href="checkout.html"
                                                class="btn-apply-code position-relative btn-secondary text-uppercase mt-3">
                                                Apply Promo Code
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@include('layouts.produk_footer')

@include('layouts.script')