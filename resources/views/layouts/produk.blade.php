<!doctype html>
<html lang="en" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <title>@yield('title')</title>
    @include('layouts.style')

</head>

<body>
    <div class="body-wrapper">
        <!-- announcement bar start -->
        @include('layouts.produk_header')
        <!-- header end -->

        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li><a href="/home">Home</a></li>
                    <li>
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path
                                    d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                    fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Produk</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        @include('layouts.sidebar')

        <!-- footer start -->
        @include('layouts.produk_footer')
        <!-- footer end -->

        <!-- scrollup start -->
        <button id="scrollup">
            @yield('Default content')
        </div>
    <!-- product quickview end -->

    @include('layouts.script')
    </div>
</body>

</html>
