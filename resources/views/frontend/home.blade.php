@extends('frontend.layout.head')


@section('content')
<body class="index-page">

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
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#profil">Profil</a></li>
                        <li><a href="#services">Testimoni</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        {{-- <li><a href="#team">Team</a></li> --}}
                        <li><a href="{{ url('/list-artikel') }}">Artikel</a></li>
                        <li class="dropdown"><a href="#"><span>Jasa Layanan</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ url('/layanan-detail/bangunan-gedung') }}">Bangunan Gedung</a></li>
                                <li><a href="{{ url('/layanan-detail/rumah-tinggal-ruko') }}">Rumah Tinggal/Ruko</a>
                                </li>
                                <li><a href="{{ url('/layanan-detail/bangunan-gudang') }}">Bangunan Gudang</a></li>
                                <li><a href="{{ url('/layanan-detail/assesment') }}">Assesment</a></li>
                                <li><a href="{{ url('/layanan-detail/bim-tekla-rab') }}">BIM, Tekla, RAB</a></li>
                                <li><a href="{{ url('/layanan-detail/ded-arsitek-mep') }}">DED Arsitek, MEP</a></li>
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

        <!-- Hero Section -->
        {{-- <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Welcome to <span>BizLand</span></h1>
            <p>We are team of talented designers making websites with Bootstrap</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section --> --}}
        {{-- <section id="hero" class="hero section light-background">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <span class="text-white">Solusi Terpercaya</span>
                        <h2 class="text-white fw-bold">Analisa dan Perencanaan Struktur Bangunan</h2>
                        <a href="#profil" class="btn btn-primary">Selengkapnya</a>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6">
                        <img src="assets_2/img/macrohitungstruktur-banner3.png" alt="Blueprints"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section> --}}
        <section id="hero" class="hero section light-background">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <span class="text-white">Solusi Terpercaya</span>
                        <h2 class="text-white fw-bold">Analisa dan Perencanaan Struktur Bangunan</h2>
                        <a href="#profil" class="btn btn-primary" style="width: 120px">Selengkapnya</a>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6">
                        <img src="assets_2/img/macrohitungstruktur-banner3.png" alt="Blueprints"
                            class="img-fluid rounded full-height-img">
                    </div>
                </div>
            </div>
        </section>




        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                {{-- <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Berpengalaman</a></h4>
              <p>Sejak tahun 2020, kami telah membangun reputasi sebagai perencana struktur ahli.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Cermat</a></h4>
              <p>Setiap detail struktur dihitung dan dirancang dengan cermat serta akurat.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Cepat</a></h4>
              <p>Perencanaan struktur  bangunan, paling cepat selesai hanya dalam 3 hari!*</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Berkualitas</a></h4>
              <p>Kualitas perencanaan struktur terbaik, terjangkau mulai dari Rp 4.500/m² saja!*</p>
            </div>
          </div><!-- End Service Item -->

        </div> --}}
                <div class="row gy-4">

                    <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-person-check icon"></i></div>
                            <h4><a href="" class="stretched-link">Berpengalaman</a></h4>
                            <p>Sejak tahun 2019, kami telah membangun reputasi sebagai perencana struktur ahli.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="" class="stretched-link">Cermat</a></h4>
                            <p>Setiap detail struktur dihitung dan dirancang dengan cermat serta akurat.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Cepat</a></h4>
                            <p>Perencanaan struktur bangunan, paling cepat selesai hanya dalam 3 hari!*</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Berkualitas</a></h4>
                            <p>Kualitas perencanaan struktur terbaik, terjangkau mulai dari Rp 4.500/m² saja!*</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>


            </div>

        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="profil" class="about section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Profil</h2>
                <p><span>Tentang Kami </span> <span class="description-title">MacroStruktur.id</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets_2/img/macro-hitung-struktur-profil.png" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>Solusi Struktur Cerdas untuk Bangunan</h3>
                            <h6><b>macrostruktur.id</b></h6>
                            <p class="fst-italic">
                                Tim Ahli Perencanaan Struktur yang Bersertifikat, 
                                menguasai software ETABS, SAP2000, Revit, dan Autocad, 
                                berpedoman pada SNI untuk perhitungan yang tepat dan akurat
                            </p>
                            {{-- <ul>
                <li>
                  <i class="bi bi-diagram-3"></i>
                  <div>
                    <h4>Ullamco laboris nisi ut aliquip consequat</h4>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
              </ul> --}}
                        </div>
                        <div class="row gy-3">

                            <!-- Image 1 -->
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <img src="assets_2/img/2_logo.png" alt="SAP2000 Logo" class="img-fluid">
                            </div>

                            <!-- Image 2 -->
                            <div class="col-sm-4" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets_2/img/ETABS-CSI.png" alt="ETABS Logo" class="img-fluid">
                            </div>

                            <!-- Image 3 -->
                            <div class="col-sm-2" data-aos="fade-up" data-aos-delay="300">
                                <img src="assets_2/img/sni-logo-6BC4A3F52A-seeklogo.com.png" alt="SNI Logo"
                                    class="img-fluid">
                            </div>
                            <div class="col-sm-4" data-aos="fade-up" data-aos-delay="300">
                                <img src="assets_2/img/AutoCAD-logo.png" alt="SNI Logo"
                                    class="img-fluid">
                            </div>
                            <div class="col-sm-4" data-aos="fade-up" data-aos-delay="300">
                                <img src="assets_2/img/autodesk-revit-1280x720.png" alt="SNI Logo"
                                    class="img-fluid">
                            </div>
                            <div class="row">
                                <h3>Konsultasi Gratis</h3>
                                <div class="contact-info">
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                        <span><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFCUlEQVR4nO2aW4hVZRTHf45Tjs5QzdGxC3Q1uxM9ZBlF9SCWlTUNJRgKFUoXUcMub009lNEFAkmSoJfsZvVQhkWWmmGWWqmFlbeITLEaungbR80Ti/4fLM7Ze5999jl7ToR/2HD4vrXXd1vfWv+19oEj+P+iAHQCTwOLgO+B34E+Pfb7O/WZzE1AO/8RtACTgcXA30CxyucQ8AEwCRjUiAUMBu4HdrhJ7QeWAg/rZM7Vjh+lp11t1tcNLNM74f3twCxtTr/gemCrm8AaYApwbAZdxwFTgS+cvi3AOHKE7dQ8N+CXwNg66r8WWOv0z83jdE7QxG2AvcB0YGC9B+FfnTOBfe60j6+X8tN13EV5nQvIHxcCGzXmZs2hJnQ4hauBYfQf2oEVGnurrCITWpw5rQRa6X+0Ap87M8t0Z+Y5c7Jg1ygMdVZhDqBqFxsudn/ciTR3Zp/mZN4tdbALccK8UxwsuH2oxZrsj8BV5If73OVPZWIPuDgR52JHAr9FUI7t2og80Ays0zi2qES0ONoRF+xscask866L6KvVdif5YZzG+LkSN5vkPEQcbpSMsdshrn2y2o1u5IUBzpPeliS4WELGneKwUDJ3RJzmr+q7lPxwl8Z4P06gIFq9vwIB3ClFp0X0PaG++eQbKPuAg3Hz7NQkjIon4YDkoi71KdqM3bqceeFjzcHMvAzPqNPyiST0SO6siL6x6vsjJ1IZ8KjGeYoILFKnpaBJWCo5u9weZ7tFWoKUJ252XrMMm9RpgS4J0yX3Scxxv53zaRjOd56zDGE3jdskwS7YHsmOce0hy7uX/DFMY1lQLkOfOo9OoehxyW5ydOFWte0CziBfDHJ1gjL0JnijUgxxydazrn2B2r4BjqFBC9mhzpNSKrtErvgwMEFtNvlvpeezCvFolBxLW71Na4M67SKlxUy9YxR7tNpOBX5Q+8aYNGCKNqCowp0F0hPrddkD9eiiOjyv934RKw6Bca1bZLfLMK92J7nGMWcz7bkp8/Pgfm3OZehWp+1ONWgW7wk0/hy12117we18j3QH+j9bchcDb7pK5SHgoVoC4nUpKUoUbLeXuAnbrgdcAXxakrdYIGsq0WHx62X1m3tPwnLJjY+bzB6RseEZFmOe7B0NcEC76gPj5aoDPFZC/z2G6/0/E8YpONIY6xlfl6JpZEOTjjuY0wqZTlp06T1LJ+Jwt2TeI0XStE5JTFZcA2yTrsOiLWMizMnjTFcreDBGxub0lWQmJk2gycWBar1XVIF6tih90aWoTwJXigq1aQF2ef9ym9haobqzLc1niJDurqc+6FBqEEhp0vNGgt03a04mNyPNwCdLeHcFU8iCy4A5wNcqI+1SGelVnVISZrkgm+qj0O1JwaZBuMhxwdSfMmr1XPVGh4pyRZ1mKgx0eckIGo82V0NbVc13xtGuLNloFBwj2FLtB59H9OJzNP5ObHbJW1TpKREr9fINNAbN8k69zpyqpku+QBcXkEaotvuSonVnjQwgYICC3XoXU+Zk/fY+QQo+cm0jlQTNd5Sj9LG09p6MRLMg7hRoR1GmVNPX4helyOj4K8otSidttd23VBKa6uhMyCOWiZbcApynrK9FBY2hyha7dBeXu4JHoB0z6vEPiJ8iJr5TtGGa0stSM2pSTrDAlYiqeQ6qMDixnn/hWKJTeE2mUqlQV4rBsvNu3Z8NKmj0aud7dIILRfXH51xpOQIaiX8Aj4PBez3GiikAAAAASUVORK5CYII="
                                                alt="whatsapp--v1" width="24" height="24">
                                            0878-3439-9815</span>
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                        <span><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB7UlEQVR4nO3YT6hNURTH8Y/nP+UlQoT0CgMGDKSkSCkpSSmlGChTQ6NXeiNTQwO9kjJRMjFgQErKSzJhQAyI/Mn//3/e0a316vS69/Z679x7zzntb+06nb322nuf3W+vtQ6JRCKR6BFZTZrabaSqZLXdyIDqMdBsI5+wX3XYg/etxD6K0+hTXqbhJP61EvtgrvMK+pWP/lhbFmsdbCX2/HE9xgblYR0eNpFBy1trFUbi3Rcc1Hv24WOs6cG4i6nt9TsHw7m+s5ip+0wPzY7GOi5i/mTiyHH8jv6bWKp7LMK1mPtPCHxKAXE7XoXNc2zReTbhacz5FruKiuwrcCfsfuKYznEY32Kue1hddIoyG2fG6WaW4pgRehjzfx5zO5lrHcH3GHMby02dJbiRO/GGNruSNG7Gsxj3BjtNnm14Gb5eYGu3s9/FuD6BW6UdjS//K3zcwrJepfHj7/kLmDeBcY04da6gOJUVWY8cwtfwcx9r2tiuxN2w/YGjZSus1uNR+HqH3U1sduB12DzBxrJWiAtwOfz9xakoCRqp94nQUqPvKhaWvdTtw1BON5eijdU7QwXXO1mna/a9+JDz/xkHqvrzYW2UBCPx3Amy2v5FqSpZ2kjJyNKJlIwsnUjJyGp7IlnFm9psJJFIJBK6zX+RmLvdeUFJ9AAAAABJRU5ErkJggg=="
                                                alt="new-post--v1" width="24" height="24">
                                            macro.struktur@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>LAYANAN</h2>
                <p><span>MacroStruktur.id </span> <span>Menyediakan </span></p>
                <p class="description-title">Berbagai Layanan </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative ">
                            <div class="img-fluid">

                                <img src="assets_2/img/45.png" alt="" class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Jasa Hitung Struktur Gedung</h3>
                            </a>
                            <p>Analisa struktur bangunan Gedung yang mengacu pada SNI pembebanan,
                                SNI gempa, dan SNI beton terbaru</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="img-fluid">

                                <img src="assets_2/img/jasa-hitung-struktur-rumah-tinggal-ruko (1).png" alt=""
                                    class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3> Jasa Hitung Struktur Rumah & Ruko</h3>
                            </a>
                            <p> Analisa struktur rumah tinggal yang mengutamakan keamanan saat ditinggali dan tetap
                                efisien</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative ">
                            <div class="img-fluid">
                                <img src="assets_2/img/jasa-hitung-struktur-gudang (1).png" alt=""
                                    class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Jasa Hitung Struktur Gudang/Warehouse</h3>
                            </a>
                            <p> Analisa struktur Gudang dan Pabrik dengan struktur baja berat</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="img-fluid">

                                <img src="assets_2/img/46.png" alt="" class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Jasa hitung struktur Non Gedung</h3>
                            </a>
                            <p> Analisa struktur non Gedung, atap kanopi, rangka atap cremona, Bangunan IPAL, dan
                                lain-lain</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative ">
                            <div class="img-fluid">
                                <img src="assets_2/img/44.png" alt="" class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3> Assesment Struktur</h3>
                            </a>
                            <p> Assesment dan SLF Struktur dipergunakan untuk Gedung atau Gudang
                                atau pabrik yang membutuhkan studi kelayakan struktur</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="img-fluid">
                                <img src="assets_2/img/48.png" alt="" class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3> Modeling Bim & Tekla Structures</h3>
                            </a>
                            <p> Modeling struktur baja dengan tekla, membantu proses gambar kerja agar hasil lebih
                                detail dan akurat.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="img-fluid">
                                <img src="assets_2/img/rab.png" alt="" class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3> jasa hitung RAB</h3>
                            </a>
                            <p>Layanan spesial order</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="img-fluid">
                                <img src="assets_2/img/49.png" alt="" class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3> jasa DED Arsitek</h3>
                            </a>
                            <p>Layanan spesial order</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="img-fluid">
                                <img src="assets_2/img/50.png" alt="" class="img-fluid">
                            </div>
                            <a href="#" class="stretched-link">
                                <h3> Jasa DED Mechanical, Electrical, and Plumbing</h3>
                            </a>
                            <p>Layanan spesial order</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                </div>

            </div>

        </section><!-- /Services Section -->


        <section id="testimonials" class="testimonials section dark-background">

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Skills Section -->
        {{-- <section id="skills" class="skills section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Skills Section --> --}}

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="stats-item">
                            {{-- <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span> --}}
                            <span>150+</span>
                            <p>Happy Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-journal-richtext"></i>
                        <div class="stats-item">
                            {{-- <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1"
                                class="purecounter"></span> --}}
                            <span>200+</span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-clock-history"></i>
                        <div class="stats-item">
                            {{-- <span data-purecounter-start="0" data-purecounter-end="4"
                                data-purecounter-duration="1" class="purecounter"></span> --}}
                            <span>5+ Years</span>
                            <p>Experience</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-person"></i>
                        <div class="stats-item">
                            {{-- <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span> --}}
                                <span>7</span>
                            <p>Team</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    {{-- <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets_2/img/unair-ewm.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets_2/img/RS-Umum-Aminah.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets_2/img/LOGO-WEB4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets_2/img/logoppns-1-768x403.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="assets_2/img/272965842_110381708222020_1530594946246873803_n 1.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets_2/assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets_2/assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets_2/assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div> --}}
                    <div class="container my-4">
                        <div class="row g-3">
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="assets_2/img/unair-ewm.png" class="img-fluid rounded" alt="">
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <img src="assets_2/img/RS-Umum-Aminah.png" class="img-fluid rounded" alt="">
                            </div>
                            <div class="col-6 col-md-4 col-lg-3">
                                <img src="assets_2/img/LOGO-WEB4.png" class="img-fluid rounded" alt="">
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <img src="assets_2/img/logoppns-1-768x403.png" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <img src="assets_2/img/272965842_110381708222020_1530594946246873803_n 1.png"
                                    class="img-fluid rounded" alt="">
                            </div>
                            <!-- Uncomment the following for additional images -->
                            <!--
                            <div class="col-6 col-md-4 col-lg-2">
                                <img src="assets_2/assets/img/clients/client-6.png" class="img-fluid rounded" alt="" style="height: 150px; object-fit: cover;">
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <img src="assets_2/assets/img/clients/client-7.png" class="img-fluid rounded" alt="" style="height: 150px; object-fit: cover;">
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <img src="assets_2/assets/img/clients/client-8.png" class="img-fluid rounded" alt="" style="height: 150px; object-fit: cover;">
                            </div>
                            -->
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Clients Section -->



        <!-- Testimonials Section -->


        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p><span>MacroStruktur.id&nbsp;</span> <span class="description-title">Portfolio</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-app">Gedung</li>
                        <li data-filter=".filter-product">Rumah Tinggal</li>
                        <li data-filter=".filter-branding">Gudang</li>
                        <li data-filter=".filter-branding">BIM Modeling</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets_2/img/Mask group.png" class="img-fluid" alt="">
                            {{-- <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div> --}}
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets_2/img/Mask group.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets_2/img/Group 40.png" class="img-fluid" alt="">
                            {{-- <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-1.jpg"
                                    title="Product 1" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div> --}}
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets_2/img/Group 49.png" class="img-fluid" alt="">
                            {{-- <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-3.jpg"
                                    title="Branding 1" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div> --}}
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets_2/img/Group 52.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets_2/img/Mask group.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-5.jpg"
                                    title="Product 2" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets_2/img/Mask group.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-6.jpg"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets_2/img/Mask group.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets_2/img/Mask group.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-8.jpg"
                                    title="Product 3" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets_2/img/Mask group.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets_2/assets/img/masonry-portfolio/masonry-portfolio-9.jpg"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->
                    <div class="text-center mt-4">
                        <a href="{{ url('/portfolio') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>SERTIFIKASI</h2>
                <p><span>Keahlian MacroStruktur.id </span> <span class="description-title">Terjamin!</span></p>
            </div><!-- End Section Title -->

            <div class="container text-center">
                <div class="row">
                    <!-- Baris pertama (2 gambar) -->
                    <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets_2/img/ssk-1.png" class="img-fluid w-75" alt="Image 1">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets_2/img/ssk-2.png" class="img-fluid w-75" alt="Image 2">
                    </div>
                </div>
                <div class="row">
                    <!-- Baris kedua (2 gambar) -->
                    <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets_2/img/ssk-3.png" class="img-fluid w-75" alt="Image 3">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="400">
                        <img src="assets_2/img/ssk-4.png" class="img-fluid w-75" alt="Image 4">
                    </div>
                </div>
                <div class="row">
                    <!-- Baris terakhir (1 gambar di tengah) -->
                    <div class="col-12 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up" data-aos-delay="500">
                        <img src="assets_2/img/43d34971-7ea7-48d1-bba2-2d8c2f8000e8.png" class="img-fluid w-50" alt="Image 5">
                    </div>
                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p><span>Cek Harga dan Kunsultasi Gratis </span></p>
                <p><span>Bersama</span><span class="description-title"> MacroStruktur.id</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3 class="bg-primary text-white">Bangunan Gedung</h3>
                            <h4><sup>Rp</sup>4.500<span> /m²</span></h4>
                            <img src="assets_2/img/jasa-hitung-struktur-gedung.png" class="img-fluid img-same-size"
                                alt="">
                            {{-- <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul> --}}
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Order Sekarang!</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3 class="bg-primary text-white">Rumah Tinggal/ ruko</h3>
                            <h4><sup>Rp</sup>8.000<span> /m²</span></h4>
                            <img src="assets_2/img/jasa-hitung-struktur-rumah-tinggal-ruko.png"
                                class="img-fluid img-same-size" alt="">
                            {{-- <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul> --}}
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Order Sekarang!</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            {{-- <span class="advanced bg-danger">Best</span> --}}
                            <h3 class="bg-primary text-white">Gudang Baja</h3>
                            <h4><sup>Rp</sup>4.500<span>/m²</span></h4>
                            <img src="assets_2/img/jasa-hitung-struktur-gudang.png" class="img-fluid img-same-size"
                                alt="">
                            {{-- <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul> --}}
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Order Sekarang!</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <h3>Non Gedung</h3>
                            {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                            <img src="assets_2/img/jasa-hitung-struktur-non-gedung.png"
                                class="img-fluid img-same-size" alt="">
                            <span>Analisa struktur</span>
                            <span>Bangunan IPAL</span>
                            <span>dan lain-lain</span>
                            {{-- <ul>
                                <li>Analisa struktur</li>
                                <li>Bangunan IPAL</li>
                                <li>dan lain-lain</li>
                            </ul> --}}
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Hubungi Kami</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <h3>Project Lainnya</h3>
                            {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                            <img src="assets_2/img/modeling-bim-tekla-structures.png"
                            class="img-fluid img-same-size" alt="">
                            <p>Modeling Tekla</p>
                            <p>BIM Structure</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Hubungi Kami</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <h3>RAB Struktur</h3>
                            {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                            <img src="assets_2/img/rab.png"
                            class="img-fluid img-same-size" alt="">
                            {{-- <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul> --}}
                            <p>RAB Struktur</p>
                            <p>Arsitek, dan ME</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Hubungi Kami</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <h3>Assesment Struktur</h3>
                            {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                            <img src="assets_2/img/272965844.png"
                            class="img-fluid img-same-size" alt="">
                            {{-- <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul> --}}
                            <p>Structure Assesment </p>
                            <p>(untuk SLF dan Perkuatan Struktur)</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Hubungi Kami</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-item">
                            <h3>Special Order</h3>
                            {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                            <img src="assets_2/img/272965843.png"
                            class="img-fluid img-same-size" alt="">
                            {{-- <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul> --}}
                            <p> DED Arsitek</p>
                            <p>DED MEP</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Hubungi Kami</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Mengapa Struktur Bangunan Penting?</h3>
                                <div class="faq-content">
                                    <p>Struktur bangunan adalah tulang punggung sebuah bangunan. Tanpa perencanaan struktur yang baik, bangunan dapat runtuh, membahayakan nyawa dan harta benda.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apa Saja Jasa yang Ditawarkan Perusahaan Struktur Bangunan?</h3>
                                <div class="faq-content">
                                    <p>Jasa yang ditawarkan perusahaan struktur bangunan sangat beragam, tergantung pada skala dan kompleksitas proyek. Beberapa jasa umum yang ditawarkan antara lain Desain struktur, Perhitungan struktur dan Konsultasi</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana Cara Memilih Perusahaan Struktur Bangunan yang Baik?</h3>
                                <div class="faq-content">
                                    <p>Memilih perusahaan struktur bangunan yang tepat sangat penting untuk keberhasilan proyek Anda. Beberapa hal yang perlu diperhatikan saat memilih perusahaan antara lain Pengalaman, Keahlian, Lisensi, Portofolio, Referensi dan semua ada di MacroStruktur.id
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Berapa Biaya Jasa Perusahaan Struktur Bangunan?</h3>
                                <div class="faq-content">
                                    <p>Jasa perusahaan struktur bangunan sangat bervariasi tergantung pada beberapa faktor, seperti: Ukuran dan kompleksitas proyek, Lokasi proyek, Material yang digunakan, Tingkat kesulitan desain</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apa Perbedaan Antara Arsitek dan Insinyur Struktur?</h3>
                                <div class="faq-content">
                                    <p>Arsitek dan insinyur struktur sama-sama berperan penting dalam pembangunan sebuah bangunan, namun Insinyur struktur Bertanggung jawab atas perencanaan dan analisis struktur bangunan untuk memastikan keamanan dan kekuatannya.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            {{-- <div class="faq-item">
                                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                                <div class="faq-content">
                                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed
                                        in suscipit sequi. Distinctio ipsam dolore et.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item--> --}}

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p><span>Butuh Bantuan? </span> <span class="description-title">Hubungi admin MacroStruktur.id</span></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Alamat</h3>
                                    <p>Jl. Legian III Blok H6/17, Gununganyar, Surabaya, Jawa Timur</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+62 87834399815</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>contact@macrostruktur.id</p>
                                </div>
                            </div><!-- End Info Item -->

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        
                    </div>

                    

                    <div class="col-lg-6">
                        <div class="text-center mt-3">
                            <a href="https://wa.me/6287834399815?text=Bisa%20saya%20bantu?" target="_blank" class="btn btn-success" style="display: inline-flex; align-items: center; gap: 8px;">
                                <i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i> Chat WhatsApp
                            </a>
                        </div>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

 


   

</body>
@endsection
