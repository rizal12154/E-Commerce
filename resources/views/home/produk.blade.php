@extends('layouts.produk')

@section('title', 'Produk')

@section('Default content')
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
    </button>
    <!-- scrollup end -->

    <!-- drawer cart start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="drawer-cart">
        <div class="offcanvas-header border-btm-black">
            <h5 class="cart-drawer-heading text_16">Your Cart (04)</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="cart-content-area d-flex justify-content-between flex-column">
                <div class="minicart-loop custom-scrollbar">
                    <!-- minicart item -->
                    <div class="minicart-item d-flex">
                        <div class="mini-img-wrapper">
                            <img class="mini-img" src="assets/img/products/furniture/1.jpg" alt="img">
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                            <p class="product-vendor">XS / Dove Gray</p>
                            <div class="misc d-flex align-items-end justify-content-between">
                                <div class="quantity d-flex align-items-center justify-content-between">
                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                            alt="minus"></button>
                                    <input class="qty-input" type="number" name="qty" value="1"
                                        min="0">
                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                            alt="plus"></button>
                                </div>
                                <div class="product-remove-area d-flex flex-column align-items-end">
                                    <div class="product-price">$580.00</div>
                                    <a href="#" class="product-remove">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- minicart item -->
                    <div class="minicart-item d-flex">
                        <div class="mini-img-wrapper">
                            <img class="mini-img" src="assets/img/products/furniture/2.jpg" alt="img">
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="#">Vita Lounge Chair</a></h2>
                            <p class="product-vendor">XS / Pink</p>
                            <div class="misc d-flex align-items-end justify-content-between">
                                <div class="quantity d-flex align-items-center justify-content-between">
                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                            alt="minus"></button>
                                    <input class="qty-input" type="number" name="qty" value="1"
                                        min="0">
                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                            alt="plus"></button>
                                </div>
                                <div class="product-remove-area d-flex flex-column align-items-end">
                                    <div class="product-price">$580.00</div>
                                    <a href="#" class="product-remove">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- minicart item -->
                    <div class="minicart-item d-flex">
                        <div class="mini-img-wrapper">
                            <img class="mini-img" src="assets/img/products/furniture/3.jpg" alt="img">
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="#">Sarno Dining Chair</a></h2>
                            <p class="product-vendor">XS / Dove Gray</p>
                            <div class="misc d-flex align-items-end justify-content-between">
                                <div class="quantity d-flex align-items-center justify-content-between">
                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                            alt="minus"></button>
                                    <input class="qty-input" type="number" name="qty" value="1"
                                        min="0">
                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                            alt="plus"></button>
                                </div>
                                <div class="product-remove-area d-flex flex-column align-items-end">
                                    <div class="product-price">$580.00</div>
                                    <a href="#" class="product-remove">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- minicart item -->
                    <div class="minicart-item d-flex">
                        <div class="mini-img-wrapper">
                            <img class="mini-img" src="assets/img/products/furniture/4.jpg" alt="img">
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="#">Vita Lounge Chair</a></h2>
                            <p class="product-vendor">XS / Dove Gray</p>
                            <div class="misc d-flex align-items-end justify-content-between">
                                <div class="quantity d-flex align-items-center justify-content-between">
                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                            alt="minus"></button>
                                    <input class="qty-input" type="number" name="qty" value="1"
                                        min="0">
                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                            alt="plus"></button>
                                </div>
                                <div class="product-remove-area d-flex flex-column align-items-end">
                                    <div class="product-price">$580.00</div>
                                    <a href="#" class="product-remove">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="minicart-footer">
                    <div class="minicart-calc-area">
                        <div class="minicart-calc d-flex align-items-center justify-content-between">
                            <span class="cart-subtotal mb-0">Subtotal</span>
                            <span class="cart-subprice">$1548.00</span>
                        </div>
                        <p class="cart-taxes text-center my-4">Taxes and shipping will be calculated at checkout.
                        </p>
                    </div>
                    <div class="minicart-btn-area d-flex align-items-center justify-content-between">
                        <a href="cart.html" class="minicart-btn btn-secondary">View Cart</a>
                        <a href="checkout.html" class="minicart-btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="cart-empty-area text-center py-5 d-none">
                <div class="cart-empty-icon pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </div>
                <p class="cart-empty">You have no items in your cart</p>
            </div>
        </div>
    </div>
    <!-- drawer cart end -->

    <!-- product quickview start -->
    <div class="modal fade" tabindex="-1" id="quickview-modal">
    @endsection
