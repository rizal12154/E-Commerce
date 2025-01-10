<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('') }}assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('') }}assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('') }}assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('') }}assets/images/logo-dark-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{ asset('') }}assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                    class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-item">
                <a href="/dashboard" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="/produk_admin" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Produk </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="/kategori" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Kategori </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="#!" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Pelanggan </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="#!" class="side-nav-link">
                    <i class="uil-rss"></i>
                    <span> Pesanan </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="#!" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Laporan </span>
                </a>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
