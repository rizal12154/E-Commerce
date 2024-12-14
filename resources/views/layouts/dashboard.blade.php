<!doctype html>
<html lang="en" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>@yield('title')</title>
    @include('layouts.style')
</head>

<body>
    <div class="body-wrapper">
        <!-- header start -->
        @include('layouts.header')
        <!-- header end -->

        <!-- footer start -->
        @include('layouts.footer')
        <!-- footer end -->

        <!-- scrollup start -->
        <button id="scrollup">
            @yield('content')
        </div>
        <!-- newsletter subscribe modal end -->

        @include('layouts.script')
    </div>
</body>

</html>
