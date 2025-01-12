@extends('frontend.layout.head')


@section('content')

    <body class="index-page">

        @include('frontend.layout.header')

        <main class="main">

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
                                class="img-fluid rounded w-100">
                        </div>
                    </div>
                </div>
            </section>




            <!-- Featured Services Section -->
            <section id="featured-services" class="featured-services section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-person-check icon"></i></div>
                                <h4><a href="" class="stretched-link">Berkualitas</a></h4>
                                <p>Sejak tahun 2019, kami telah membangun reputasi sebagai perencana struktur ahli.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                                <h4><a href="" class="stretched-link">Cermat</a></h4>
                                <p>Setiap detail struktur dihitung dan dirancang dengan cermat serta akurat.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                                <h4><a href="" class="stretched-link">Cepat</a></h4>
                                <p>Perencanaan struktur bangunan, paling cepat selesai hanya dalam 3 hari!*</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-calendar-week icon"></i></div>
                                <h4><a href="" class="stretched-link">Berkualitas</a></h4>
                                <p>Kualitas perencanaan struktur terbaik, terjangkau mulai dari Rp 4.500/m² saja!*</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

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
                                    <img src="assets_2/img/AutoCAD-logo.png" alt="SNI Logo" class="img-fluid">
                                </div>
                                <div class="col-sm-4" data-aos="fade-up" data-aos-delay="300">
                                    <img src="assets_2/img/autodesk-revit-1280x720.png" alt="SNI Logo" class="img-fluid">
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
                                    <img src="assets_2/img/testi-2-100x100.png" class="testimonial-img"
                                        alt="">
                                    <h3>Ir. Agung Tavianto</h3>
                                    <h4> Architect and Head of Planning in Universal Surabaya</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Tim professional dan bisa diandalkan, 
                                            pekerjaan sangat bagus dan proses pengerjaan lumayan cepat.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets_2/img/testi-1-100x100.png" class="testimonial-img"
                                        alt="">
                                    <h3>M. AMIN, ST,MT</h3>
                                    <h4>Architect and Director di PT. Diah Nurjanah Arsitek</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Sudah berpartner beberapa project dan tidak pernah mengecewakan, sampai sekarang 
                                            masih berkolaborasi dengan MacroStudio.id</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets_2/img/testi-3-100x100.png" class="testimonial-img"
                                        alt="">
                                    <h3>Suharjo Wibowo, S.E.</h3>
                                    <h4>Director of CV. Prasada Ambangun Sejahtera</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Partner project yang bagus, 
                                            pekerjaan jadi cepat selesai, dan harganya sangat terjangkau</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets_2/img/thumb 1.png" class="testimonial-img"
                                        alt="">
                                    <h3>Dafit Efendi</h3>
                                    <h4>UI / UX Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Kami sangat puas dengan layanan struktur bangunan dari Macro Studio. 
                                            Dari awal konsultasi hingga pengerjaan, tim mereka sangat profesional dan responsif. 
                                            Yang paling penting, kami merasa aman dan tenang karena struktur bangunan yang dibangun sangat kokoh dan sesuai standar. 
                                            Kami merekomendasikan Macro Studio bagi siapa pun yang membutuhkan jasa struktur bangunan yang andal dan terpercaya."</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </section><!-- /Testimonials Section -->

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
                        
                        <div class="container my-4">
                            <div class="row g-3">
                                <div class="col-3 col-md-4 col-lg-3">
                                    <img src="assets_2/img/ubaya-logo-width.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-2 col-md-4 col-lg-2">
                                    <img src="assets_2/img/RS-Umum-Aminah.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-3 col-md-4 col-lg-3">
                                    <img src="assets_2/img/LOGO-WEB4.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-2 col-md-4 col-lg-2">
                                    <img src="assets_2/img/logo-ssb-hitam-2.png" class="img-fluid rounded"
                                        alt="">
                                </div>
                                <div class="col-2 col-md-4 col-lg-2">
                                    <img src="assets_2/img/272965842_110381708222020_1530594946246873803_n 1.png"
                                        class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="container my-4">
                            <div class="row g-3 logo-slider">
                                <div class="col-6 col-md-4 col-lg-2">
                                    <img src="assets_2/img/ubaya-logo-width.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <img src="assets_2/img/RS-Umum-Aminah.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <img src="assets_2/img/LOGO-WEB4.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <img src="assets_2/img/logo-ssb-hitam-2.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <img src="assets_2/img/272965842_110381708222020_1530594946246873803_n 1.png" class="img-fluid rounded"
                                        alt="">
                                </div>
                            </div>
                        </div> --}}
                        

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
                        <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up"
                            data-aos-delay="100">
                            <img src="assets_2/img/ssk-1.png" class="img-fluid w-100" alt="Image 1">
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up"
                            data-aos-delay="200">
                            <img src="assets_2/img/ssk-2.png" class="img-fluid w-100" alt="Image 2">
                        </div>
                    </div>
                    <div class="row">
                        <!-- Baris kedua (2 gambar) -->
                        <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up"
                            data-aos-delay="300">
                            <img src="assets_2/img/ssk-3.png" class="img-fluid w-100" alt="Image 3">
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up"
                            data-aos-delay="400">
                            <img src="assets_2/img/ssk-4.png" class="img-fluid w-100" alt="Image 4">
                        </div>
                    </div>
                    <div class="row">
                        <!-- Baris terakhir (1 gambar di tengah) -->
                        <div class="col-12 d-flex justify-content-center align-items-center mb-4" data-aos="fade-up"
                            data-aos-delay="500">
                            <img src="assets_2/img/43d34971-7ea7-48d1-bba2-2d8c2f8000e8.png" class="img-fluid w-100"
                                alt="Image 5">
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
                                <h3 class="text-white" style="background-color: #1F8AD1">Bangunan Gedung</h3>
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
                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" target="_blank"
                                        class="btn-buy">
                                        Order Sekarang!
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="pricing-item">
                                <h3 class="text-white" style="background-color: #1F8AD1">Rumah Tinggal/ ruko</h3>
                                <h4><sup>Rp</sup>8.500<span> /m²</span></h4>
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
                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" target="_blank"
                                        class="btn-buy">
                                        Order Sekarang!
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="pricing-item">
                                {{-- <span class="advanced bg-danger">Best</span> --}}
                                <h3 class="text-white" style="background-color: #1F8AD1">Gudang Baja</h3>
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
                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" target="_blank"
                                        class="btn-buy">
                                        Order Sekarang!
                                    </a>
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
                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" target="_blank"
                                        class="btn-buy">
                                        Hubungi Kami
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="pricing-item">
                                <h3>Project Lainnya</h3>
                                {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                                <img src="assets_2/img/modeling-bim-tekla-structures.png" class="img-fluid img-same-size"
                                    alt="">
                                <p>Modeling Tekla</p>
                                <p>BIM Structure</p>
                                <div class="btn-wrap">
                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" target="_blank"
                                        class="btn-buy">
                                        Hubungi Kami
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="pricing-item">
                                <h3>RAB Struktur</h3>
                                {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                                <img src="assets_2/img/rab.png" class="img-fluid img-same-size" alt="">
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
                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" target="_blank"
                                    class="btn-buy">
                                    Hubungi Kami
                                </a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="pricing-item">
                                <h3>Assesment Struktur</h3>
                                {{-- <h4><sup>$</sup>29<span> / month</span></h4> --}}
                                <img src="assets_2/img/272965844.png" class="img-fluid img-same-size" alt="">
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
                                <img src="assets_2/img/272965843.png" class="img-fluid img-same-size" alt="">
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
                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F" target="_blank"
                                    class="btn-buy">
                                    Hubungi Kami
                                </a>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                    </div>

                </div>

            </section><!-- /Pricing Section -->

            @include('frontend.faq')
            

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p><span>Butuh Bantuan? </span> <span class="description-title">Hubungi admin MacroStruktur.id</span>
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-12">

                            <div class="info-wrap">
                                <div class="container">
                                    <div class="row">
                                        <!-- Call Us -->
                                        <div class="col-md-4">
                                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                                <i class="bi bi-whatsapp flex-shrink-0"></i>
                                                <div>
                                                    <h3>WhatsApp</h3>
                                                    <p>0878-3439-9815</p>
                                                    <a href="https://wa.me/6287834399815?text=Bisa%20kami%20bantu%3F"
                                                        target="_blank" class="btn text-white mt-2" style="background-color: #1F8AD1">
                                                        Hubungi via WhatsApp
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Call Us -->

                                        <!-- Alamat -->
                                        <div class="col-md-4">
                                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                                <div>
                                                    <h3>Alamat</h3>
                                                    <p>Jl. Legian III Blok H6/17, Gununganyar, Surabaya, Jawa Timur</p>
                                                    <a href="https://maps.app.goo.gl/Cn8htCpTaDffDtdP7" target="_blank"
                                                        class="btn text-white mt-2" style="background-color: #1F8AD1">
                                                        Buka di Google Maps
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Alamat -->

                                        <!-- Email Us -->
                                        <div class="col-md-4">
                                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                                <i class="bi bi-envelope flex-shrink-0"></i>
                                                <div>
                                                    <h3>Email</h3>
                                                    <p>customercare@macrostruktur.id</p>
                                                    <a href="mailto:customercare@macrostruktur.id?subject=Halo%20Macrostruktur"
                                                        class="btn text-white mt-2" style="background-color: #1F8AD1">
                                                        Kirim Email
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Email Us -->
                                    </div>
                                </div>


                                {{-- <iframe
                                src="https://maps.app.goo.gl/EPCZT8abfD3x7Vjt5"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1254042206797!2d112.7885445!3d-7.339811399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fab67425ad57%3A0x94de3d16a3161aef!2sJl.%20Legian%20III%20No.H6%2C%20RW.19%2C%20Gn.%20Anyar%2C%20Kec.%20Gn.%20Anyar%2C%20Surabaya%2C%20Jawa%20Timur%2060294!5e0!3m2!1sid!2sid!4v1736482229891!5m2!1sid!2sid" 
                                    frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>


                    </div>

                </div>

            </section><!-- /Contact Section -->

        </main>

    </body>
@endsection
