<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    {{-- <title>UpConstruction Bootstrap Template - Blog Details</title> --}}
    @section('title')
    Detail Artikel
    @endsection
    <meta content="" name="description">
    <meta content="" name="keywords">

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
    @include('frontend.layout.header')

    <main id="main">
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Artikel Detail</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Artikel Details</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-3">{{ $artikel->judul }}</h1>
                        <div class="d-flex align-items-center mb-3">
                            <span class="me-3"><i class="bi bi-person"></i> {{ $artikel->users->name  }}</span>
                            <span class="me-3"><i class="bi bi-folder2"></i> {{ $artikel->category->name }}</span>
                            <span><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($artikel->created_at)->format('d F Y') }}</span>
                        </div>
                        <a href="{{ $artikel->link_url }}" target="_blank">
                            {{-- <img src="{{ asset($artikel->gambar) }}" class="img-fluid mb-3" > --}}
                            <img src="{{ asset($artikel->gambar) }}" class="img-fluid mb-3" >
                        </a>
                            <p>{!! $artikel->content !!}</p>
                        {{-- @isset($artikel->content)
                            <p>{!! $artikel->content !!}</p>
                        @else
                            <p>Content not available.</p>
                        @endisset --}}

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
