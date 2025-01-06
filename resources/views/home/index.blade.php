@extends('layouts.app')

@section('title', 'Home')

@section('content')
        <div class="tf-slideshow slider-radius slider-effect-fade position-relative">
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1"
                data-centered="false" data-space="0" data-loop="true" data-auto-play="false" data-delay="2000"
                data-speed="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="images/slider/slide-hp-1.jpg"
                                src="images/slider/slide-hp-1.jpg" alt="hp-slideshow-01">
                            <div class="box-content">
                                <div class="container">
                                    <p class="fade-item fade-item-1 subheading fw-7 text_white">ICONIC DESIGN AND
                                        BRILLIANT ACOUSTICS</p>
                                    <h2 class="fade-item fade-item-2 fw-6 text_white heading">Ecomus <br>Wireless
                                        Headphones</h2>
                                    <a href="shop-default.html"
                                        class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-60"><span>Shop
                                            collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider row-end">
                            <img class="lazyload" data-src="images/slider/slide-hp-2.jpg"
                                src="images/slider/slide-hp-2.jpg" alt="hp-slideshow-02">
                            <div class="box-content">
                                <div class="container">
                                    <p class="fade-item fade-item-1 subheading fw-7 text_white">ICONIC DESIGN AND
                                        BRILLIANT ACOUSTICS</p>
                                    <h2 class="fade-item fade-item-2 fw-6 text_white heading">Soundscapes <br>Redefined
                                    </h2>
                                    <a href="shop-default.html"
                                        class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-60"><span>Shop
                                            collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="images/slider/slide-hp-3.jpg"
                                src="images/slider/slide-hp-3.jpg" alt="hp-slideshow-03">
                            <div class="box-content">
                                <div class="container">
                                    <p class="fade-item fade-item-1 subheading fw-7 text_white">ICONIC DESIGN AND
                                        BRILLIANT ACOUSTICS</p>
                                    <h2 class="fade-item fade-item-2 fw-6 text_white heading">Immerse <br>Yourself in
                                        Sound</h2>
                                    <a href="shop-default.html"
                                        class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-60"><span>Shop
                                            collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots line-white-pagination sw-pagination-slider justify-content-center"></div>
                </div>
            </div>
        </div>
        <!-- /slider -->
        <!-- Banner Collection -->
        <section class="flat-spacing-8 pb_0">
            <div class="container">
                <div class="tf-banner-collection">
                    <img class="lazyload" data-src="images/collections/banner-collection.jpg"
                        src="images/collections/banner-collection.jpg" alt="img-banner" loading="lazy">
                    <div class="box-content">
                        <div class="container wow fadeInUp" data-wow-delay="0s">
                            <div class="sub fw-7 text_white">ECOMUS HEADPHONE DESIGN</div>
                            <h2 class="heading fw-6 text_white">Uniting Performance</h2>
                            <p class="text_white">Fast wireless charging on-the-go.</p>
                            <a href="/shop"
                                class="rounded-full tf-btn style-3 fw-6 btn-light-icon animate-hover-btn"><span>Shop
                                    Collection</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Collection -->
        <!-- Marquee -->
        <section class="flat-spacing-9">
            <div class="tf-marquee type-big">
                <div class="wrap-marquee">
                    <div class="marquee-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25"
                                viewBox="0 0 40 25" fill="none">
                                <path
                                    d="M19.887 18.216C18.7702 18.216 17.6785 17.8849 16.75 17.2644C15.8214 16.644 15.0977 15.7621 14.6703 14.7304C14.2429 13.6986 14.1311 12.5633 14.349 11.468C14.5669 10.3727 15.1046 9.36659 15.8943 8.57692C16.684 7.78725 17.6901 7.24947 18.7854 7.0316C19.8807 6.81373 21.016 6.92555 22.0478 7.35292C23.0795 7.78028 23.9614 8.50401 24.5818 9.43256C25.2023 10.3611 25.5334 11.4528 25.5334 12.5696C25.5314 14.0665 24.9358 15.5015 23.8773 16.5599C22.8189 17.6184 21.3839 18.214 19.887 18.216ZM19.887 8.33049C19.0494 8.33049 18.2306 8.57886 17.5342 9.04419C16.8378 9.50952 16.295 10.1709 15.9745 10.9447C15.6539 11.7185 15.5701 12.57 15.7335 13.3915C15.8969 14.213 16.3002 14.9676 16.8925 15.5598C17.4847 16.1521 18.2393 16.5554 19.0608 16.7188C19.8823 16.8822 20.7337 16.7983 21.5076 16.4778C22.2814 16.1573 22.9428 15.6145 23.4081 14.9181C23.8734 14.2217 24.1218 13.4029 24.1218 12.5653C24.1199 11.4427 23.6732 10.3667 22.8794 9.5729C22.0856 8.77912 21.0095 8.33235 19.887 8.33049ZM34.9715 24.8781L33.9735 23.8801C36.9292 20.9172 38.5891 16.9029 38.5891 12.7178C38.5891 8.53265 36.9292 4.51837 33.9735 1.55544L34.9708 0.558846C38.1913 3.7864 40 8.1597 40 12.7192C40 17.2787 38.1913 21.652 34.9708 24.8795L34.9715 24.8781Z"
                                    fill="black"></path>
                                <path
                                    d="M31.9012 21.8086L30.9032 20.8106C33.0463 18.6625 34.2499 15.7521 34.2499 12.7178C34.2499 9.68347 33.0463 6.77304 30.9032 4.625L31.9012 3.62699C34.3091 6.03966 35.6615 9.3091 35.6615 12.7178C35.6615 16.1265 34.3091 19.3959 31.9012 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M28.8309 18.739L27.8329 17.741C29.1634 16.4078 29.9107 14.6013 29.9107 12.7178C29.9107 10.8343 29.1634 9.02772 27.8329 7.69455L28.8309 6.69937C29.622 7.48991 30.2495 8.42858 30.6776 9.46173C31.1057 10.4949 31.3261 11.6023 31.3261 12.7206C31.3261 13.8389 31.1057 14.9463 30.6776 15.9795C30.2495 17.0126 29.622 17.9513 28.8309 18.7418V18.739ZM5.02901 24.8788C1.8086 21.6511 0 17.2777 0 12.7181C0 8.15858 1.8086 3.7852 5.02901 0.557434L6.02702 1.55544C3.0709 4.51831 1.41073 8.53278 1.41073 12.7181C1.41073 16.9035 3.0709 20.918 6.02702 23.8808L5.02901 24.8788Z"
                                    fill="black"></path>
                                <path
                                    d="M8.09857 21.8086C5.69064 19.3959 4.33827 16.1265 4.33827 12.7178C4.33827 9.3091 5.69064 6.03966 8.09857 3.62699L9.09658 4.625C6.95346 6.77304 5.74987 9.68347 5.74987 12.7178C5.74987 15.7521 6.95346 18.6625 9.09658 20.8106L8.09857 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M11.1688 18.739C9.5742 17.1409 8.67864 14.9754 8.67864 12.7178C8.67864 10.4601 9.5742 8.2947 11.1688 6.69654L12.1668 7.69455C10.8363 9.02772 10.0891 10.8343 10.0891 12.7178C10.0891 14.6013 10.8363 16.4078 12.1668 17.741L11.1688 18.739Z"
                                    fill="black"></path>
                            </svg>
                        </div>
                        <p class="text fw-6">Featured products</p>
                    </div>
                    <div class="marquee-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25"
                                viewBox="0 0 40 25" fill="none">
                                <path
                                    d="M19.887 18.216C18.7702 18.216 17.6785 17.8849 16.75 17.2644C15.8214 16.644 15.0977 15.7621 14.6703 14.7304C14.2429 13.6986 14.1311 12.5633 14.349 11.468C14.5669 10.3727 15.1046 9.36659 15.8943 8.57692C16.684 7.78725 17.6901 7.24947 18.7854 7.0316C19.8807 6.81373 21.016 6.92555 22.0478 7.35292C23.0795 7.78028 23.9614 8.50401 24.5818 9.43256C25.2023 10.3611 25.5334 11.4528 25.5334 12.5696C25.5314 14.0665 24.9358 15.5015 23.8773 16.5599C22.8189 17.6184 21.3839 18.214 19.887 18.216ZM19.887 8.33049C19.0494 8.33049 18.2306 8.57886 17.5342 9.04419C16.8378 9.50952 16.295 10.1709 15.9745 10.9447C15.6539 11.7185 15.5701 12.57 15.7335 13.3915C15.8969 14.213 16.3002 14.9676 16.8925 15.5598C17.4847 16.1521 18.2393 16.5554 19.0608 16.7188C19.8823 16.8822 20.7337 16.7983 21.5076 16.4778C22.2814 16.1573 22.9428 15.6145 23.4081 14.9181C23.8734 14.2217 24.1218 13.4029 24.1218 12.5653C24.1199 11.4427 23.6732 10.3667 22.8794 9.5729C22.0856 8.77912 21.0095 8.33235 19.887 8.33049ZM34.9715 24.8781L33.9735 23.8801C36.9292 20.9172 38.5891 16.9029 38.5891 12.7178C38.5891 8.53265 36.9292 4.51837 33.9735 1.55544L34.9708 0.558846C38.1913 3.7864 40 8.1597 40 12.7192C40 17.2787 38.1913 21.652 34.9708 24.8795L34.9715 24.8781Z"
                                    fill="black"></path>
                                <path
                                    d="M31.9012 21.8086L30.9032 20.8106C33.0463 18.6625 34.2499 15.7521 34.2499 12.7178C34.2499 9.68347 33.0463 6.77304 30.9032 4.625L31.9012 3.62699C34.3091 6.03966 35.6615 9.3091 35.6615 12.7178C35.6615 16.1265 34.3091 19.3959 31.9012 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M28.8309 18.739L27.8329 17.741C29.1634 16.4078 29.9107 14.6013 29.9107 12.7178C29.9107 10.8343 29.1634 9.02772 27.8329 7.69455L28.8309 6.69937C29.622 7.48991 30.2495 8.42858 30.6776 9.46173C31.1057 10.4949 31.3261 11.6023 31.3261 12.7206C31.3261 13.8389 31.1057 14.9463 30.6776 15.9795C30.2495 17.0126 29.622 17.9513 28.8309 18.7418V18.739ZM5.02901 24.8788C1.8086 21.6511 0 17.2777 0 12.7181C0 8.15858 1.8086 3.7852 5.02901 0.557434L6.02702 1.55544C3.0709 4.51831 1.41073 8.53278 1.41073 12.7181C1.41073 16.9035 3.0709 20.918 6.02702 23.8808L5.02901 24.8788Z"
                                    fill="black"></path>
                                <path
                                    d="M8.09857 21.8086C5.69064 19.3959 4.33827 16.1265 4.33827 12.7178C4.33827 9.3091 5.69064 6.03966 8.09857 3.62699L9.09658 4.625C6.95346 6.77304 5.74987 9.68347 5.74987 12.7178C5.74987 15.7521 6.95346 18.6625 9.09658 20.8106L8.09857 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M11.1688 18.739C9.5742 17.1409 8.67864 14.9754 8.67864 12.7178C8.67864 10.4601 9.5742 8.2947 11.1688 6.69654L12.1668 7.69455C10.8363 9.02772 10.0891 10.8343 10.0891 12.7178C10.0891 14.6013 10.8363 16.4078 12.1668 17.741L11.1688 18.739Z"
                                    fill="black"></path>
                            </svg>
                        </div>
                        <p class="text fw-6">Featured products</p>
                    </div>
                    <div class="marquee-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25"
                                viewBox="0 0 40 25" fill="none">
                                <path
                                    d="M19.887 18.216C18.7702 18.216 17.6785 17.8849 16.75 17.2644C15.8214 16.644 15.0977 15.7621 14.6703 14.7304C14.2429 13.6986 14.1311 12.5633 14.349 11.468C14.5669 10.3727 15.1046 9.36659 15.8943 8.57692C16.684 7.78725 17.6901 7.24947 18.7854 7.0316C19.8807 6.81373 21.016 6.92555 22.0478 7.35292C23.0795 7.78028 23.9614 8.50401 24.5818 9.43256C25.2023 10.3611 25.5334 11.4528 25.5334 12.5696C25.5314 14.0665 24.9358 15.5015 23.8773 16.5599C22.8189 17.6184 21.3839 18.214 19.887 18.216ZM19.887 8.33049C19.0494 8.33049 18.2306 8.57886 17.5342 9.04419C16.8378 9.50952 16.295 10.1709 15.9745 10.9447C15.6539 11.7185 15.5701 12.57 15.7335 13.3915C15.8969 14.213 16.3002 14.9676 16.8925 15.5598C17.4847 16.1521 18.2393 16.5554 19.0608 16.7188C19.8823 16.8822 20.7337 16.7983 21.5076 16.4778C22.2814 16.1573 22.9428 15.6145 23.4081 14.9181C23.8734 14.2217 24.1218 13.4029 24.1218 12.5653C24.1199 11.4427 23.6732 10.3667 22.8794 9.5729C22.0856 8.77912 21.0095 8.33235 19.887 8.33049ZM34.9715 24.8781L33.9735 23.8801C36.9292 20.9172 38.5891 16.9029 38.5891 12.7178C38.5891 8.53265 36.9292 4.51837 33.9735 1.55544L34.9708 0.558846C38.1913 3.7864 40 8.1597 40 12.7192C40 17.2787 38.1913 21.652 34.9708 24.8795L34.9715 24.8781Z"
                                    fill="black"></path>
                                <path
                                    d="M31.9012 21.8086L30.9032 20.8106C33.0463 18.6625 34.2499 15.7521 34.2499 12.7178C34.2499 9.68347 33.0463 6.77304 30.9032 4.625L31.9012 3.62699C34.3091 6.03966 35.6615 9.3091 35.6615 12.7178C35.6615 16.1265 34.3091 19.3959 31.9012 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M28.8309 18.739L27.8329 17.741C29.1634 16.4078 29.9107 14.6013 29.9107 12.7178C29.9107 10.8343 29.1634 9.02772 27.8329 7.69455L28.8309 6.69937C29.622 7.48991 30.2495 8.42858 30.6776 9.46173C31.1057 10.4949 31.3261 11.6023 31.3261 12.7206C31.3261 13.8389 31.1057 14.9463 30.6776 15.9795C30.2495 17.0126 29.622 17.9513 28.8309 18.7418V18.739ZM5.02901 24.8788C1.8086 21.6511 0 17.2777 0 12.7181C0 8.15858 1.8086 3.7852 5.02901 0.557434L6.02702 1.55544C3.0709 4.51831 1.41073 8.53278 1.41073 12.7181C1.41073 16.9035 3.0709 20.918 6.02702 23.8808L5.02901 24.8788Z"
                                    fill="black"></path>
                                <path
                                    d="M8.09857 21.8086C5.69064 19.3959 4.33827 16.1265 4.33827 12.7178C4.33827 9.3091 5.69064 6.03966 8.09857 3.62699L9.09658 4.625C6.95346 6.77304 5.74987 9.68347 5.74987 12.7178C5.74987 15.7521 6.95346 18.6625 9.09658 20.8106L8.09857 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M11.1688 18.739C9.5742 17.1409 8.67864 14.9754 8.67864 12.7178C8.67864 10.4601 9.5742 8.2947 11.1688 6.69654L12.1668 7.69455C10.8363 9.02772 10.0891 10.8343 10.0891 12.7178C10.0891 14.6013 10.8363 16.4078 12.1668 17.741L11.1688 18.739Z"
                                    fill="black"></path>
                            </svg>
                        </div>
                        <p class="text fw-6">Featured products</p>
                    </div>
                    <div class="marquee-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25"
                                viewBox="0 0 40 25" fill="none">
                                <path
                                    d="M19.887 18.216C18.7702 18.216 17.6785 17.8849 16.75 17.2644C15.8214 16.644 15.0977 15.7621 14.6703 14.7304C14.2429 13.6986 14.1311 12.5633 14.349 11.468C14.5669 10.3727 15.1046 9.36659 15.8943 8.57692C16.684 7.78725 17.6901 7.24947 18.7854 7.0316C19.8807 6.81373 21.016 6.92555 22.0478 7.35292C23.0795 7.78028 23.9614 8.50401 24.5818 9.43256C25.2023 10.3611 25.5334 11.4528 25.5334 12.5696C25.5314 14.0665 24.9358 15.5015 23.8773 16.5599C22.8189 17.6184 21.3839 18.214 19.887 18.216ZM19.887 8.33049C19.0494 8.33049 18.2306 8.57886 17.5342 9.04419C16.8378 9.50952 16.295 10.1709 15.9745 10.9447C15.6539 11.7185 15.5701 12.57 15.7335 13.3915C15.8969 14.213 16.3002 14.9676 16.8925 15.5598C17.4847 16.1521 18.2393 16.5554 19.0608 16.7188C19.8823 16.8822 20.7337 16.7983 21.5076 16.4778C22.2814 16.1573 22.9428 15.6145 23.4081 14.9181C23.8734 14.2217 24.1218 13.4029 24.1218 12.5653C24.1199 11.4427 23.6732 10.3667 22.8794 9.5729C22.0856 8.77912 21.0095 8.33235 19.887 8.33049ZM34.9715 24.8781L33.9735 23.8801C36.9292 20.9172 38.5891 16.9029 38.5891 12.7178C38.5891 8.53265 36.9292 4.51837 33.9735 1.55544L34.9708 0.558846C38.1913 3.7864 40 8.1597 40 12.7192C40 17.2787 38.1913 21.652 34.9708 24.8795L34.9715 24.8781Z"
                                    fill="black"></path>
                                <path
                                    d="M31.9012 21.8086L30.9032 20.8106C33.0463 18.6625 34.2499 15.7521 34.2499 12.7178C34.2499 9.68347 33.0463 6.77304 30.9032 4.625L31.9012 3.62699C34.3091 6.03966 35.6615 9.3091 35.6615 12.7178C35.6615 16.1265 34.3091 19.3959 31.9012 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M28.8309 18.739L27.8329 17.741C29.1634 16.4078 29.9107 14.6013 29.9107 12.7178C29.9107 10.8343 29.1634 9.02772 27.8329 7.69455L28.8309 6.69937C29.622 7.48991 30.2495 8.42858 30.6776 9.46173C31.1057 10.4949 31.3261 11.6023 31.3261 12.7206C31.3261 13.8389 31.1057 14.9463 30.6776 15.9795C30.2495 17.0126 29.622 17.9513 28.8309 18.7418V18.739ZM5.02901 24.8788C1.8086 21.6511 0 17.2777 0 12.7181C0 8.15858 1.8086 3.7852 5.02901 0.557434L6.02702 1.55544C3.0709 4.51831 1.41073 8.53278 1.41073 12.7181C1.41073 16.9035 3.0709 20.918 6.02702 23.8808L5.02901 24.8788Z"
                                    fill="black"></path>
                                <path
                                    d="M8.09857 21.8086C5.69064 19.3959 4.33827 16.1265 4.33827 12.7178C4.33827 9.3091 5.69064 6.03966 8.09857 3.62699L9.09658 4.625C6.95346 6.77304 5.74987 9.68347 5.74987 12.7178C5.74987 15.7521 6.95346 18.6625 9.09658 20.8106L8.09857 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M11.1688 18.739C9.5742 17.1409 8.67864 14.9754 8.67864 12.7178C8.67864 10.4601 9.5742 8.2947 11.1688 6.69654L12.1668 7.69455C10.8363 9.02772 10.0891 10.8343 10.0891 12.7178C10.0891 14.6013 10.8363 16.4078 12.1668 17.741L11.1688 18.739Z"
                                    fill="black"></path>
                            </svg>
                        </div>
                        <p class="text fw-6">Featured products</p>
                    </div>
                    <div class="marquee-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25"
                                viewBox="0 0 40 25" fill="none">
                                <path
                                    d="M19.887 18.216C18.7702 18.216 17.6785 17.8849 16.75 17.2644C15.8214 16.644 15.0977 15.7621 14.6703 14.7304C14.2429 13.6986 14.1311 12.5633 14.349 11.468C14.5669 10.3727 15.1046 9.36659 15.8943 8.57692C16.684 7.78725 17.6901 7.24947 18.7854 7.0316C19.8807 6.81373 21.016 6.92555 22.0478 7.35292C23.0795 7.78028 23.9614 8.50401 24.5818 9.43256C25.2023 10.3611 25.5334 11.4528 25.5334 12.5696C25.5314 14.0665 24.9358 15.5015 23.8773 16.5599C22.8189 17.6184 21.3839 18.214 19.887 18.216ZM19.887 8.33049C19.0494 8.33049 18.2306 8.57886 17.5342 9.04419C16.8378 9.50952 16.295 10.1709 15.9745 10.9447C15.6539 11.7185 15.5701 12.57 15.7335 13.3915C15.8969 14.213 16.3002 14.9676 16.8925 15.5598C17.4847 16.1521 18.2393 16.5554 19.0608 16.7188C19.8823 16.8822 20.7337 16.7983 21.5076 16.4778C22.2814 16.1573 22.9428 15.6145 23.4081 14.9181C23.8734 14.2217 24.1218 13.4029 24.1218 12.5653C24.1199 11.4427 23.6732 10.3667 22.8794 9.5729C22.0856 8.77912 21.0095 8.33235 19.887 8.33049ZM34.9715 24.8781L33.9735 23.8801C36.9292 20.9172 38.5891 16.9029 38.5891 12.7178C38.5891 8.53265 36.9292 4.51837 33.9735 1.55544L34.9708 0.558846C38.1913 3.7864 40 8.1597 40 12.7192C40 17.2787 38.1913 21.652 34.9708 24.8795L34.9715 24.8781Z"
                                    fill="black"></path>
                                <path
                                    d="M31.9012 21.8086L30.9032 20.8106C33.0463 18.6625 34.2499 15.7521 34.2499 12.7178C34.2499 9.68347 33.0463 6.77304 30.9032 4.625L31.9012 3.62699C34.3091 6.03966 35.6615 9.3091 35.6615 12.7178C35.6615 16.1265 34.3091 19.3959 31.9012 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M28.8309 18.739L27.8329 17.741C29.1634 16.4078 29.9107 14.6013 29.9107 12.7178C29.9107 10.8343 29.1634 9.02772 27.8329 7.69455L28.8309 6.69937C29.622 7.48991 30.2495 8.42858 30.6776 9.46173C31.1057 10.4949 31.3261 11.6023 31.3261 12.7206C31.3261 13.8389 31.1057 14.9463 30.6776 15.9795C30.2495 17.0126 29.622 17.9513 28.8309 18.7418V18.739ZM5.02901 24.8788C1.8086 21.6511 0 17.2777 0 12.7181C0 8.15858 1.8086 3.7852 5.02901 0.557434L6.02702 1.55544C3.0709 4.51831 1.41073 8.53278 1.41073 12.7181C1.41073 16.9035 3.0709 20.918 6.02702 23.8808L5.02901 24.8788Z"
                                    fill="black"></path>
                                <path
                                    d="M8.09857 21.8086C5.69064 19.3959 4.33827 16.1265 4.33827 12.7178C4.33827 9.3091 5.69064 6.03966 8.09857 3.62699L9.09658 4.625C6.95346 6.77304 5.74987 9.68347 5.74987 12.7178C5.74987 15.7521 6.95346 18.6625 9.09658 20.8106L8.09857 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M11.1688 18.739C9.5742 17.1409 8.67864 14.9754 8.67864 12.7178C8.67864 10.4601 9.5742 8.2947 11.1688 6.69654L12.1668 7.69455C10.8363 9.02772 10.0891 10.8343 10.0891 12.7178C10.0891 14.6013 10.8363 16.4078 12.1668 17.741L11.1688 18.739Z"
                                    fill="black"></path>
                            </svg>
                        </div>
                        <p class="text fw-6">Featured products</p>
                    </div>
                    <div class="marquee-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="25"
                                viewBox="0 0 40 25" fill="none">
                                <path
                                    d="M19.887 18.216C18.7702 18.216 17.6785 17.8849 16.75 17.2644C15.8214 16.644 15.0977 15.7621 14.6703 14.7304C14.2429 13.6986 14.1311 12.5633 14.349 11.468C14.5669 10.3727 15.1046 9.36659 15.8943 8.57692C16.684 7.78725 17.6901 7.24947 18.7854 7.0316C19.8807 6.81373 21.016 6.92555 22.0478 7.35292C23.0795 7.78028 23.9614 8.50401 24.5818 9.43256C25.2023 10.3611 25.5334 11.4528 25.5334 12.5696C25.5314 14.0665 24.9358 15.5015 23.8773 16.5599C22.8189 17.6184 21.3839 18.214 19.887 18.216ZM19.887 8.33049C19.0494 8.33049 18.2306 8.57886 17.5342 9.04419C16.8378 9.50952 16.295 10.1709 15.9745 10.9447C15.6539 11.7185 15.5701 12.57 15.7335 13.3915C15.8969 14.213 16.3002 14.9676 16.8925 15.5598C17.4847 16.1521 18.2393 16.5554 19.0608 16.7188C19.8823 16.8822 20.7337 16.7983 21.5076 16.4778C22.2814 16.1573 22.9428 15.6145 23.4081 14.9181C23.8734 14.2217 24.1218 13.4029 24.1218 12.5653C24.1199 11.4427 23.6732 10.3667 22.8794 9.5729C22.0856 8.77912 21.0095 8.33235 19.887 8.33049ZM34.9715 24.8781L33.9735 23.8801C36.9292 20.9172 38.5891 16.9029 38.5891 12.7178C38.5891 8.53265 36.9292 4.51837 33.9735 1.55544L34.9708 0.558846C38.1913 3.7864 40 8.1597 40 12.7192C40 17.2787 38.1913 21.652 34.9708 24.8795L34.9715 24.8781Z"
                                    fill="black"></path>
                                <path
                                    d="M31.9012 21.8086L30.9032 20.8106C33.0463 18.6625 34.2499 15.7521 34.2499 12.7178C34.2499 9.68347 33.0463 6.77304 30.9032 4.625L31.9012 3.62699C34.3091 6.03966 35.6615 9.3091 35.6615 12.7178C35.6615 16.1265 34.3091 19.3959 31.9012 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M28.8309 18.739L27.8329 17.741C29.1634 16.4078 29.9107 14.6013 29.9107 12.7178C29.9107 10.8343 29.1634 9.02772 27.8329 7.69455L28.8309 6.69937C29.622 7.48991 30.2495 8.42858 30.6776 9.46173C31.1057 10.4949 31.3261 11.6023 31.3261 12.7206C31.3261 13.8389 31.1057 14.9463 30.6776 15.9795C30.2495 17.0126 29.622 17.9513 28.8309 18.7418V18.739ZM5.02901 24.8788C1.8086 21.6511 0 17.2777 0 12.7181C0 8.15858 1.8086 3.7852 5.02901 0.557434L6.02702 1.55544C3.0709 4.51831 1.41073 8.53278 1.41073 12.7181C1.41073 16.9035 3.0709 20.918 6.02702 23.8808L5.02901 24.8788Z"
                                    fill="black"></path>
                                <path
                                    d="M8.09857 21.8086C5.69064 19.3959 4.33827 16.1265 4.33827 12.7178C4.33827 9.3091 5.69064 6.03966 8.09857 3.62699L9.09658 4.625C6.95346 6.77304 5.74987 9.68347 5.74987 12.7178C5.74987 15.7521 6.95346 18.6625 9.09658 20.8106L8.09857 21.8086Z"
                                    fill="black"></path>
                                <path
                                    d="M11.1688 18.739C9.5742 17.1409 8.67864 14.9754 8.67864 12.7178C8.67864 10.4601 9.5742 8.2947 11.1688 6.69654L12.1668 7.69455C10.8363 9.02772 10.0891 10.8343 10.0891 12.7178C10.0891 14.6013 10.8363 16.4078 12.1668 17.741L11.1688 18.739Z"
                                    fill="black"></path>
                            </svg>
                        </div>
                        <p class="text fw-6">Featured products</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Marquee -->
        <!-- Icon box -->
        <section class="flat-spacing-9 flat-iconbox-v2">
            <div class="container">
                <div class="wrap-carousel wrap-mobile wow fadeInUp" data-wow-delay="0s">
                    <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                        <div class="swiper-wrapper wrap-iconbox">
                            <div class="swiper-slide">
                                <div class="tf-icon-box text-center">
                                    <div class="icon">
                                        <i class="icon-shipping"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-6">Free Premium Shipping</div>
                                        <p>Free ground shipping on orders of $99 or more in <br> the U.S. and $250 in
                                            Canada</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box text-center">
                                    <div class="icon">
                                        <i class="icon-safe"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-6">Product Protection</div>
                                        <p>Rest easy with our <a class="text-decoration-underline"
                                                href="#">manufacturer warranty</a>, ensuring <br> that your
                                            product is protected</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box text-center">
                                    <div class="icon">
                                        <i class="icon-return"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-6">Free Returns in 14 Days</div>
                                        <p>We offer a generous 14-days return policy, allowing <br> you to shop with
                                            confidence</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                </div>

            </div>
        </section>
        <!-- /Icon box -->
        <!-- Best seller -->
        <section>
            <div class="container-full">
                <div class="bg_grey-5 radius-60 flat-spacing-21">
                    <div class="flat-title">
                        <span class="title fw-6 wow fadeInUp" data-wow-delay="0s">Our best sellers</span>
                    </div>
                    <div class="container">
                        <div class="wrap-carousel wrap-sw-2">
                            <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4"
                                data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15"
                                data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" lazy="true">
                                        <div class="card-product bg_white radius-20">
                                            <div class="card-product-wrapper">
                                                <a href="product-detail.html" class="product-img">
                                                    <img class="lazyload img-product"
                                                        src="images/products/headphone-8.png"
                                                        data-src="images/products/headphone-8.png"
                                                        alt="image-product">
                                                    <img class="lazyload img-hover"
                                                        data-src="images/products/headphone-9.png"
                                                        src="images/products/headphone-9.png" alt="image-product">
                                                </a>
                                                <div class="list-product-btn">
                                                    <a href="#quick_add" data-bs-toggle="modal"
                                                        class="box-icon bg_white quick-add tf-btn-loading">
                                                        <span class="icon icon-bag"></span>
                                                        <span class="tooltip">Quick Add</span>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="box-icon bg_white wishlist btn-icon-action">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                        <span class="icon icon-delete"></span>
                                                    </a>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        aria-controls="offcanvasLeft"
                                                        class="box-icon bg_white compare btn-icon-action">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Add to Compare</span>
                                                        <span class="icon icon-check"></span>
                                                    </a>
                                                    <a href="#quick_view" data-bs-toggle="modal"
                                                        class="box-icon bg_white quickview tf-btn-loading">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                                <div class="on-sale-wrap text-end">
                                                    <div class="on-sale-item">Sale</div>
                                                </div>
                                            </div>
                                            <div class="card-product-info has-padding">
                                                <a href="product-detail.html" class="title link">WH-1000XM4 Wireless
                                                    Headphones</a>
                                                <span class="price"><span class="fw-4 text-sale">$349.00</span> <span
                                                        class="text_primary">$279.00</span></span>
                                                <ul class="list-color-product">
                                                    <li class="list-color-item color-swatch active">
                                                        <span class="tooltip">Black</span>
                                                        <span class="swatch-value bg_dark"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-8.png"
                                                            src="images/products/headphone-8.png" alt="image-product">
                                                    </li>
                                                    <li class="list-color-item color-swatch">
                                                        <span class="tooltip">Blue</span>
                                                        <span class="swatch-value bg_blue-2"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-9.png"
                                                            src="images/products/headphone-9.png" alt="image-product">
                                                    </li>
                                                    <li class="list-color-item color-swatch">
                                                        <span class="tooltip">Light Grey</span>
                                                        <span class="swatch-value bg_light-grey"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-10.png"
                                                            src="images/products/headphone-10.png"
                                                            alt="image-product">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" lazy="true">
                                        <div class="card-product bg_white radius-20">
                                            <div class="card-product-wrapper">
                                                <a href="product-detail.html" class="product-img">
                                                    <img class="lazyload img-product"
                                                        src="images/products/headphone-11.png"
                                                        data-src="images/products/headphone-11.png"
                                                        alt="image-product">
                                                    <img class="lazyload img-hover"
                                                        data-src="images/products/headphone-12.png"
                                                        src="images/products/headphone-12.png" alt="image-product">
                                                </a>
                                                <div class="list-product-btn">
                                                    <a href="#quick_add" data-bs-toggle="modal"
                                                        class="box-icon bg_white quick-add tf-btn-loading">
                                                        <span class="icon icon-bag"></span>
                                                        <span class="tooltip">Quick Add</span>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="box-icon bg_white wishlist btn-icon-action">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                        <span class="icon icon-delete"></span>
                                                    </a>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        aria-controls="offcanvasLeft"
                                                        class="box-icon bg_white compare btn-icon-action">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Add to Compare</span>
                                                        <span class="icon icon-check"></span>
                                                    </a>
                                                    <a href="#quick_view" data-bs-toggle="modal"
                                                        class="box-icon bg_white quickview tf-btn-loading">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-product-info has-padding">
                                                <a href="product-detail.html" class="title link">LinkBuds S Wireless
                                                    Earbuds</a>
                                                <span class="price">$199.00</span>
                                                <ul class="list-color-product">
                                                    <li class="list-color-item color-swatch active">
                                                        <span class="tooltip">White</span>
                                                        <span class="swatch-value bg_white"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-11.png"
                                                            src="images/products/headphone-11.png"
                                                            alt="image-product">
                                                    </li>
                                                    <li class="list-color-item color-swatch">
                                                        <span class="tooltip">Pink</span>
                                                        <span class="swatch-value bg_purple"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-12.png"
                                                            src="images/products/headphone-12.png"
                                                            alt="image-product">
                                                    </li>
                                                    <li class="list-color-item color-swatch">
                                                        <span class="tooltip">Black</span>
                                                        <span class="swatch-value bg_dark"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-13.png"
                                                            src="images/products/headphone-13.png"
                                                            alt="image-product">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" lazy="true">
                                        <div class="card-product bg_white radius-20">
                                            <div class="card-product-wrapper">
                                                <a href="product-detail.html" class="product-img">
                                                    <img class="lazyload img-product"
                                                        src="images/products/headphone-14.png"
                                                        data-src="images/products/headphone-14.png"
                                                        alt="image-product">
                                                    <img class="lazyload img-hover"
                                                        data-src="images/products/headphone-15.png"
                                                        src="images/products/headphone-15.png" alt="image-product">
                                                </a>
                                                <div class="list-product-btn">
                                                    <a href="#quick_add" data-bs-toggle="modal"
                                                        class="box-icon bg_white quick-add tf-btn-loading">
                                                        <span class="icon icon-bag"></span>
                                                        <span class="tooltip">Quick Add</span>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="box-icon bg_white wishlist btn-icon-action">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                        <span class="icon icon-delete"></span>
                                                    </a>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        aria-controls="offcanvasLeft"
                                                        class="box-icon bg_white compare btn-icon-action">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Add to Compare</span>
                                                        <span class="icon icon-check"></span>
                                                    </a>
                                                    <a href="#quick_view" data-bs-toggle="modal"
                                                        class="box-icon bg_white quickview tf-btn-loading">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-product-info has-padding">
                                                <a href="product-detail.html" class="title link">INZONE H9 Wireless
                                                    Gaming Headset</a>
                                                <span class="price">$299.00</span>
                                                <ul class="list-color-product">
                                                    <li class="list-color-item color-swatch">
                                                        <span class="tooltip">Black</span>
                                                        <span class="swatch-value bg_dark"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-15.png"
                                                            src="images/products/headphone-15.png"
                                                            alt="image-product">
                                                    </li>
                                                    <li class="list-color-item color-swatch active">
                                                        <span class="tooltip">White</span>
                                                        <span class="swatch-value bg_white"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-14.png"
                                                            src="images/products/headphone-14.png"
                                                            alt="image-product">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" lazy="true">
                                        <div class="card-product bg_white radius-20">
                                            <div class="card-product-wrapper">
                                                <a href="product-detail.html" class="product-img">
                                                    <img class="lazyload img-product"
                                                        src="images/products/headphone-16.png"
                                                        data-src="images/products/headphone-16.png"
                                                        alt="image-product">
                                                    <img class="lazyload img-hover"
                                                        data-src="images/products/headphone-17.png"
                                                        src="images/products/headphone-17.png" alt="image-product">
                                                </a>
                                                <div class="list-product-btn">
                                                    <a href="#shoppingCart" data-bs-toggle="modal"
                                                        class="box-icon bg_white quick-add tf-btn-loading">
                                                        <span class="icon icon-bag"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="box-icon bg_white wishlist btn-icon-action">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                        <span class="icon icon-delete"></span>
                                                    </a>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        aria-controls="offcanvasLeft"
                                                        class="box-icon bg_white compare btn-icon-action">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Add to Compare</span>
                                                        <span class="icon icon-check"></span>
                                                    </a>
                                                    <a href="#quick_view" data-bs-toggle="modal"
                                                        class="box-icon bg_white quickview tf-btn-loading">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-product-info has-padding">
                                                <a href="product-detail.html" class="title link">NS7 Wireless Wearable
                                                    TV Speaker</a>
                                                <span class="price">$299.00</span>
                                                <ul class="list-color-product">
                                                    <li class="list-color-item color-swatch active">
                                                        <span class="tooltip">Grey</span>
                                                        <span class="swatch-value bg_grey"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-16.png"
                                                            src="images/products/headphone-16.png"
                                                            alt="image-product">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" lazy="true">
                                        <div class="card-product bg_white radius-20">
                                            <div class="card-product-wrapper">
                                                <a href="product-detail.html" class="product-img">
                                                    <img class="lazyload img-product"
                                                        src="images/products/headphone-18.png"
                                                        data-src="images/products/headphone-18.png"
                                                        alt="image-product">
                                                    <img class="lazyload img-hover"
                                                        data-src="images/products/headphone-19.png"
                                                        src="images/products/headphone-19.png" alt="image-product">
                                                </a>
                                                <div class="list-product-btn">
                                                    <a href="#quick_add" data-bs-toggle="modal"
                                                        class="box-icon bg_white quick-add tf-btn-loading">
                                                        <span class="icon icon-bag"></span>
                                                        <span class="tooltip">Quick Add</span>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="box-icon bg_white wishlist btn-icon-action">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                        <span class="icon icon-delete"></span>
                                                    </a>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        aria-controls="offcanvasLeft"
                                                        class="box-icon bg_white compare btn-icon-action">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Add to Compare</span>
                                                        <span class="icon icon-check"></span>
                                                    </a>
                                                    <a href="#quick_view" data-bs-toggle="modal"
                                                        class="box-icon bg_white quickview tf-btn-loading">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-product-info has-padding">
                                                <a href="product-detail.html" class="title link">IER-M7 Monitor In-ear
                                                    Headphones</a>
                                                <span class="price">$499.00</span>
                                                <ul class="list-color-product">
                                                    <li class="list-color-item color-swatch active">
                                                        <span class="tooltip">Black</span>
                                                        <span class="swatch-value bg_dark"></span>
                                                        <img class="lazyload"
                                                            data-src="images/products/headphone-18.png"
                                                            src="images/products/headphone-18.png"
                                                            alt="image-product">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span
                                    class="icon icon-arrow-left"></span></div>
                            <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span
                                    class="icon icon-arrow-right"></span></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /Best seller -->
        <!-- brand -->
        <section class="flat-spacing-5 pt_0">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-brand" data-loop="false" data-play="false" data-preview="6"
                    data-tablet="3" data-mobile="2" data-space-lg="0" data-space-md="0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-01.png"
                                    src="images/brand/brand-01.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-02.png"
                                    src="images/brand/brand-02.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-03.png"
                                    src="images/brand/brand-03.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-04.png"
                                    src="images/brand/brand-04.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-05.png"
                                    src="images/brand/brand-05.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-06.png"
                                    src="images/brand/brand-06.png" alt="image-brand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dots style-2 sw-pagination-brand justify-content-center"></div>
            </div>
        </section>
        <!-- /brand -->
        @include('layouts.bottom')
    <!-- /toolbar-bottom -->

    <!-- mobile menu -->
    @include('layouts.mobile')
    <!-- /mobile menu -->

    <!-- canvasSearch -->
    <div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
        <div class="canvas-wrapper">
            <header class="tf-search-head">
                <div class="title fw-5">
                    Search our site
                    <div class="close">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                    </div>
                </div>
                <div class="tf-search-sticky">
                    <form class="tf-mini-search-frm">
                        <fieldset class="text">
                            <input type="text" placeholder="Search" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </header>
        </div>
    </div>
    <!-- /canvasSearch -->

    <!-- modal login -->
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Log in</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="" action="https://themesflat.co/html/ecomus/my-account.html" accept-charset="utf-8">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <div>
                            <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your password?</a>
                        </div>
                        <div class="bottom">
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Log in</span></button>
                            </div>
                            <div class="w-100">
                                <a href="#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    New customer? Create your account
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="forgotPassword">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Reset your password</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="">
                        <div>
                            <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div>
                            <a href="#login" data-bs-toggle="modal" class="btn-link link">Cancel</a>
                        </div>
                        <div class="bottom">
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Reset password</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Register</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form method="" action="" class="">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                            <label class="tf-field-label" for="">First name</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                            <label class="tf-field-label" for="">Last name</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <div class="bottom">
                            <div class="w-100">
                                <a href="register.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Register</span></a>
                            </div>
                            <div class="w-100">
                                <a href="#login" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    Already have an account? Log in here
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal login -->
@endsection
