<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- <title>Home - MacroStruktur</title> --}}
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MacroStruktur - Official Website</title>
    <meta name="description"
        content="MacroStruktur adalah solusi terpercaya untuk analisa dan perencanaan struktur bangunan. Temukan layanan terbaik untuk kebutuhan konstruksi Anda di sini!">
    <meta name="keywords"
        content="⁠jasa konsultasi struktur profesional, ⁠jasa konsultasi struktur profesional dan terpercaya, ⁠jasa konsultasi struktur profesional surabaya, ⁠jasa konsultasi struktur profesional indonesia, jasa konsultasi struktur profesional jakarta, jasa konsultasi struktur murah, ⁠jasa konsultasi struktur">

    <meta name="author" content="MacroStruktur">
    <meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://macrostruktur.id">
    <meta property="og:site_name" content="MacroStruktur">
    <meta property="og:title" content="MacroStruktur - Official Website MacroStruktur">
    <meta property="og:description"
        content="Solusi terbaik untuk analisa struktur bangunan dan perencanaan konstruksi. Tingkatkan kualitas proyek Anda bersama MacroStruktur.">
    <meta property="og:image" content="https://macrostruktur.id/assets_2/img/Group%201.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MacroStruktur - Solusi Analisa dan Perencanaan Struktur Bangunan">
    <meta name="twitter:description"
        content="MacroStruktur adalah partner terpercaya untuk kebutuhan analisa dan perencanaan struktur bangunan. Temukan layanan profesional kami sekarang!">
    <meta name="twitter:image" content="https://macrostruktur.id/assets_2/img/Group%201.png">

    <meta name="theme-color" content="#1F8AD1">
    <!-- Favicons -->
    <link href="{{ asset('assets_2/img/LOGO MACROSTRUKTUR 4.png') }}" rel="icon">
    <link href="{{ asset('assets_2/img/LOGO MACROSTRUKTUR 4.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">

    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> --}}


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets_2/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/assets/css/roboto.css') }}" rel="stylesheet">

    <style>
        /* Gambar Full Height */
        .full-height-img {
            height: 100% !important;
            /* Sesuaikan dengan kontainer */
            max-height: 100vh !important;
            /* Batasi tinggi maksimum agar tidak overflow */
            object-fit: cover;
            /* Menjaga proporsi gambar */
            width: 100% !important;
            /* Pastikan gambar melebar */
        }

        /* Tombol tanpa padding atau margin */
        .custom-btn {
            padding: 0 !important;
            /* Hilangkan padding */
            margin: 0 !important;
            /* Hilangkan margin */
            display: inline-block;
            line-height: 1;
            /* Atur ketinggian tombol */
        }

        .img-same-size {
            width: 100%;
            /* Menyesuaikan lebar dengan elemen parent */
            height: 200px;
            /* Tetapkan tinggi yang sama */
            object-fit: cover;
            /* Agar gambar tetap proporsional */
        }

        .stretched-link.disabled {
            pointer-events: none;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4GK3ZNE3ZW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4GK3ZNE3ZW');
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P4B4PRXW');
    </script>


</head>
@yield('content')
@include('frontend.layout.footer')

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

</html>
