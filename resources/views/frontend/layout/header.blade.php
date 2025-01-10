<style>
    .active > a {
    color: #007bff; /* Active link color */
    font-weight: bold; /* Optional styling */
}
</style>

<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@macrostruktur.id">contact@macrostruktur.id</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 87834399815</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets_2/img/Group 1.png" alt="">
                {{-- <h1 class="sitename">BizLand</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}"class="{{ request()->is('/') ? 'active' : '' }}"> Home</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#testimonials">Testimonial</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li class="{{ request()->routeIs('artikel.list_artikel') ? 'active' : '' }}">
                        <a href="{{ route('artikel.list_artikel') }}"> Artikel</a>
                    </li>
                    <li class="dropdown {{ request()->is('layanan-detail/*') ? 'active' : '' }}">
                        <a href="#"><span>Jasa Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="{{ request()->is('layanan-detail/bangunan-gedung') ? 'active' : '' }}">
                                <a href="{{ url('/layanan-detail/bangunan-gedung') }}">Bangunan Gedung</a>
                            </li>
                            <li class="{{ request()->is('layanan-detail/rumah-tinggal-ruko') ? 'active' : '' }}">
                                <a href="{{ url('/layanan-detail/rumah-tinggal-ruko') }}">Rumah Tinggal/Ruko</a>
                            </li>
                            <li class="{{ request()->is('layanan-detail/bangunan-gudang') ? 'active' : '' }}">
                                <a href="{{ url('/layanan-detail/bangunan-gudang') }}">Bangunan Gudang</a>
                            </li>
                            <li class="{{ request()->is('layanan-detail/assesment') ? 'active' : '' }}">
                                <a href="{{ url('/layanan-detail/assesment') }}">Assesment</a>
                            </li>
                            <li class="{{ request()->is('layanan-detail/bim-tekla-rab') ? 'active' : '' }}">
                                <a href="{{ url('/layanan-detail/bim-tekla-rab') }}">BIM, Tekla, RAB</a>
                            </li>
                            <li class="{{ request()->is('layanan-detail/ded-arsitek-mep') ? 'active' : '' }}">
                                <a href="{{ url('/layanan-detail/ded-arsitek-mep') }}">DED Arsitek, MEP</a>
                            </li>
                        </ul>
                    </li>                    
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>

    </div>

</header>