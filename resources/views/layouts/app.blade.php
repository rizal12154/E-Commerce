<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>@yield('title')</title>
    @include('layouts.css')
</head>

<body class="preload-wrapper">
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- top bar -->
        @include('layouts.header')
        <!-- /header -->
        <!-- slider -->
        @include('layouts.navbar')
        <!-- Footer -->
        @include('layouts.footer')
        <!-- /Footer -->
    </div>

    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->

    <!-- toolbar-bottom -->
    @yield('content')
    <!-- /modal find_size -->

    <!-- Javascript -->
    @include('layouts.js')
</body>

</html>
