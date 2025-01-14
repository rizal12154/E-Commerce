@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <!-- breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                <div class="tf-breadcrumb-list">
                    <a href="/home" class="text">Home</a>
                    <i class="icon icon-arrow-right"></i>
                    <a href="/shop" class="text">Shop</a>
                    <i class="icon icon-arrow-right"></i>
                    <span class="text">{{ $produk->nama }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- default -->
    <section class="flat-spacing-4 pt_0">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                    data-direction="vertical">
                                    <div class="swiper-wrapper stagger-wrap">
                                        <div class="swiper-slide stagger-item" data-color="beige">
                                            <div class="item">
                                                <img class="lazyload" data-src="{{ asset('storage/' . $produk->gambar) }}"
                                                    src="{{ asset('storage/' . $produk->gambar) }}" alt="img-product">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                    <div class="swiper-wrapper">
                                        <!-- beige -->
                                        <div class="swiper-slide" data-color="beige">
                                            <a href="images/shop/products/p-d1.png" target="_blank" class="item"
                                                data-pswp-width="770px" data-pswp-height="1075px">
                                                <img class="tf-image-zoom lazyload"
                                                    src="{{ asset('storage/' . $produk->gambar) }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-list other-image-zoom">
                                <div class="tf-product-info-title">
                                    <h5>{{ $produk->nama }}</h5>
                                </div>
                                <div class="tf-product-info-price">
                                    <div class="price-on-sale">Rp. {{ number_format($produk->harga, 0, ',', '.') }}
                                    </div>
                                </div>
                                {{-- <div class="tf-product-info-quantity">
                                    <div class="quantity-title fw-6">Quantity</div>
                                    <div class="wg-quantity">
                                        <span class="btn-quantity btn-decrease" data-action="decrease">-</span>
                                        <input type="number" class="quantity-product" name="number" value="1"
                                            min="1">
                                        <span class="btn-quantity btn-increase" data-action="increase">+</span>
                                    </div>
                                </div> --}}

                                <div class="tf-product-info-buy-button">
                                    <form action="{{ route('keranjang.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="produk_id" value="{{ $produk->produk_id }}">
                                        <input type="hidden" name="jumlah" id="jumlah-produk" value="1">
                                        <input type="hidden" name="harga_total" id="harga-total"
                                            value="{{ $produk->harga }}">
                                        <button type="submit"
                                            class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart">
                                            <span>Add to cart -&nbsp;</span>
                                            <span class="tf-qty-price total-price">Rp. <span
                                                    id="total-harga-display">{{ number_format($produk->harga, 0, ',', '.') }}</span></span>
                                        </button>
                                    </form>
                                </div>
                                <div class="tf-product-info-delivery-return">
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="tf-product-delivery">
                                                <div class="icon">
                                                    <i class="icon-delivery-time"></i>
                                                </div>
                                                <p>Estimate delivery times: <span class="fw-7">12-26 days</span>
                                                    (International)
                                                    , <span class="fw-7">3-6 days</span> (United
                                                    States).</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-12">
                                            <div class="tf-product-delivery mb-0">
                                                <div class="icon">
                                                    <i class="icon-return-order"></i>
                                                </div>
                                                <p>Return within <span class="fw-7">30 days</span> of purchase.
                                                    Duties
                                                    & taxes are non-refundable.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /default -->
    <!-- list -->
    <section class="flat-spacing-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column gap-20">
                        <div>
                            <div class="lg_fs_18 fw-6 line py_15">Deskripsi</div>
                            <div class="py_20 lg_py_30">
                                <p class="mb_30">
                                    {{ $produk->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /list -->
@endsection
