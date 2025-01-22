<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MacroStruktur Official Website - Portfolio</title>
    <meta name="description" content="Solusi Terpercaya untuk Analisa dan Perencanaan Struktur Bangunan">
	<meta name="keywords" content="analisa struktur bangunan">

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

    <style>
        .container {
            padding: 20px;
        }

        .main-title {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .sub-title {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            align-items: center;
            /* Vertically centers items */
            justify-content: center;
            /* Horizontally centers items */
            height: 100vh;
            /* Makes the container take full viewport height */
            margin-bottom: 0;
            /* Removes any existing margin that might cause misalignment */
        }

        .text-container {
            flex: 1;
        }

        .image-container {
            flex: 1;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .grid-item {
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .grid-item img {
            max-width: 100%;
            height: auto;
        }

        .grid-item p {
            font-size: 14px;
            color: #333;
            margin-top: 10px;
        }
         .active>a {
            color: #1F8AD1;
            /* Active link color */
            font-weight: bold;
            /* Optional styling */
        }
        
    </style>
</head>

<body class="starter-page-page">

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
            <a href="{{ url('/') }}" class="logo d-flex align-items-center" aria-label="Homepage">
                <!-- Add alt text to the image -->
                <img src="{{ asset('assets_2/img/Group 1.webp') }}" alt="MacroStruktur">
                {{-- <picture>
                    <source srcset="{{ asset('assets_2/img/Group 1.webp') }}" type="image/webp">
                    <img src="{{ asset('assets_2/img/Group 1.webp') }}" class="img-fluid" alt="" style="width: 100%; height: auto; object-fit: contain;" loading="lazy">
                </picture> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}"class="{{ request()->is('/') ? 'active' : '' }}"> Home</a></li>
                    <li class="dropdown {{ request()->is('portfolio*') ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Portfolio <span class="caret"></span>
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
                <h1 class="mb-2 mb-lg-0">Macro Engineering Studio - Jasa Perencanaan &amp; Perhitungan Struktur Bangunan
                </h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <div class="container">
            <div class="content">
                <div class="text-container">
                    <div class="main-title">
                        {{-- Project Bangunan Gedung --}}
                        {{ $data['title'] }}
                    </div>
                    <div class="sub-title">
                        MacroStruktur.id
                    </div>
                </div>
                <div class="image-container">
                    {{-- <img alt="3D model of a building structure" height="400"
                        src="assets_2/img/20. GEDUNG ASRAMA PUTRA AUILYA 4 LANTAI.png" width="800" /> --}}
                        {!! $data['image_header'] !!}
                </div>
            </div>
            {{-- <div class="grid-container">
                <div class="grid-item">
                    <img alt="3D model of Masjid Universitas Muhammadiyah Bengkulu" height="150"
                        src="assets_2/img/13.MASJID UVIVERSITAS MUHAMMDIYAH BENGKULU.png" width="200" />
                        {!! $data['image_1'] !!}
                    <p>
                        {{ $data['description_1'] }}
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Masjid Guod-Jombang" height="150"
                        src="assets_2/img/14.MASJID GUDO - JOMBANG.png" width="200" />
                        {!! $data['image_2'] !!}
                    <p>
                        {{ $data['description_2'] }}
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Auditorium Sekolah Al Hikmah-Batu" height="150"
                        src="assets_2/img/15.AUDITORIUM SEKOLAH AL HIKMAH - BATU.png" width="200" />
                        {!! $data['image_3'] !!}
                        <p>
                            {{ $data['description_3'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Serba Guna Kab. Gresik" height="150"
                        src="assets_2/img/16. GEDUNG SERBA GUNA KAB. GRESIK.png" width="200" />
                    {!! $data['image_4'] !!}
                    <p>
                        {{ $data['description_4'] }}
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Puskesmas Alun-Alun Gresik" height="150"
                        src="assets_2/img/17. GEDUNG PUSKSEMAS ALUN-ALUN GRESIK.png" width="200" />
                        {!! $data['image_5'] !!}
                        <p>
                            {{ $data['description_5'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Puskesmas Panceng" height="150"
                        src="assets_2/img/18. GEDUNG PUSKSEMAS PANCENG.png"
                        width="200" />
                        {!! $data['image_6'] !!}
                        <p>
                            {{ $data['description_6'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Masjid Auliya 2 Lantai" height="150"
                        src="assets_2/img/19. MASJID AULIYA 2 LANTAI.png"
                        width="200" />
                        {!! $data['image_7'] !!}
                        <p>
                            {{ $data['description_7'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Asrama Putra Auliya 4 Lantai" height="150"
                        src="assets_2/img/20. GEDUNG ASRAMA PUTRA AUILYA 4 LANTAI (1).png"
                        width="200" />
                        {!! $data['image_8'] !!}
                        <p>
                            {{ $data['description_8'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Basic Science Fakultas Sains dan Teknologi - Unair C" height="150"
                        src="assets_2/img/1.GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C.png"
                        width="200" />
                        {!! $data['image_9'] !!}
                        <p>
                            {{ $data['description_9'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Asrama Mahasiswa Univ Trunojoyo" height="150"
                        src="assets_2/img/2.GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO.png"
                        width="200" />
                        {!! $data['image_10'] !!}
                        <p>
                            {{ $data['description_10'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Auditorium Universitas Muhammadiyah Sidoarjo" height="150"
                        src="assets_2/img/3.GEDUNG AUDITORIUM UNIVERISTAS MUHAMMAIDYAH SIDOARJO.png"
                        width="200" />
                        {!! $data['image_11'] !!}
                        <p>
                            {{ $data['description_11'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Laboratorium PAUD Unesa" height="150"
                        src="assets_2/img/4.GEDUNG LABORATORIUM PAUD UNESA.png"
                        width="200" />
                        {!! $data['image_12'] !!}
                        <p>
                            {{ $data['description_12'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Bengkel PPNS ITS-Surabaya" height="150"
                        src="assets_2/img/5.GEDUNG BENGKEL PPNS ITS - SURABAYA.png"
                        width="200" />
                        {!! $data['image_13'] !!}
                        <p>
                            {{ $data['description_13'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of RSU Aminah Blitar" height="150"
                        src="assets_2/img/6.RSU AMINAH BLITAR (1).png"
                        width="200" />
                        {!! $data['image_14'] !!}
                        <p>
                            {{ $data['description_14'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Fakultas Farmasi Universitas Surabaya - Ubaya" height="150"
                        src="assets_2/img/7.GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA.png"
                        width="200" />
                        {!! $data['image_15'] !!}
                        <p>
                            {{ $data['description_15'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Student Center Universitas Surabaya - Ubaya" height="150"
                        src="assets_2/img/8.GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA.png"
                        width="200" />
                        {!! $data['image_16'] !!}
                        <p>
                            {{ $data['description_16'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Hotel Kalpataru - Malang" height="150"
                        src="assets_2/img/9.HOTEL KALPATARU - MALANG.png"
                        width="200" />
                        {!! $data['image_17'] !!}
                        <p>
                            {{ $data['description_17'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Hotel Syariah Surabaya" height="150"
                        src="assets_2/img/10..HOTEL SYARIAH SURABAYA.png"
                        width="200" />
                        {!! $data['image_18'] !!}
                        <p>
                            {{ $data['description_18'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of RSWA Soreang - Bandung" height="150"
                        src="assets_2/img/26.RSWIA SOREANG - BANDUNG.png"
                        width="200" />
                        {!! $data['image_19'] !!}
                        <p>
                            {{ $data['description_19'] }}
                        </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of SDM Muhammadiyah H5 Surabaya" height="150"
                        src="assets_2/img/12. SDN MUHAMMAIDYAH 15 SURABAYA.png"
                        width="200" />
                        {!! $data['image_20'] !!}
                        <p>
                            {{ $data['description_20'] }}
                        </p>
                </div>
            </div> --}}
            <div class="grid-container">
                {{-- Tampilkan Gambar dan Deskripsi --}}
                @for ($i = 1; $i <= 20; $i++)
                    @if (isset($data['image_' . $i]) && isset($data['description_' . $i]))
                        <div class="grid-item">
                            {!! $data['image_' . $i] !!}
                            <p>{{ $data['description_' . $i] }}</p>
                        </div>
                    @endif
                @endfor
            </div>
        </div>


    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}"" class="d-flex align-items-center">
                        {{-- <span class="sitename">BizLand</span> --}}
                        <div class="col-lg-6 col-md-6 footer-about">
                            <img src="{{ asset('assets_2/img/Group 3.png') }}" class="img-fluid " alt="">
                        </div>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Legian III Blok H6/17, Gununganyar</p>
                        <p>Surabaya, Jawa Timur</p>
                        <p>Senin - Jumat : 08:00 - 17:00</p>
                        <p>Sabtu : 08:00 - 12:00</p>
                        <p class="mt-3"><strong>Kontak: </strong> <span>0878-3439-9815/span></p>
                        <p><strong>Email: </strong> <span>customercare@macrostruktur.id</span>
                            <span>macro.struktur@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4 class="text-white">Menu Unggulan</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Artikel</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Jasa Layanan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Bagunan Gedung</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Rumah Tinggal/Ruko</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    {{-- <h4>Our Services</h4> --}}
                    <br><br>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Gudang Baja</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Assesment</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">BIM, Tekla, RAB</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">DED Arsitek, MEP</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4 class="text-white">Follow Us</h4>
                    <p class="text-white">Ikuti akun sosial media kami agar tidak ketinggalan info terkini !</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
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
