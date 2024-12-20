@include('layouts.style')

@include('layouts.produk_header')

@section('title', 'Keranjang')
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
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="cart-page mt-100">
            <div class="container">
                <div class="cart-page-wrapper">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <table class="cart-table w-100">
                                <thead>
                                    <tr>
                                        <th class="cart-caption heading_18">Product</th>
                                        <th class="cart-caption heading_18"></th>
                                        <th class="cart-caption text-center heading_18 d-none d-md-table-cell">Quantity</th>
                                        <th class="cart-caption text-end heading_18">Price</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="cart-item">
                                        <td class="cart-item-media">
                                            <div class="mini-img-wrapper">
                                                <img class="mini-img" src="assets/img/products/furniture/1.jpg"
                                                    alt="img">
                                            </div>
                                        </td>
                                        <td class="cart-item-details">
                                            <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                                            <p class="product-vendor">XS / Dove Gray</p>
                                        </td>
                                        <td class="cart-item-quantity">
                                            <div class="quantity d-flex align-items-center justify-content-between">
                                                <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                        alt="minus"></button>
                                                <input class="qty-input" type="number" name="qty" value="1"
                                                    min="0">
                                                <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                        alt="plus"></button>
                                            </div>
                                            <a href="#" class="product-remove mt-2">Remove</a>
                                        </td>
                                        <td class="cart-item-price text-end">
                                            <div class="product-price">$580.00</div>
                                        </td>
                                    </tr>
                                    <tr class="cart-item">
                                        <td class="cart-item-media">
                                            <div class="mini-img-wrapper">
                                                <img class="mini-img" src="assets/img/products/furniture/2.jpg"
                                                    alt="img">
                                            </div>
                                        </td>
                                        <td class="cart-item-details">
                                            <h2 class="product-title"><a href="#">Vita Lounge Chair</a></h2>
                                            <p class="product-vendor">XS / Pink</p>
                                        </td>
                                        <td class="cart-item-quantity">
                                            <div class="quantity d-flex align-items-center justify-content-between">
                                                <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                        alt="minus"></button>
                                                <input class="qty-input" type="number" name="qty" value="1"
                                                    min="0">
                                                <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                        alt="plus"></button>
                                            </div>
                                            <a href="#" class="product-remove mt-2">Remove</a>
                                        </td>
                                        <td class="cart-item-price text-end">
                                            <div class="product-price">$580.00</div>
                                        </td>
                                    </tr>
                                    <tr class="cart-item">
                                        <td class="cart-item-media">
                                            <div class="mini-img-wrapper">
                                                <img class="mini-img" src="assets/img/products/furniture/3.jpg"
                                                    alt="img">
                                            </div>
                                        </td>
                                        <td class="cart-item-details">
                                            <h2 class="product-title"><a href="#">Sarno Dining Chair</a></h2>
                                            <p class="product-vendor">XS / Dove Gray</p>
                                        </td>
                                        <td class="cart-item-quantity">
                                            <div class="quantity d-flex align-items-center justify-content-between">
                                                <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                        alt="minus"></button>
                                                <input class="qty-input" type="number" name="qty" value="1"
                                                    min="0">
                                                <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                        alt="plus"></button>
                                            </div>
                                            <a href="#" class="product-remove mt-2">Remove</a>
                                        </td>
                                        <td class="cart-item-price text-end">
                                            <div class="product-price">$580.00</div>
                                        </td>
                                    </tr>
                                    <tr class="cart-item">
                                        <td class="cart-item-media">
                                            <div class="mini-img-wrapper">
                                                <img class="mini-img" src="assets/img/products/furniture/4.jpg"
                                                    alt="img">
                                            </div>
                                        </td>
                                        <td class="cart-item-details">
                                            <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a>
                                            </h2>
                                            <p class="product-vendor">XS / Dove Gray</p>
                                        </td>
                                        <td class="cart-item-quantity">
                                            <div class="quantity d-flex align-items-center justify-content-between">
                                                <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                        alt="minus"></button>
                                                <input class="qty-input" type="number" name="qty" value="1"
                                                    min="0">
                                                <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                        alt="plus"></button>
                                            </div>
                                            <a href="#" class="product-remove mt-2">Remove</a>
                                        </td>
                                        <td class="cart-item-price text-end">
                                            <div class="product-price">$580.00</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="cart-total-area">
                                <h3 class="cart-total-title d-none d-lg-block mb-0">Cart Totals</h4>
                                    <div class="cart-total-box mt-4">
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
                                        <p class="shipping_text">Shipping & taxes calculated at checkout</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a href="/checkout"
                                                class="position-relative btn-primary text-uppercase">
                                                Procced to checkout
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

    {{-- Footer --}}
@include('layouts.produk_footer')

    {{-- Script --}}
@include('layouts.script')
