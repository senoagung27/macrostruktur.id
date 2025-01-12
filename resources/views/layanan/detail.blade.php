<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Service Details - BizLand Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="service-details-page">

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
                    <img src="{{ asset('assets_2/img/Group 1.png') }}" alt="">
                    {{-- <h1 class="sitename">BizLand</h1> --}}
                </a>
    
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ url('/') }}"class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="#profil">Profil</a></li>
                        <li><a href="#services">Testimoni</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        {{-- <li><a href="#team">Team</a></li> --}}
                        <li class="{{ request()->routeIs('artikel.list_artikel') ? 'active' : '' }}">
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
                                <li class="{{ request()->is('layanan-detail/bim-tekla-rab') ? 'active' : '' }}">
                                    <a href="{{ url('/layanan-detail/bim-tekla-rab') }}">BIM, Tekla, RAB</a>
                                </li>
                                <li class="{{ request()->is('layanan-detail/ded-arsitek-mep') ? 'active' : '' }}">
                                    <a href="{{ url('/layanan-detail/ded-arsitek-mep') }}">DED Arsitek, MEP</a>
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

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">{{ $layanan['title'] }}</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}"">Home</a></li>
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
                        <img src="{{ asset('assets_2/assets/img/services.jpg') }}" alt="" class="img-fluid services-img">
                        {{-- <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas
                        </h3> --}}
                        <h1>{{ $layanan['title'] }}</h1>
                        {{-- <p>
                            Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et
                            doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis
                            fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
                        </p> --}}
                        <p>{{ $layanan['description'] }}</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt
                                    voluptatibus.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span>
                            </li>
                        </ul>
                        <p>
                            Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam
                            sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                        </p>
                        <p>
                            Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae
                            mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio
                            ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil.
                            Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum
                            in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque
                            nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

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
                        <p><strong>Email: </strong> <span>customercare@macrostruktur.id</span> <span>macro.struktur@gmail.com</span></p>
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
