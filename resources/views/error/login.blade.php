@include('layouts.style')
@include('layouts.produk_header')
@section('title', '404')

<main id="MainContent" class="content-for-layout">
    <div class="error-page mt-100">
        <div class="container">
            <div class="error-content text-center">
                <div class="error-img mx-auto">
                    <img src="assets/img/error/error.png" alt="error">
                </div>
                <p class="error-subtitle">Page Not Found</p>
                <a href="/home" class="btn-primary mt-4">BACK TO HOMEPAGE</a>
            </div>
        </div>
    </div>
</main>

@include('layouts.produk_footer')
@include('layouts.script')
