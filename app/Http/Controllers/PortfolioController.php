<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'bangunan-gedung' => [
                'title' => 'Project Bangunan Gedung',
                'images' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/JUDUL ATAS/judul-gedung-asrama-putra-auilya-4-lantai-1.png') . '" alt="" class="img-fluid services-img w-100">',
                // 'image_header' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/JUDUL ATAS/judul-gedung-asrama-putra-auilya-4-lantai-1.png') . '" alt="" width="800" class="img-fluid services-img w-100">',
                'slug' => 'bangunan-gedung', // Tambahkan slug di sini
            ],
            'rumah-tinggal' => [
                'title' => 'Project Rumah Tinggal',
                'images' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN RUMAH TINGGAL/JUDUL ATAS/judul-rumah-tinggal-2-lantai-jombang.png') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'rumah-tinggal', // Tambahkan slug di sini
            ],
            'bangunan-gudang' => [
                'title' => 'Project Bagunan Gudang',
                'images' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/JUDUL ATAS/judul-gudang packaging.png') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'bangunan-gudang', // Tambahkan slug di sini
            ],
            'bangunan-non-gedung' => [
                'title' => 'Project Bangunan Non Gedung',
                'images' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/JUDUL ATAS/judul-project-bangunan-non-gedung.png') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'bangunan-non-gedung', // Tambahkan slug di sini
            ],
            'bim-modeling' => [
                'title' => 'Project BIM Modeling',
                'images' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/JUDUL ATAS/judul-project tekla-macrostruktur.png') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'bim-modeling', // Tambahkan slug di sini
            ],
            'mep' => [
                'title' => 'Project MEP',
                'images' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/JUDUL ATAS/judul-project mep-macrostruktur.png') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'mep', // Tambahkan slug di sini
            ],
        ];
        // if (!array_key_exists($slug, $data)) {
        //     abort(404); // Jika tidak ditemukan, tampilkan halaman 404
        // }

        return view('portfolio.list', ['data' => $data]);
    }

    public function detail($slug)
    {
        $data = [
            'bangunan-gedung' => [
                'title' => 'Project Bangunan Gedung',
                // 'images' => '<img src="' . asset('assets_2/img/Designer.jpeg') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'bangunan-gedung',
                // 'image_header' => '<img src="' . asset('assets_2/img/gedung1.png') . '" alt="" class="img-fluid services-img w-100">',
                'image_header' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/JUDUL ATAS/judul-gedung-asrama-putra-auilya-4-lantai-1.png') . '" alt="" width="800" class="img-fluid services-img w-100">',
                'image_1' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/masjid uviversitas-muhammdiyah-bengkulu.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_1' => 'MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU',
                'image_2' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/masjid gudo-jombang.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_2' => 'MASJID GUDO JOMBANG',
                'image_3' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/auditorium sekolah-al-hikmah-batu.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_3' => 'AUDITORIUM SEKOLAH AL HIKMAH-BATU',
                'image_4' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-serba-guna-kab.-gresik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_4' => 'GEDUNG SERBA GUNA KAB. GRESIK',
                'image_5' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-pusksemas-alun-alun-gresik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_5' => 'GEDUNG PUSKESMAS ALUN-ALUN GRESIK',
                'image_6' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-pusksemas-panceng.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_6' => 'GEDUNG PUSKESMAS PANCENG',
                'image_7' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/masjid-auliya-2-lantai.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_7' => 'MASJID AULIYA 2 LANTAI',
                'image_8' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-asrama-putra-auilya-4-lantai.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_8' => 'GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI',
                'image_9' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung basic-science-fakultas-sains-dan-teknologi-unair-c.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_9' => 'GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C',
                'image_10' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung asrama-mahasiswa-univ-trunojoyo.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_10' => 'GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO',
                'image_11' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung auditorium-univeristas-muhammaidyah-sidoarjo.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_11' => 'GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO',
                'image_12' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung laboratorium-paud-unesa.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_12' => 'GEDUNG LABORATORIUM PAUD UNESA',
                'image_13' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung bengkel-ppns-its-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_13' => 'GEDUNG BENGKEL PPNS ITS-SURABAYA',
                'image_14' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/rsu aminah-blitar.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_14' => 'RSU AMINAH BLITAR',
                'image_15' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung fakultas-farmasi-universitas-surabaya-ubaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_15' => 'GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA',
                'image_16' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung student-center-universitas-surabaya-ubaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_16' => 'GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA',
                'image_17' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/hotel kalpataru-malang.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_17' => 'HOTEL KALPATARU - MALANG',
                'image_18' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/hotel syariah-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_18' => 'HOTEL SYARIAH SURABAYA',
                'image_19' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/rswia soreang-bandung.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_19' => 'RSWIA SOREANG - BANDUNG',
                'image_20' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/sdn-muhammaidyah-15-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_20' => 'SDN MUHAMMADIYAH 15 SURABAYA',
            ],
            'rumah-tinggal' => [
                'title' => 'Project Rumah Tinggal',
                // 'images' => '<img src="' . asset('assets_2/img/Designer.jpeg') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'rumah-tinggal',
                // 'image_header' => '<img src="' . asset('assets_2/img/gedung1.png') . '" alt="" class="img-fluid services-img w-100">',
                'image_header' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/JUDUL ATAS/judul-gedung-asrama-putra-auilya-4-lantai-1.png') . '" alt="" width="800" class="img-fluid services-img w-100">',
                'image_1' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/masjid uviversitas-muhammdiyah-bengkulu.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_1' => 'MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU',
                'image_2' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/masjid gudo-jombang.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_2' => 'MASJID GUDO JOMBANG',
                'image_3' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/auditorium sekolah-al-hikmah-batu.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_3' => 'AUDITORIUM SEKOLAH AL HIKMAH-BATU',
                'image_4' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-serba-guna-kab.-gresik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_4' => 'GEDUNG SERBA GUNA KAB. GRESIK',
                'image_5' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-pusksemas-alun-alun-gresik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_5' => 'GEDUNG PUSKESMAS ALUN-ALUN GRESIK',
                'image_6' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-pusksemas-panceng.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_6' => 'GEDUNG PUSKESMAS PANCENG',
                'image_7' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/masjid-auliya-2-lantai.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_7' => 'MASJID AULIYA 2 LANTAI',
                'image_8' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung-asrama-putra-auilya-4-lantai.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_8' => 'GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI',
                'image_9' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung basic-science-fakultas-sains-dan-teknologi-unair-c.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_9' => 'GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C',
                'image_10' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung asrama-mahasiswa-univ-trunojoyo.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_10' => 'GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO',
                'image_11' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung auditorium-univeristas-muhammaidyah-sidoarjo.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_11' => 'GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO',
                'image_12' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung laboratorium-paud-unesa.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_12' => 'GEDUNG LABORATORIUM PAUD UNESA',
                'image_13' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung bengkel-ppns-its-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_13' => 'GEDUNG BENGKEL PPNS ITS-SURABAYA',
                'image_14' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/rsu aminah-blitar.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_14' => 'RSU AMINAH BLITAR',
                'image_15' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung fakultas-farmasi-universitas-surabaya-ubaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_15' => 'GEDUNG FAKULTAS FARMASI UNIVERSITAS SURABAYA - UBAYA',
                'image_16' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/gedung student-center-universitas-surabaya-ubaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_16' => 'GEDUNG STUDENT CENTER UNIVERSITAS SURABAYA - UBAYA',
                'image_17' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/hotel kalpataru-malang.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_17' => 'HOTEL KALPATARU - MALANG',
                'image_18' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/hotel syariah-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_18' => 'HOTEL SYARIAH SURABAYA',
                'image_19' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/rswia soreang-bandung.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_19' => 'RSWIA SOREANG - BANDUNG',
                'image_20' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GEDUNG/sdn-muhammaidyah-15-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_20' => 'SDN MUHAMMADIYAH 15 SURABAYA',
            ],
            'bangunan-gudang' => [
                'title' => 'Project Bangunan Gudang',
                // 'images' => '<img src="' . asset('assets_2/img/Designer.jpeg') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'bangunan-gudang',
                // 'image_header' => '<img src="' . asset('assets_2/img/gedung1.png') . '" alt="" class="img-fluid services-img w-100">',
                'image_header' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/JUDUL ATAS/judul-gudang packaging.png') . '" alt="" width="800" class="img-fluid services-img w-100">',
                'image_1' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang mojokerto.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_1' => 'GUDANG MOJOKERTO',
                'image_2' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang logistik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_2' => 'GUDANG LOGISTIK',
                'image_3' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang-extended-pasuruan.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_3' => 'GUDANG EXTENDED PASURUAN',
                'image_4' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/hanggar-pesawat-ntt.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_4' => 'HANGGAR PESAWAT NTT',
                'image_5' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang-pt.-aisin-indonesia.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_5' => 'GUDANG PT. AISIN INDONESIA',
                'image_6' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/crush-wheat-tower-pt.-harvestar-flour-mills.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_6' => 'CRUSH WHEAT TOWER PT. HARVESTAR FLOUR MILLS',
                'image_7' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang-ceva-logistic.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_7' => 'GUDANG CEVA LOGISTIC',
                'image_8' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang packaging-1.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_8' => 'GUDANG PACKAGING',
                'image_9' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang extension-recond-drum.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_9' => 'GUDANG EXTENSION RECOND DRUM',
                'image_10' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN GUDANG/gudang water-treatment-dompu-ntb.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_10' => 'GUDANG WATER TREATMENT DOMPU - NTB',
            ],
            'bangunan-non-gedung' => [
                'title' => 'Project Bangunan Non Gedung',
                // 'images' => '<img src="' . asset('assets_2/img/Designer.jpeg') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'bangunan-non-gedung',
                // 'image_header' => '<img src="' . asset('assets_2/img/gedung1.png') . '" alt="" class="img-fluid services-img w-100">',
                'image_header' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/JUDUL ATAS/judul-project-bangunan-non-gedung.png') . '" alt="" width="800" class="img-fluid services-img w-100">',
                'image_1' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/rumah pompa-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_1' => 'RUMAH POMPA SURABAYA',
                'image_2' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/rumah pompa-surabaya-2.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_2' => 'RUMAH POMPA SURABAYA 2',
                'image_3' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/water treatment-probolinggo.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_3' => 'WATER TREATMENT PROBOLINGGO',
                'image_4' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/assesment penurunan-pondasi-tangki-pertamina.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_4' => 'WATER TREATMENT PROBOLINGGO',
                'image_5' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/pjb corner-pjb-surabaya.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_5' => 'PJB CORNER PJB SURABAYA',
                'image_6' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/rangka atap-pujasera-manyar-gresik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_6' => 'RANGKA ATAP PUJASERA MANYAR - GRESIK',
                'image_7' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/reservoir pdam-gresik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_7' => 'RESERVOIR PDAM GRESIK',
                'image_8' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/water treatment.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_8' => 'WATER TREATMENT',
                'image_9' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/rumah pompa.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_9' => 'RUMAH POMPA',
                'image_10' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO BANGUNAN NON GEDUNG/shipyard door-jawa-barat.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_10' => 'SHIPYARD DOOR JAWA BARAT',
            ],
            'bim-modeling' => [
                'title' => 'Project BIM Modeling',
                // 'images' => '<img src="' . asset('assets_2/img/Designer.jpeg') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'bim-modeling',
                // 'image_header' => '<img src="' . asset('assets_2/img/gedung1.png') . '" alt="" class="img-fluid services-img w-100">',
                'image_header' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/JUDUL ATAS/judul-project tekla-macrostruktur.png') . '" alt="" width="800" class="img-fluid services-img w-100">',
                'image_1' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/pembangunan gudang-(pt.-kiec).png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_1' => 'pembangunan gudang (PT. KIEC)',
                'image_2' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/pembangunan gudang-(pt.-pelindo-3).png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_2' => 'pembangunan gudang (PT. Pelindo 3)',
                'image_3' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/pembangunan movable--bridge-(pt.-cargill).png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_3' => 'pembangunan movable bridge (PT. Cargill)',
                'image_4' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/gedung serba-guna.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_4' => 'GEDUNG SERBA GUNA KAB. GRESIK',
                'image_5' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/gedung pusksemas-alun-alun-gresik.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_5' => 'GEDUNG PUSKSEMAS ALUN-ALUN GRESIK',
                'image_6' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/sketsa mep.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_6' => 'Sketsa',
                'image_7' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/sketsa mep-2.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_7' => 'Sketsa',
                'image_8' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/sketsa mep-3.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_8' => 'Sketsa',
                'image_9' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/pembangunan showroom-(pt.-auto-2000).png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_9' => 'Pembangunan Showroom (PT. Auto 2000)',
                'image_10' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/pembangunan -transport-palletizer-(pt.-semen-gresik).png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_10' => 'Pembangunan Transport Palletizer(PT. Semen Gresik)',
                'image_11' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/pembangunan pelabuhan-benoa-(pt.-pelindo).png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_11' => 'Pembangunan Pelabuhan Benoa (PT. Pelindo)',
                'image_12' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO TEKLA ATAU BIM MODELING/pembangunan pltu-dome-(pt.-indonesia-power)-auliya-2-lantai.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_12' => 'Pembangunan PLTU Dan Showrome (PT. Indonesia Power) AULIYA 2 LANTAI',
            ],
            'mep' => [
                'title' => 'Project MEP',
                // 'images' => '<img src="' . asset('assets_2/img/Designer.jpeg') . '" alt="" class="img-fluid services-img w-100">',
                'slug' => 'mep',
                // 'image_header' => '<img src="' . asset('assets_2/img/gedung1.png') . '" alt="" class="img-fluid services-img w-100">',
                'image_header' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/JUDUL ATAS/judul-project mep-macrostruktur.png') . '" alt="" width="800" class="img-fluid services-img w-100">',
                'image_1' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 1_page_1.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_1' => 'MASJID UNIVERSITAS MUHAMMADIYAH BENGKULU',
                'image_2' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 1_page_2.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_2' => 'MASJID GUDO JOMBANG',
                'image_3' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 1_page_3.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_3' => 'AUDITORIUM SEKOLAH AL HIKMAH-BATU',
                'image_4' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 1_page_4.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_4' => 'GEDUNG SERBA GUNA KAB. GRESIK',
                'image_5' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 1_page_5.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_5' => 'GEDUNG PUSKESMAS ALUN-ALUN GRESIK',
                'image_6' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 1_page_6.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_6' => 'GEDUNG PUSKESMAS PANCENG',
                'image_7' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 2_page_1.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_7' => 'MASJID AULIYA 2 LANTAI',
                'image_8' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 2_page_2.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_8' => 'GEDUNG ASRAMA PUTRA AULIYA 4 LANTAI',
                'image_9' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 2_page_3.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_9' => 'GEDUNG BASIC SCIENCE FAKULTAS SAINS DAN TEKNOLOGI - UNAIR C',
                'image_10' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 2_page_4.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_10' => 'GEDUNG ASRAMA MAHASISWA UNIV TRUNOJOYO',
                'image_11' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 2_page_5.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_11' => 'GEDUNG AUDITORIUM UNIVERSITAS MUHAMMADIYAH SIDOARJO',
                'image_12' => '<img src="' . asset('assets_2/img/Portfolio/PORTFOLIO MEP/mep 2_page_6.png') . '" alt="" height="150" width="200" class="img-fluid services-img w-100">',
                'description_12' => 'GEDUNG LABORATORIUM PAUD UNESA',
            ],

        ];
        if (!array_key_exists($slug, $data)) {
            abort(404); // Jika slug tidak ditemukan
        }

        return view('portfolio.detail', [
            'data' => $data[$slug], // Kirim data spesifik berdasarkan slug
        'slug' => $slug,  
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
