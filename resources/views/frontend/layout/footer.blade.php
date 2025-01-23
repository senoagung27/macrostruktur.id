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
        <a href="https://wa.me/6281234567890" class="whatsapp-float mb-5" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </a>

<!-- Preloader -->
<div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>