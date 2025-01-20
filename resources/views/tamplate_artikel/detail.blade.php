<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MacroStruktur Official Website - Artikel Detail</title>
    <meta name="description" content="{{ $artikel->meta_description }}">
    <meta name="keywords" content="{{ $artikel->meta_keyword }}">

    <meta name="author" content="MacroStruktur">
    <meta name="robots" content="index, follow">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://macrostruktur.id/">
    <meta property="og:site_name" content="MacroStruktur">
    <meta property="og:title" content="MacroStruktur Official Website - Analisa dan Perencanaan Struktur Bangunan">
    <meta property="og:description" content="{{ $artikel->meta_description }}">
    <meta name="theme-color" content="#1F8AD1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="MacroStruktur Official Website">
    <meta name="twitter:description" content="{{ $artikel->meta_description }}">


    <!-- Favicons -->
    <link href="{{ asset('assets_2/img/LOGO MACROSTRUKTUR 4.png') }}" rel="icon">
    <link href="{{ asset('assets_2/img/LOGO MACROSTRUKTUR 4.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_3/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_3/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_3/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_3/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_3/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_3/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="assets_3/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_3/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_3/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets_3/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets_3/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets_3/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="{{ asset('assets_3/assets/css/main.css') }}" rel="stylesheet"> --}}


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets_2/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    {{-- @include('frontend.layout.header') --}}
    <style>
        .active>a {
            color: #1F8AD1;
            /* Active link color */
            font-weight: bold;
            /* Optional styling */
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
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('assets_2/img/Group 1.png') }}" alt="">
                    {{-- <h1 class="sitename">BizLand</h1> --}}
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ url('/') }}"class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li><a href="#profil">Profil</a></li>
                        <li><a href="#services">Testimoni</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        {{-- <li><a href="#team">Team</a></li> --}}
                        <li class="{{ request()->routeIs('artikel.*') ? 'active' : '' }}">
                            <a href="{{ route('artikel.list_artikel') }}">Artikel</a>
                        </li>
                        <li class="dropdown {{ request()->is('layanan-detail/*') ? 'active' : '' }}">
                            <a href="#"><span>Jasa Layanan</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
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
                                <li class="{{ request()->is('layanan-detail/bim-tekla') ? 'active' : '' }}">
                                    <a href="{{ url('/layanan-detail/bim-tekla') }}">BIM, Tekla</a>
                                </li>
                                <li class="{{ request()->is('layanan-detail/ded-arsitek-mep-rab') ? 'active' : '' }}">
                                    <a href="{{ url('/layanan-detail/ded-arsitek-mep-rab') }}">DED Arsitek, MEP,
                                        RAB</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#contact">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main id="main">
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Artikel Detail</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Artikel Detail</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog" style="
        padding: 15px;
    ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-3">{{ $artikel->judul }}</h1>
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-3">
                                <i class="bi bi-person"></i> {{ $artikel->users->name }}
                            </span>
                            <span class="me-3">
                                <i class="bi bi-folder2"></i> {{ $artikel->category->name }}
                            </span>
                            <span>
                                <i class="bi bi-calendar"></i>
                                {{ \Carbon\Carbon::parse($artikel->created_at)->format('d F Y') }}
                            </span>
                        </div>
                        <a href="{{ $artikel->link_url }}" target="_blank">
                            <!--<img src="{{ asset($artikel->gambar) }}" class="img-fluid mb-3">-->
                            <img src="data:image/png;base64,{{ $artikel->gambar }}" class="img-fluid mb-3"
                                alt="{{ $artikel->judul }}">

                        </a>
                        <p>{!! $artikel->content !!}</p>
                        <!--<img src="{{ asset($artikel->gambar_2) }}" class="img-fluid mb-3">-->
                        <img src="data:image/png;base64,{{ $artikel->gambar_2 }}" class="img-fluid mb-3">
                        <p>{!! $artikel->content_2 !!}</p>

                        <!-- Menambahkan daftar tags -->
                        <div class="tags mt-3">
                            <h6>Tags:</h6>
                            <div class="d-flex flex-wrap">
                                @foreach ($artikel->tags as $tag)
                                    <span class="badge bg-info text-white me-2 mb-2">
                                        <i class="fas fa-tag me-1"></i>{{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Blog Details Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layout.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_3/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets_3/assets/js/main.js') }}"></script>

</body>

</html>
