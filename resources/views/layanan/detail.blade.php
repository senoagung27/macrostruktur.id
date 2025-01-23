<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MacroStruktur - Solusi Analisa dan Perencanaan Struktur Bangunan</title>
    <meta name="description"
        content="MacroStruktur adalah solusi terpercaya untuk analisa dan perencanaan struktur bangunan. Temukan layanan terbaik untuk kebutuhan konstruksi Anda di sini!">
    <meta name="keywords" content="analisa struktur bangunan">

    <meta name="author" content="MacroStruktur">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://macrostruktur.id">
    <meta property="og:site_name" content="MacroStruktur">
    <meta property="og:title"
        content="MacroStruktur - Solusi Terpercaya untuk Analisa dan Perencanaan Struktur Bangunan">
    <meta property="og:description"
        content="Solusi terbaik untuk analisa struktur bangunan dan perencanaan konstruksi. Tingkatkan kualitas proyek Anda bersama MacroStruktur.">
        <meta property="og:image" content="https://macrostruktur.id/assets_2/img/Group%201.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MacroStruktur - Solusi Analisa dan Perencanaan Struktur Bangunan">
    <meta name="twitter:description"
        content="MacroStruktur adalah partner terpercaya untuk kebutuhan analisa dan perencanaan struktur bangunan. Temukan layanan profesional kami sekarang!">
        <meta property="og:image" content="https://macrostruktur.id/assets_2/img/Group%201.png">

    <meta name="theme-color" content="#1F8AD1">


    <!-- Favicons -->
    <link href="{{ asset('assets_2/img/LOGO MACROSTRUKTUR 4.png') }}" rel="icon">
    <link href="{{ asset('assets_2/img/LOGO MACROSTRUKTUR 4.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
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

<body class="service-details-page">

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
                    {{-- <h1 class="sitename">BizLand</h1> --}}
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

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">{{ $layanan['title'] }}</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        {{-- <li class="current">{{ $layanan['title'] }}</li> --}}
                        <li class="current">{{ $layanan['title'] }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-4">


                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                        {{-- <img src="{{ asset('assets_2/img/gedung1.png') }}" alt=""
                            class="img-fluid services-img w-100"> --}}
                            <div>
                                {!! $layanan['images'] !!}
                            </div>
                            
                        {{-- <h1>{{ $layanan['title'] }}</h1> --}}
                        <h1>{{ $layanan['judul'] }}</h1>
                        <p>{{ $layanan['description'] }}</p>
                        <h5>{!! $layanan['h5'] !!}</h5>
                        <p>{!! $layanan['description_2'] !!}</p>
                        <ul>
                            @foreach ($layanan['list'] as $item)
                                {!! $item !!}
                            @endforeach
                        </ul>
                        
                        <p>
                            {!! $layanan['description_3'] !!}
                        </p>
                        {{-- <img src="{{ asset('assets_2/img/DALL·E 2025-01-15 09.38.28 - A detailed blueprint of a high-rise building on a professional desk, surrounded by engineering tools like rulers, calculators, and 3D structural model.png.png') }}" alt=""
                        class="img-fluid services-img w-100"> --}}
                        <div>
                            {!! $layanan['images_2'] !!}
                        </div>
                        
                        
                        <ul>
                            <p>{!! $layanan['description_4'] !!}</p>
                            @foreach ($layanan['list_items'] as $item)
                                {!! $item !!}
                            @endforeach
                        </ul>
                        <p>{!! $layanan['description_5'] !!}</p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>

    <style>
        .footer-about img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: contain;
        }
        .whatsapp-float {
                position: fixed;
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 10px;
                background-color: #25d366;
                color: white;
                border-radius: 50px;
                text-align: center;
                box-shadow: 2px 2px 3px #999;
                z-index: 1000;
            }
    
            .whatsapp-float img {
                margin-top: 10px;
                width: 30px;
                height: 30px;
            }
    
            .whatsapp-float:hover {
                background-color: #1ebe5b;
                cursor: pointer;
            }
        </style>
        
    
    <footer id="footer" class="footer">
    
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}" class="d-flex align-items-center">
                        {{-- <span class="sitename">BizLand</span> --}}
                        {{-- <div class="col-lg-6 col-md-6 footer-about">
                            <img src="{{ asset('assets_2/img/Group 3.png') }}" class="img-fluid " alt="">
                        </div> --}}
                        <div class="col-lg-6 col-md-6 footer-about">
                            <picture>
                                <source srcset="{{ asset('assets_2/img/Group 3.webp') }}" type="image/webp">
                                <img src="{{ asset('assets_2/img/Group 3.png') }}" class="img-fluid" alt="" style="width: 100%; height: auto; object-fit: contain;">
                            </picture>
                        </div>
                        
                        
                                            
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Legian III Blok H6/17, Gununganyar</p>
                        <p>Surabaya, Jawa Timur</p>
                        <p>Senin - Jumat : 08:00 - 17:00</p>
                        <p>Sabtu : 08:00 - 12:00</p>
                        <p class="mt-3"><strong>Kontak: </strong> 0878-3439-9815</p>
                        <p><strong>Email: </strong> <span>customercare@macrostruktur.id</span> <span>macro.struktur@gmail.com</span></p>
                    </div>
                </div>
    
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4 class="text-white">Menu Unggulan</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('artikel.list_artikel') }}">Artikel</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Jasa Layanan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/layanan-detail/bangunan-gedung') }}">Bagunan Gedung</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/layanan-detail/rumah-tinggal-ruko') }}">Rumah Tinggal/Ruko</a></li>
                    </ul>
                </div>
    
                <div class="col-lg-2 col-md-3 footer-links">
                    {{-- <h4>Our Services</h4> --}}
                    <br><br>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/layanan-detail/bangunan-gudang') }}">Gudang Baja</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/layanan-detail/assesment') }}">Assesment</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/layanan-detail/bim-tekla') }}">BIM, Tekla</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/layanan-detail/ded-arsitek-mep-rab') }}">DED Arsitek, MEP, RAB</a></li>
                    </ul>
                </div>
    
                <div class="col-lg-4 col-md-12">
                    <h4 class="text-white">Follow Us</h4>
                    <p class="text-white">Ikuti akun sosial media kami agar tidak ketinggalan info terkini !</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/macrostruktur.id/"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
    
            </div>
        </div>
    
        <hr>
        <div class="container text-center mt-4 ">
            <p>© <span>Copyright</span> <span>2020-2024</span><strong class="px-1 sitename">MacroStruktur.id</strong>
                <span>All Rights Reserved</span>
            </p>
        </div>
    
    </footer>
    
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
            <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" class="whatsapp-float mb-5" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
            </a>
    
    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

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
