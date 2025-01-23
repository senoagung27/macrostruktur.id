<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MacroStruktur Official Website - Artikel</title>
    <meta name="description" content="Solusi Terpercaya untuk Analisa dan Perencanaan Struktur Bangunan">
    <meta name="keywords"
        content="MacroStruktur, analisa struktur bangunan, perencanaan struktur bangunan, konstruksi terpercaya, perhitungan struktur, desain struktur, jasa konsultasi bangunan, layanan konstruksi, teknik sipil, rekayasa struktur, arsitektur dan konstruksi, analisis bangunan, solusi struktur bangunan">

    <meta name="author" content="MacroStruktur">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://macrostruktur.id/">
    <meta property="og:site_name" content="MacroStruktur">
    <meta property="og:title" content="MacroStruktur Official Website - Analisa dan Perencanaan Struktur Bangunan">
    <meta property="og:description" content="Solusi Terpercaya untuk Analisa dan Perencanaan Struktur Bangunan">
    <meta name="theme-color" content="#1F8AD1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="MacroStruktur Official Website - Analisa dan Perencanaan Struktur Bangunan">
    <meta name="twitter:description" content="Solusi Terpercaya untuk Analisa dan Perencanaan Struktur Bangunan">


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
    <link href="{{ asset('assets_2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets_2/assets/css/main.css') }}" rel="stylesheet">
</head>
<!-- Vendor CSS Files -->
{{-- <link href="{{ asset('assets_3/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/aos/aos.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}

<!-- Template Main CSS File -->
{{-- <link href="{{ asset('assets_3/assets/css/main.css') }}" rel="stylesheet"> --}}

<body>
    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@macrostruktur.id">contact@macrostruktur.id</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 87834399815</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/macrostruktur.id/" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="{{ asset('assets_2/img/Group 1.png') }}" alt="">
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ url('/') }}"class="{{ request()->is('/') ? 'active' : '' }}"> Home</a></li>
                        <li class="dropdown {{ request()->is('portfolio-detail/*') ? 'active' : '' }}">
                            <a href="{{ url('/portfolio') }}"><span>Portfolio</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="{{ request()->is('/portfolio-detail/bangunan-gedung') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio-detail/bangunan-gedung') }}">Bagunan Gedung</a>
                                </li>
                                <li class="{{ request()->is('/portfolio-detail/rumah-tinggal') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio-detail/rumah-tinggal') }}">Rumah Tinggal</a>
                                </li>
                                <li class="{{ request()->is('/portfolio-detail/bangunan-gudang') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio-detail/bangunan-gudang') }}"> Bagunan Gudang</a>
                                </li>
                                <li class="{{ request()->is('/portfolio-detail/bangunan-non-gedung') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio-detail/bangunan-non-gedung') }}"> Bagunan Non Gedung</a>
                                </li>
                                <li class="{{ request()->is('/portfolio-detail/bim-modeling') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio-detail/bim-modeling') }}"> BIM Modeling</a>
                                </li>
                                <li class="{{ request()->is('/portfolio-detail/mep') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio-detail/mep') }}">MEP</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="{{ request()->routeIs('artikel.*') ? 'active' : '' }}">
                            <a href="{{ route('artikel.list_artikel') }}">Artikel</a>
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
                                <li class="{{ request()->is('layanan-detail/bim-tekla') ? 'active' : '' }}">
                                    <a href="{{ url('/layanan-detail/bim-tekla') }}">BIM, Tekla</a>
                                </li>
                                <li class="{{ request()->is('layanan-detail/ded-arsitek-mep-rab') ? 'active' : '' }}">
                                    <a href="{{ url('/layanan-detail/ded-arsitek-mep-rab') }}">DED Arsitek, MEP, RAB</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main id="main">
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Portfolio
                </h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->


        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 posts-list">
                    @foreach ($data as $details)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    {!! $details['images'] !!}
                                    {{-- <img src="assets_3/assets/img/blog/blog-1.jpg" class="img-fluid" alt=""> --}}
                                    {{-- <img src="{{ $details['images'] }}" class="img-fluid"> --}}
                                    {{-- <span
                                        class="post-date">{{ \Carbon\Carbon::parse($details['date'])->format('F j') }}</span> --}}
                                    {{-- <span class="post-date" style="background-color: rgba(31, 138, 209, 0.8);">
                                        {{ \Carbon\Carbon::parse($details['date'])->format('F j') }}
                                    </span> --}}
                                </div>

                                <div class="post-content d-flex flex-column">

                                    {{-- <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui
                                    quibusdam quia</h3> --}}
                                    {{-- <h3 class="post-title">{{ $details->judul }}</h3> --}}
                                    {{-- <h3 class="post-title">Bagunan</h3> --}}
                                    @if (is_array($details) && isset($details['title']))
                                        <h3 class="post-title">{{ $details['title'] }}</h3>
                                    @endif

                                    {{-- <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center"> --}}
                                            {{-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span> --}}
                                            {{-- <i class="bi bi-person"></i> <span
                                                class="ps-2">{{ $details->users->name }}</span> --}}
                                        {{-- </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center"> --}}
                                            {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span> --}}
                                            {{-- <i class="bi bi-folder2"></i> <span
                                                class="ps-2">{{ $details->category->name }}</span> --}}
                                        {{-- </div> --}}
                                    {{-- </div> --}}
                                    {{-- <p>
                                        <span>{!! Str::limit($details->content, 150) !!}</span>
                                    </p> --}}
                                    <hr>
                                    <a href="{{ route('portfolio.detail', $details['slug']) }}"
                                        class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a>
                                    {{-- <a href="{{ route('artikel.detail', $details->slug) }}"
                                        class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a> --}}
                                </div>

                            </div>
                        </div><!-- End post list item -->
                    @endforeach
                </div><!-- End blog posts list -->


            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    @include('frontend.layout.footer')

    {{-- <!-- Vendor JS Files -->
    <script src="{{ asset('assets_3/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_3/assets/js/main.js') }}"></script> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets_2/assets/js/main.js') }}"></script>

</body>

</html>
