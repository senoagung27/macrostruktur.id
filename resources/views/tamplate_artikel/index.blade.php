<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MacroStruktur Official Website - Artikel</title>
    <meta name="description" content="Solusi Terpercaya untuk Analisa dan Perencanaan Struktur Bangunan">
	<meta name="keywords" content="MacroStruktur, analisa struktur bangunan, perencanaan struktur bangunan, konstruksi terpercaya, perhitungan struktur, desain struktur, jasa konsultasi bangunan, layanan konstruksi, teknik sipil, rekayasa struktur, arsitektur dan konstruksi, analisis bangunan, solusi struktur bangunan">

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
 <link href="{{ asset('assets_3/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/aos/aos.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets_3/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="{{ asset('assets_3/assets/css/main.css') }}" rel="stylesheet">

<body>

    @include('frontend.layout.header')

    <main id="main">
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Macro Engineering Studio - Jasa Perencanaan &amp; Perhitungan Struktur Bangunan
                </h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Artikel</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 posts-list">
                    @foreach ($data as $slug => $details)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    {{-- <img src="assets_3/assets/img/blog/blog-1.jpg" class="img-fluid" alt=""> --}}
                                    {{-- <span class="post-date">December 12</span> --}}
                                    <img src="{{ asset($details->gambar) }}" class="img-fluid"
                            alt="{{ $details->judul }}">
                                    <span
                                        class="post-date">{{ \Carbon\Carbon::parse($details['date'])->format('F j') }}</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    {{-- <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui
                                    quibusdam quia</h3> --}}
                                    <h3 class="post-title">{{ $details->judul }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            {{-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span> --}}
                                            <i class="bi bi-person"></i> <span
                                                class="ps-2">{{ $details->users->name }}</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span> --}}
                                            <i class="bi bi-folder2"></i> <span
                                                class="ps-2">{{ $details->category->name }}</span>
                                        </div>
                                    </div>
                                    <p>
                                    <span>{!! Str::limit($details->content, 150) !!}</span>
                                    </p>
                                    <hr>
                                    <a href="{{ route('artikel.detail', $details->slug ) }}"
                                        class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a>
                                </div>

                            </div>
                        </div><!-- End post list item -->
                    @endforeach
                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        {{ $data->links() }}
                    </ul>
                </div>
                

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    @include('frontend.layout.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_3/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_3/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_3/assets/js/main.js') }}"></script>

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
