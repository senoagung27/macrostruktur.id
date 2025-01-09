<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Starter Page - BizLand Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets_2/img/LOGO MACROSTRUKTUR 4.png" rel="icon">
    <link href="assets_2/img/LOGO MACROSTRUKTUR 4.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets_2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_2/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_2/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets_2/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets_2/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets_2/assets/css/main.css" rel="stylesheet">

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
            align-items: center; /* Vertically centers items */
            justify-content: center; /* Horizontally centers items */
            height: 100vh; /* Makes the container take full viewport height */
            margin-bottom: 0; /* Removes any existing margin that might cause misalignment */
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
    </style>

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets_2/img/Group 1.png" alt="">
                {{-- <h1 class="sitename">BizLand</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#services">Testimoni</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    {{-- <li><a href="#team">Team</a></li> --}}
                    <li><a href="{{ url('/list-artikel') }}">Artikel</a></li>
                    <li class="dropdown"><a href="#"><span>Jasa Layanan</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ url('/layanan-detail/bangunan-gedung') }}">Bangunan Gedung</a></li>
                                    <li><a href="{{ url('/layanan-detail/rumah-tinggal-ruko') }}">Rumah Tinggal/Ruko</a></li>
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

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Macro Engineering Studio - Jasa Perencanaan &amp; Perhitungan Struktur Bangunan
                </h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
        <div class="container">
            <div class="content">
                <div class="text-container">
                    <div class="main-title">
                        Project Bangunan Gedung
                    </div>
                    <div class="sub-title">
                        Macro Engineering Studio
                    </div>
                </div>
                <div class="image-container">
                    <img alt="3D model of a building structure" height="400"
                        src="https://storage.googleapis.com/a1aa/image/y3acOFue71xYXqaayzjTTafiSYs1G5DyG1JdMsnlgZ6HkAAUA.jpg"
                        width="800" />
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-item">
                    <img alt="3D model of Masjid Universitas Muhammadiyah Bengkulu" height="150"
                        src="https://storage.googleapis.com/a1aa/image/RWLsSikxrb6aKJfFSzHjRqNkoZiJs49afJijBjhQgsnUkAAUA.jpg"
                        width="200" />
                    <p>
                        MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Masjid Guod-Jombang" height="150"
                        src="https://storage.googleapis.com/a1aa/image/XmTNijaIEs7GJ5Gf8xAAYHfmzAFIeeAWlWihNfOpBn0deIAAF.jpg"
                        width="200" />
                    <p>
                        MASJID GUOD-JOMBANG
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Auditorium Sekolah Al Hikmah-Batu" height="150"
                        src="https://storage.googleapis.com/a1aa/image/dYiYdju4P3pfQa0Aja7647WMTjo0xuwRoVi9b5VztIaASAAKA.jpg"
                        width="200" />
                    <p>
                        AUDITORIUM SEKOLAH AL HIKMAH-BATU
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Serba Guna Kab. Gresik" height="150"
                        src="https://storage.googleapis.com/a1aa/image/xXa5mzCbsGY0AxeuCECQZMRzo1LcckNGxZrcoJNKf4B5jAAUA.jpg"
                        width="200" />
                    <p>
                        GEDUNG SERBA GUNA KAB. GRESIK
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Puskesmas Alun-Alun Gresik" height="150"
                        src="https://storage.googleapis.com/a1aa/image/DGWReBeYNyrta000Yjpc0G2Aq5ydmrHzYf3B4QUr5fUeeIAAF.jpg"
                        width="200" />
                    <p>
                        GEDUNG PUSKESMAS ALUN-ALUN GRESIK
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Puskesmas Panceng" height="150"
                        src="https://storage.googleapis.com/a1aa/image/mrVVXvJS7aaFH9syVcWzyNZaBDu78lz7b7hoi0evYqDISAAKA.jpg"
                        width="200" />
                    <p>
                        GEDUNG PUSKESMAS PANCENG
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Masjid Auliya 2 Lantai" height="150"
                        src="https://storage.googleapis.com/a1aa/image/QDv1zLibzzoxMtVc9eUWcq5yAOLbbie0EogMyfCISQufPCAQB.jpg"
                        width="200" />
                    <p>
                        MASJID AULIYA 2 LANTAI
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Asrama Putra Auliya 4 Lantai" height="150"
                        src="https://storage.googleapis.com/a1aa/image/yVGwwZPcVfwaeEsHWeFRservXvPVNbnCY3eeWCl86ozABJAAF.jpg"
                        width="200" />
                    <p>
                        GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Basic Science Fakultas Sains dan Teknologi - Unair C" height="150"
                        src="https://storage.googleapis.com/a1aa/image/UNkidoFefxq8a0l5MIxacpvV4ntefRQRwpqIT2pQ7up7QCAQB.jpg"
                        width="200" />
                    <p>
                        GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Asrama Mahasiswa Univ Trunojoyo" height="150"
                        src="https://storage.googleapis.com/a1aa/image/lxfhiBksP7SRASV074nzVwLKGynB7dsVvIa2RfsohAeqHBAoA.jpg"
                        width="200" />
                    <p>
                        GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Auditorium Universitas Muhammadiyah Sidoarjo" height="150"
                        src="https://storage.googleapis.com/a1aa/image/gKRLay178U6DMZHtUfcXzr3eMerdnt2mX3P51EcEQGXlIBAoA.jpg"
                        width="200" />
                    <p>
                        GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Laboratorium PAUD Unesa" height="150"
                        src="https://storage.googleapis.com/a1aa/image/qoEduvRQ62rhOBxZN21zr64otEr6LiVxOzckHbEyXq6eRAAKA.jpg"
                        width="200" />
                    <p>
                        GEDUNG LABORATORIUM PAUD UNESA
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Bengkel PPNS ITS-Surabaya" height="150"
                        src="https://storage.googleapis.com/a1aa/image/uSXWoSU5fsUDbKdAeG0uIkW3Dm9NfR3dI1OCMPpKeMBaQCAQB.jpg"
                        width="200" />
                    <p>
                        GEDUNG BENGKEL PPNS ITS-SURABAYA
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of RSU Aminah Blitar" height="150"
                        src="https://storage.googleapis.com/a1aa/image/h1URKK0rKSYOBhyPFeLQ6O7r0y9DjhgvqZiH8zS7zLtFSAAKA.jpg"
                        width="200" />
                    <p>
                        RSU AMINAH BLITAR
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Fakultas Farmasi Universitas Surabaya - Ubaya" height="150"
                        src="https://storage.googleapis.com/a1aa/image/GHKwbjhwOxpCF57P4JqQeGjW0UfUIkhBlLfhehZPHRv2PCAQB.jpg"
                        width="200" />
                    <p>
                        GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Gedung Student Center Universitas Surabaya - Ubaya" height="150"
                        src="https://storage.googleapis.com/a1aa/image/TgBhkYwotL7NOhEE2DbjhuXtCnGIRaoxwJoZK4UcKdh8IAAF.jpg"
                        width="200" />
                    <p>
                        GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Hotel Kalpataru - Malang" height="150"
                        src="https://storage.googleapis.com/a1aa/image/2XSNRahj8wL6Atnn2tMPeYCZE1EqraqzWaRFLpqihsKBSAAKA.jpg"
                        width="200" />
                    <p>
                        HOTEL KALPATARU - MALANG
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of Hotel Syariah Surabaya" height="150"
                        src="https://storage.googleapis.com/a1aa/image/CDIGa87Eefs7WEq7RKLegU8F7PAkzeVLqfia5hetpfknGSAAKA.jpg"
                        width="200" />
                    <p>
                        HOTEL SYARIAH SURABAYA
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of RSWA Soreang - Bandung" height="150"
                        src="https://storage.googleapis.com/a1aa/image/q4srpGaNXuIEDVNC2ovljYbQM2ldrzOTMlFTFHnnFwfESAAKA.jpg"
                        width="200" />
                    <p>
                        RSWA SOREANG - BANDUNG
                    </p>
                </div>
                <div class="grid-item">
                    <img alt="3D model of SDM Muhammadiyah H5 Surabaya" height="150"
                        src="https://storage.googleapis.com/a1aa/image/KHB6c7a2GO4vIFUudSpq3AJ9gHEAA1U5mBHl8iPbaLcFJAAF.jpg"
                        width="200" />
                    <p>
                        SDM MUHAMMADIYAH H5 SURABAYA
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
          <div class="content">
              <div class="text-container">
                  <div class="main-title">
                      Project Bangunan Gedung
                  </div>
                  <div class="sub-title">
                      Macro Engineering Studio
                  </div>
              </div>
              <div class="image-container">
                  <img alt="3D model of a building structure" height="400"
                      src="https://storage.googleapis.com/a1aa/image/y3acOFue71xYXqaayzjTTafiSYs1G5DyG1JdMsnlgZ6HkAAUA.jpg"
                      width="800" />
              </div>
          </div>
          <div class="grid-container">
              <div class="grid-item">
                  <img alt="3D model of Masjid Universitas Muhammadiyah Bengkulu" height="150"
                      src="https://storage.googleapis.com/a1aa/image/RWLsSikxrb6aKJfFSzHjRqNkoZiJs49afJijBjhQgsnUkAAUA.jpg"
                      width="200" />
                  <p>
                      MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Masjid Guod-Jombang" height="150"
                      src="https://storage.googleapis.com/a1aa/image/XmTNijaIEs7GJ5Gf8xAAYHfmzAFIeeAWlWihNfOpBn0deIAAF.jpg"
                      width="200" />
                  <p>
                      MASJID GUOD-JOMBANG
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Auditorium Sekolah Al Hikmah-Batu" height="150"
                      src="https://storage.googleapis.com/a1aa/image/dYiYdju4P3pfQa0Aja7647WMTjo0xuwRoVi9b5VztIaASAAKA.jpg"
                      width="200" />
                  <p>
                      AUDITORIUM SEKOLAH AL HIKMAH-BATU
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Serba Guna Kab. Gresik" height="150"
                      src="https://storage.googleapis.com/a1aa/image/xXa5mzCbsGY0AxeuCECQZMRzo1LcckNGxZrcoJNKf4B5jAAUA.jpg"
                      width="200" />
                  <p>
                      GEDUNG SERBA GUNA KAB. GRESIK
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Puskesmas Alun-Alun Gresik" height="150"
                      src="https://storage.googleapis.com/a1aa/image/DGWReBeYNyrta000Yjpc0G2Aq5ydmrHzYf3B4QUr5fUeeIAAF.jpg"
                      width="200" />
                  <p>
                      GEDUNG PUSKESMAS ALUN-ALUN GRESIK
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Puskesmas Panceng" height="150"
                      src="https://storage.googleapis.com/a1aa/image/mrVVXvJS7aaFH9syVcWzyNZaBDu78lz7b7hoi0evYqDISAAKA.jpg"
                      width="200" />
                  <p>
                      GEDUNG PUSKESMAS PANCENG
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Masjid Auliya 2 Lantai" height="150"
                      src="https://storage.googleapis.com/a1aa/image/QDv1zLibzzoxMtVc9eUWcq5yAOLbbie0EogMyfCISQufPCAQB.jpg"
                      width="200" />
                  <p>
                      MASJID AULIYA 2 LANTAI
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Asrama Putra Auliya 4 Lantai" height="150"
                      src="https://storage.googleapis.com/a1aa/image/yVGwwZPcVfwaeEsHWeFRservXvPVNbnCY3eeWCl86ozABJAAF.jpg"
                      width="200" />
                  <p>
                      GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Basic Science Fakultas Sains dan Teknologi - Unair C" height="150"
                      src="https://storage.googleapis.com/a1aa/image/UNkidoFefxq8a0l5MIxacpvV4ntefRQRwpqIT2pQ7up7QCAQB.jpg"
                      width="200" />
                  <p>
                      GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Asrama Mahasiswa Univ Trunojoyo" height="150"
                      src="https://storage.googleapis.com/a1aa/image/lxfhiBksP7SRASV074nzVwLKGynB7dsVvIa2RfsohAeqHBAoA.jpg"
                      width="200" />
                  <p>
                      GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Auditorium Universitas Muhammadiyah Sidoarjo" height="150"
                      src="https://storage.googleapis.com/a1aa/image/gKRLay178U6DMZHtUfcXzr3eMerdnt2mX3P51EcEQGXlIBAoA.jpg"
                      width="200" />
                  <p>
                      GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Laboratorium PAUD Unesa" height="150"
                      src="https://storage.googleapis.com/a1aa/image/qoEduvRQ62rhOBxZN21zr64otEr6LiVxOzckHbEyXq6eRAAKA.jpg"
                      width="200" />
                  <p>
                      GEDUNG LABORATORIUM PAUD UNESA
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Bengkel PPNS ITS-Surabaya" height="150"
                      src="https://storage.googleapis.com/a1aa/image/uSXWoSU5fsUDbKdAeG0uIkW3Dm9NfR3dI1OCMPpKeMBaQCAQB.jpg"
                      width="200" />
                  <p>
                      GEDUNG BENGKEL PPNS ITS-SURABAYA
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of RSU Aminah Blitar" height="150"
                      src="https://storage.googleapis.com/a1aa/image/h1URKK0rKSYOBhyPFeLQ6O7r0y9DjhgvqZiH8zS7zLtFSAAKA.jpg"
                      width="200" />
                  <p>
                      RSU AMINAH BLITAR
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Fakultas Farmasi Universitas Surabaya - Ubaya" height="150"
                      src="https://storage.googleapis.com/a1aa/image/GHKwbjhwOxpCF57P4JqQeGjW0UfUIkhBlLfhehZPHRv2PCAQB.jpg"
                      width="200" />
                  <p>
                      GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Gedung Student Center Universitas Surabaya - Ubaya" height="150"
                      src="https://storage.googleapis.com/a1aa/image/TgBhkYwotL7NOhEE2DbjhuXtCnGIRaoxwJoZK4UcKdh8IAAF.jpg"
                      width="200" />
                  <p>
                      GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Hotel Kalpataru - Malang" height="150"
                      src="https://storage.googleapis.com/a1aa/image/2XSNRahj8wL6Atnn2tMPeYCZE1EqraqzWaRFLpqihsKBSAAKA.jpg"
                      width="200" />
                  <p>
                      HOTEL KALPATARU - MALANG
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of Hotel Syariah Surabaya" height="150"
                      src="https://storage.googleapis.com/a1aa/image/CDIGa87Eefs7WEq7RKLegU8F7PAkzeVLqfia5hetpfknGSAAKA.jpg"
                      width="200" />
                  <p>
                      HOTEL SYARIAH SURABAYA
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of RSWA Soreang - Bandung" height="150"
                      src="https://storage.googleapis.com/a1aa/image/q4srpGaNXuIEDVNC2ovljYbQM2ldrzOTMlFTFHnnFwfESAAKA.jpg"
                      width="200" />
                  <p>
                      RSWA SOREANG - BANDUNG
                  </p>
              </div>
              <div class="grid-item">
                  <img alt="3D model of SDM Muhammadiyah H5 Surabaya" height="150"
                      src="https://storage.googleapis.com/a1aa/image/KHB6c7a2GO4vIFUudSpq3AJ9gHEAA1U5mBHl8iPbaLcFJAAF.jpg"
                      width="200" />
                  <p>
                      SDM MUHAMMADIYAH H5 SURABAYA
                  </p>
              </div>
          </div>
      </div>

      <div class="container">
        <div class="content">
            <div class="text-container">
                <div class="main-title">
                    Project Bangunan Gedung
                </div>
                <div class="sub-title">
                    Macro Engineering Studio
                </div>
            </div>
            <div class="image-container">
                <img alt="3D model of a building structure" height="400"
                    src="https://storage.googleapis.com/a1aa/image/y3acOFue71xYXqaayzjTTafiSYs1G5DyG1JdMsnlgZ6HkAAUA.jpg"
                    width="800" />
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <img alt="3D model of Masjid Universitas Muhammadiyah Bengkulu" height="150"
                    src="https://storage.googleapis.com/a1aa/image/RWLsSikxrb6aKJfFSzHjRqNkoZiJs49afJijBjhQgsnUkAAUA.jpg"
                    width="200" />
                <p>
                    MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Masjid Guod-Jombang" height="150"
                    src="https://storage.googleapis.com/a1aa/image/XmTNijaIEs7GJ5Gf8xAAYHfmzAFIeeAWlWihNfOpBn0deIAAF.jpg"
                    width="200" />
                <p>
                    MASJID GUOD-JOMBANG
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Auditorium Sekolah Al Hikmah-Batu" height="150"
                    src="https://storage.googleapis.com/a1aa/image/dYiYdju4P3pfQa0Aja7647WMTjo0xuwRoVi9b5VztIaASAAKA.jpg"
                    width="200" />
                <p>
                    AUDITORIUM SEKOLAH AL HIKMAH-BATU
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Serba Guna Kab. Gresik" height="150"
                    src="https://storage.googleapis.com/a1aa/image/xXa5mzCbsGY0AxeuCECQZMRzo1LcckNGxZrcoJNKf4B5jAAUA.jpg"
                    width="200" />
                <p>
                    GEDUNG SERBA GUNA KAB. GRESIK
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Puskesmas Alun-Alun Gresik" height="150"
                    src="https://storage.googleapis.com/a1aa/image/DGWReBeYNyrta000Yjpc0G2Aq5ydmrHzYf3B4QUr5fUeeIAAF.jpg"
                    width="200" />
                <p>
                    GEDUNG PUSKESMAS ALUN-ALUN GRESIK
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Puskesmas Panceng" height="150"
                    src="https://storage.googleapis.com/a1aa/image/mrVVXvJS7aaFH9syVcWzyNZaBDu78lz7b7hoi0evYqDISAAKA.jpg"
                    width="200" />
                <p>
                    GEDUNG PUSKESMAS PANCENG
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Masjid Auliya 2 Lantai" height="150"
                    src="https://storage.googleapis.com/a1aa/image/QDv1zLibzzoxMtVc9eUWcq5yAOLbbie0EogMyfCISQufPCAQB.jpg"
                    width="200" />
                <p>
                    MASJID AULIYA 2 LANTAI
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Asrama Putra Auliya 4 Lantai" height="150"
                    src="https://storage.googleapis.com/a1aa/image/yVGwwZPcVfwaeEsHWeFRservXvPVNbnCY3eeWCl86ozABJAAF.jpg"
                    width="200" />
                <p>
                    GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Basic Science Fakultas Sains dan Teknologi - Unair C" height="150"
                    src="https://storage.googleapis.com/a1aa/image/UNkidoFefxq8a0l5MIxacpvV4ntefRQRwpqIT2pQ7up7QCAQB.jpg"
                    width="200" />
                <p>
                    GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Asrama Mahasiswa Univ Trunojoyo" height="150"
                    src="https://storage.googleapis.com/a1aa/image/lxfhiBksP7SRASV074nzVwLKGynB7dsVvIa2RfsohAeqHBAoA.jpg"
                    width="200" />
                <p>
                    GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Auditorium Universitas Muhammadiyah Sidoarjo" height="150"
                    src="https://storage.googleapis.com/a1aa/image/gKRLay178U6DMZHtUfcXzr3eMerdnt2mX3P51EcEQGXlIBAoA.jpg"
                    width="200" />
                <p>
                    GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Laboratorium PAUD Unesa" height="150"
                    src="https://storage.googleapis.com/a1aa/image/qoEduvRQ62rhOBxZN21zr64otEr6LiVxOzckHbEyXq6eRAAKA.jpg"
                    width="200" />
                <p>
                    GEDUNG LABORATORIUM PAUD UNESA
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Bengkel PPNS ITS-Surabaya" height="150"
                    src="https://storage.googleapis.com/a1aa/image/uSXWoSU5fsUDbKdAeG0uIkW3Dm9NfR3dI1OCMPpKeMBaQCAQB.jpg"
                    width="200" />
                <p>
                    GEDUNG BENGKEL PPNS ITS-SURABAYA
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of RSU Aminah Blitar" height="150"
                    src="https://storage.googleapis.com/a1aa/image/h1URKK0rKSYOBhyPFeLQ6O7r0y9DjhgvqZiH8zS7zLtFSAAKA.jpg"
                    width="200" />
                <p>
                    RSU AMINAH BLITAR
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Fakultas Farmasi Universitas Surabaya - Ubaya" height="150"
                    src="https://storage.googleapis.com/a1aa/image/GHKwbjhwOxpCF57P4JqQeGjW0UfUIkhBlLfhehZPHRv2PCAQB.jpg"
                    width="200" />
                <p>
                    GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Gedung Student Center Universitas Surabaya - Ubaya" height="150"
                    src="https://storage.googleapis.com/a1aa/image/TgBhkYwotL7NOhEE2DbjhuXtCnGIRaoxwJoZK4UcKdh8IAAF.jpg"
                    width="200" />
                <p>
                    GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Hotel Kalpataru - Malang" height="150"
                    src="https://storage.googleapis.com/a1aa/image/2XSNRahj8wL6Atnn2tMPeYCZE1EqraqzWaRFLpqihsKBSAAKA.jpg"
                    width="200" />
                <p>
                    HOTEL KALPATARU - MALANG
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of Hotel Syariah Surabaya" height="150"
                    src="https://storage.googleapis.com/a1aa/image/CDIGa87Eefs7WEq7RKLegU8F7PAkzeVLqfia5hetpfknGSAAKA.jpg"
                    width="200" />
                <p>
                    HOTEL SYARIAH SURABAYA
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of RSWA Soreang - Bandung" height="150"
                    src="https://storage.googleapis.com/a1aa/image/q4srpGaNXuIEDVNC2ovljYbQM2ldrzOTMlFTFHnnFwfESAAKA.jpg"
                    width="200" />
                <p>
                    RSWA SOREANG - BANDUNG
                </p>
            </div>
            <div class="grid-item">
                <img alt="3D model of SDM Muhammadiyah H5 Surabaya" height="150"
                    src="https://storage.googleapis.com/a1aa/image/KHB6c7a2GO4vIFUudSpq3AJ9gHEAA1U5mBHl8iPbaLcFJAAF.jpg"
                    width="200" />
                <p>
                    SDM MUHAMMADIYAH H5 SURABAYA
                </p>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="content">
          <div class="text-container">
              <div class="main-title">
                  Project Bangunan Gedung
              </div>
              <div class="sub-title">
                  Macro Engineering Studio
              </div>
          </div>
          <div class="image-container">
              <img alt="3D model of a building structure" height="400"
                  src="https://storage.googleapis.com/a1aa/image/y3acOFue71xYXqaayzjTTafiSYs1G5DyG1JdMsnlgZ6HkAAUA.jpg"
                  width="800" />
          </div>
      </div>
      <div class="grid-container">
          <div class="grid-item">
              <img alt="3D model of Masjid Universitas Muhammadiyah Bengkulu" height="150"
                  src="https://storage.googleapis.com/a1aa/image/RWLsSikxrb6aKJfFSzHjRqNkoZiJs49afJijBjhQgsnUkAAUA.jpg"
                  width="200" />
              <p>
                  MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Masjid Guod-Jombang" height="150"
                  src="https://storage.googleapis.com/a1aa/image/XmTNijaIEs7GJ5Gf8xAAYHfmzAFIeeAWlWihNfOpBn0deIAAF.jpg"
                  width="200" />
              <p>
                  MASJID GUOD-JOMBANG
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Auditorium Sekolah Al Hikmah-Batu" height="150"
                  src="https://storage.googleapis.com/a1aa/image/dYiYdju4P3pfQa0Aja7647WMTjo0xuwRoVi9b5VztIaASAAKA.jpg"
                  width="200" />
              <p>
                  AUDITORIUM SEKOLAH AL HIKMAH-BATU
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Serba Guna Kab. Gresik" height="150"
                  src="https://storage.googleapis.com/a1aa/image/xXa5mzCbsGY0AxeuCECQZMRzo1LcckNGxZrcoJNKf4B5jAAUA.jpg"
                  width="200" />
              <p>
                  GEDUNG SERBA GUNA KAB. GRESIK
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Puskesmas Alun-Alun Gresik" height="150"
                  src="https://storage.googleapis.com/a1aa/image/DGWReBeYNyrta000Yjpc0G2Aq5ydmrHzYf3B4QUr5fUeeIAAF.jpg"
                  width="200" />
              <p>
                  GEDUNG PUSKESMAS ALUN-ALUN GRESIK
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Puskesmas Panceng" height="150"
                  src="https://storage.googleapis.com/a1aa/image/mrVVXvJS7aaFH9syVcWzyNZaBDu78lz7b7hoi0evYqDISAAKA.jpg"
                  width="200" />
              <p>
                  GEDUNG PUSKESMAS PANCENG
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Masjid Auliya 2 Lantai" height="150"
                  src="https://storage.googleapis.com/a1aa/image/QDv1zLibzzoxMtVc9eUWcq5yAOLbbie0EogMyfCISQufPCAQB.jpg"
                  width="200" />
              <p>
                  MASJID AULIYA 2 LANTAI
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Asrama Putra Auliya 4 Lantai" height="150"
                  src="https://storage.googleapis.com/a1aa/image/yVGwwZPcVfwaeEsHWeFRservXvPVNbnCY3eeWCl86ozABJAAF.jpg"
                  width="200" />
              <p>
                  GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Basic Science Fakultas Sains dan Teknologi - Unair C" height="150"
                  src="https://storage.googleapis.com/a1aa/image/UNkidoFefxq8a0l5MIxacpvV4ntefRQRwpqIT2pQ7up7QCAQB.jpg"
                  width="200" />
              <p>
                  GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Asrama Mahasiswa Univ Trunojoyo" height="150"
                  src="https://storage.googleapis.com/a1aa/image/lxfhiBksP7SRASV074nzVwLKGynB7dsVvIa2RfsohAeqHBAoA.jpg"
                  width="200" />
              <p>
                  GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Auditorium Universitas Muhammadiyah Sidoarjo" height="150"
                  src="https://storage.googleapis.com/a1aa/image/gKRLay178U6DMZHtUfcXzr3eMerdnt2mX3P51EcEQGXlIBAoA.jpg"
                  width="200" />
              <p>
                  GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Laboratorium PAUD Unesa" height="150"
                  src="https://storage.googleapis.com/a1aa/image/qoEduvRQ62rhOBxZN21zr64otEr6LiVxOzckHbEyXq6eRAAKA.jpg"
                  width="200" />
              <p>
                  GEDUNG LABORATORIUM PAUD UNESA
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Bengkel PPNS ITS-Surabaya" height="150"
                  src="https://storage.googleapis.com/a1aa/image/uSXWoSU5fsUDbKdAeG0uIkW3Dm9NfR3dI1OCMPpKeMBaQCAQB.jpg"
                  width="200" />
              <p>
                  GEDUNG BENGKEL PPNS ITS-SURABAYA
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of RSU Aminah Blitar" height="150"
                  src="https://storage.googleapis.com/a1aa/image/h1URKK0rKSYOBhyPFeLQ6O7r0y9DjhgvqZiH8zS7zLtFSAAKA.jpg"
                  width="200" />
              <p>
                  RSU AMINAH BLITAR
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Fakultas Farmasi Universitas Surabaya - Ubaya" height="150"
                  src="https://storage.googleapis.com/a1aa/image/GHKwbjhwOxpCF57P4JqQeGjW0UfUIkhBlLfhehZPHRv2PCAQB.jpg"
                  width="200" />
              <p>
                  GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Gedung Student Center Universitas Surabaya - Ubaya" height="150"
                  src="https://storage.googleapis.com/a1aa/image/TgBhkYwotL7NOhEE2DbjhuXtCnGIRaoxwJoZK4UcKdh8IAAF.jpg"
                  width="200" />
              <p>
                  GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Hotel Kalpataru - Malang" height="150"
                  src="https://storage.googleapis.com/a1aa/image/2XSNRahj8wL6Atnn2tMPeYCZE1EqraqzWaRFLpqihsKBSAAKA.jpg"
                  width="200" />
              <p>
                  HOTEL KALPATARU - MALANG
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of Hotel Syariah Surabaya" height="150"
                  src="https://storage.googleapis.com/a1aa/image/CDIGa87Eefs7WEq7RKLegU8F7PAkzeVLqfia5hetpfknGSAAKA.jpg"
                  width="200" />
              <p>
                  HOTEL SYARIAH SURABAYA
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of RSWA Soreang - Bandung" height="150"
                  src="https://storage.googleapis.com/a1aa/image/q4srpGaNXuIEDVNC2ovljYbQM2ldrzOTMlFTFHnnFwfESAAKA.jpg"
                  width="200" />
              <p>
                  RSWA SOREANG - BANDUNG
              </p>
          </div>
          <div class="grid-item">
              <img alt="3D model of SDM Muhammadiyah H5 Surabaya" height="150"
                  src="https://storage.googleapis.com/a1aa/image/KHB6c7a2GO4vIFUudSpq3AJ9gHEAA1U5mBHl8iPbaLcFJAAF.jpg"
                  width="200" />
              <p>
                  SDM MUHAMMADIYAH H5 SURABAYA
              </p>
          </div>
      </div>
  </div>

  <div class="container">
    <div class="content">
        <div class="text-container">
            <div class="main-title">
                Project Bangunan Gedung
            </div>
            <div class="sub-title">
                Macro Engineering Studio
            </div>
        </div>
        <div class="image-container">
            <img alt="3D model of a building structure" height="400"
                src="https://storage.googleapis.com/a1aa/image/y3acOFue71xYXqaayzjTTafiSYs1G5DyG1JdMsnlgZ6HkAAUA.jpg"
                width="800" />
        </div>
    </div>
    <div class="grid-container">
        <div class="grid-item">
            <img alt="3D model of Masjid Universitas Muhammadiyah Bengkulu" height="150"
                src="https://storage.googleapis.com/a1aa/image/RWLsSikxrb6aKJfFSzHjRqNkoZiJs49afJijBjhQgsnUkAAUA.jpg"
                width="200" />
            <p>
                MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Masjid Guod-Jombang" height="150"
                src="https://storage.googleapis.com/a1aa/image/XmTNijaIEs7GJ5Gf8xAAYHfmzAFIeeAWlWihNfOpBn0deIAAF.jpg"
                width="200" />
            <p>
                MASJID GUOD-JOMBANG
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Auditorium Sekolah Al Hikmah-Batu" height="150"
                src="https://storage.googleapis.com/a1aa/image/dYiYdju4P3pfQa0Aja7647WMTjo0xuwRoVi9b5VztIaASAAKA.jpg"
                width="200" />
            <p>
                AUDITORIUM SEKOLAH AL HIKMAH-BATU
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Serba Guna Kab. Gresik" height="150"
                src="https://storage.googleapis.com/a1aa/image/xXa5mzCbsGY0AxeuCECQZMRzo1LcckNGxZrcoJNKf4B5jAAUA.jpg"
                width="200" />
            <p>
                GEDUNG SERBA GUNA KAB. GRESIK
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Puskesmas Alun-Alun Gresik" height="150"
                src="https://storage.googleapis.com/a1aa/image/DGWReBeYNyrta000Yjpc0G2Aq5ydmrHzYf3B4QUr5fUeeIAAF.jpg"
                width="200" />
            <p>
                GEDUNG PUSKESMAS ALUN-ALUN GRESIK
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Puskesmas Panceng" height="150"
                src="https://storage.googleapis.com/a1aa/image/mrVVXvJS7aaFH9syVcWzyNZaBDu78lz7b7hoi0evYqDISAAKA.jpg"
                width="200" />
            <p>
                GEDUNG PUSKESMAS PANCENG
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Masjid Auliya 2 Lantai" height="150"
                src="https://storage.googleapis.com/a1aa/image/QDv1zLibzzoxMtVc9eUWcq5yAOLbbie0EogMyfCISQufPCAQB.jpg"
                width="200" />
            <p>
                MASJID AULIYA 2 LANTAI
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Asrama Putra Auliya 4 Lantai" height="150"
                src="https://storage.googleapis.com/a1aa/image/yVGwwZPcVfwaeEsHWeFRservXvPVNbnCY3eeWCl86ozABJAAF.jpg"
                width="200" />
            <p>
                GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Basic Science Fakultas Sains dan Teknologi - Unair C" height="150"
                src="https://storage.googleapis.com/a1aa/image/UNkidoFefxq8a0l5MIxacpvV4ntefRQRwpqIT2pQ7up7QCAQB.jpg"
                width="200" />
            <p>
                GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Asrama Mahasiswa Univ Trunojoyo" height="150"
                src="https://storage.googleapis.com/a1aa/image/lxfhiBksP7SRASV074nzVwLKGynB7dsVvIa2RfsohAeqHBAoA.jpg"
                width="200" />
            <p>
                GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Auditorium Universitas Muhammadiyah Sidoarjo" height="150"
                src="https://storage.googleapis.com/a1aa/image/gKRLay178U6DMZHtUfcXzr3eMerdnt2mX3P51EcEQGXlIBAoA.jpg"
                width="200" />
            <p>
                GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Laboratorium PAUD Unesa" height="150"
                src="https://storage.googleapis.com/a1aa/image/qoEduvRQ62rhOBxZN21zr64otEr6LiVxOzckHbEyXq6eRAAKA.jpg"
                width="200" />
            <p>
                GEDUNG LABORATORIUM PAUD UNESA
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Bengkel PPNS ITS-Surabaya" height="150"
                src="https://storage.googleapis.com/a1aa/image/uSXWoSU5fsUDbKdAeG0uIkW3Dm9NfR3dI1OCMPpKeMBaQCAQB.jpg"
                width="200" />
            <p>
                GEDUNG BENGKEL PPNS ITS-SURABAYA
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of RSU Aminah Blitar" height="150"
                src="https://storage.googleapis.com/a1aa/image/h1URKK0rKSYOBhyPFeLQ6O7r0y9DjhgvqZiH8zS7zLtFSAAKA.jpg"
                width="200" />
            <p>
                RSU AMINAH BLITAR
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Fakultas Farmasi Universitas Surabaya - Ubaya" height="150"
                src="https://storage.googleapis.com/a1aa/image/GHKwbjhwOxpCF57P4JqQeGjW0UfUIkhBlLfhehZPHRv2PCAQB.jpg"
                width="200" />
            <p>
                GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Gedung Student Center Universitas Surabaya - Ubaya" height="150"
                src="https://storage.googleapis.com/a1aa/image/TgBhkYwotL7NOhEE2DbjhuXtCnGIRaoxwJoZK4UcKdh8IAAF.jpg"
                width="200" />
            <p>
                GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Hotel Kalpataru - Malang" height="150"
                src="https://storage.googleapis.com/a1aa/image/2XSNRahj8wL6Atnn2tMPeYCZE1EqraqzWaRFLpqihsKBSAAKA.jpg"
                width="200" />
            <p>
                HOTEL KALPATARU - MALANG
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of Hotel Syariah Surabaya" height="150"
                src="https://storage.googleapis.com/a1aa/image/CDIGa87Eefs7WEq7RKLegU8F7PAkzeVLqfia5hetpfknGSAAKA.jpg"
                width="200" />
            <p>
                HOTEL SYARIAH SURABAYA
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of RSWA Soreang - Bandung" height="150"
                src="https://storage.googleapis.com/a1aa/image/q4srpGaNXuIEDVNC2ovljYbQM2ldrzOTMlFTFHnnFwfESAAKA.jpg"
                width="200" />
            <p>
                RSWA SOREANG - BANDUNG
            </p>
        </div>
        <div class="grid-item">
            <img alt="3D model of SDM Muhammadiyah H5 Surabaya" height="150"
                src="https://storage.googleapis.com/a1aa/image/KHB6c7a2GO4vIFUudSpq3AJ9gHEAA1U5mBHl8iPbaLcFJAAF.jpg"
                width="200" />
            <p>
                SDM MUHAMMADIYAH H5 SURABAYA
            </p>
        </div>
    </div>
</div>
        

    </main>

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">BizLand</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">BizLand</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href=“https://themewagon.com>ThemeWagon
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets_2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets_2/assets/vendor/php-email-form/validate.js"></script>
    <script src="assets_2/assets/vendor/aos/aos.js"></script>
    <script src="assets_2/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets_2/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets_2/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets_2/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets_2/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets_2/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets_2/assets/js/main.js"></script>

</body>

</html>
