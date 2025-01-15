<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function detail()
    //  {
    //      return view('layanan.detail');
    //  }
    public function detail($slug)
    {
        // Data layanan berdasarkan slug
        $layanan = [
            'bangunan-gedung' => [
                'title' => 'Bangunan Gedung',
                'judul' => 'Jasa Hitung Struktur Gedung: Solusi Tepat untuk Bangunan yang Kokoh dan Aman',
                'description' => 'Bangunan gedung merupakan salah satu elemen penting dalam infrastruktur yang memiliki fungsi beragam, mulai dari hunian hingga fasilitas umum. Dalam perancangan dan analisis struktur bangunan gedung, aspek keselamatan, efisiensi, dan ketahanan terhadap beban sangatlah krusial. Oleh karena itu, panduan dan regulasi yang mengacu pada standar nasional Indonesia (SNI) menjadi pedoman utama dalam memastikan kualitas dan keamanan konstruksi.
                            Artikel ini akan membahas analisis struktur bangunan gedung yang mengacu pada SNI pembebanan, SNI gempa, dan SNI beton terbaru. Ketiga standar ini memiliki peran yang sangat signifikan dalam memastikan desain bangunan sesuai dengan kondisi alam dan beban yang akan diterima sepanjang umur bangunan.',
                'h5' => '<h5>Mengapa Perhitungan Struktur Penting?</h5>',
                'description_2' => '<p>Perhitungan struktur gedung melibatkan analisis teknis yang mendalam untuk menentukan dimensi, bahan, dan desain yang sesuai. Dengan perhitungan yang tepat,</p>',
                'list' => [
                    '<li><i class="bi bi-check-circle"></i><span>Memastikan kekuatan gedung untuk menahan beban, termasuk beban hidup dan beban mati.</span></li>',
                    '<li><i class="bi bi-check-circle"></i><span>Menghindari kerusakan akibat gempa atau kondisi cuaca ekstrem.</span></li>',
                    '<li><i class="bi bi-check-circle"></i><span>Mengoptimalkan penggunaan bahan bangunan sehingga lebih hemat biaya</span></li>',
                ],
                'images' => '<img src="' . asset('assets_2/img/gedung1.png') . '" alt="" class="img-fluid services-img w-100">',
                'images_2' => '<img src="' . asset('assets_2/img/DALL·E 2025-01-15 09.38.28 - A detailed blueprint of a high-rise building on a professional desk, surrounded by engineering tools like rulers, calculators, and 3D structural model.png.png') . '" alt="" class="img-fluid services-img w-100">',
                'description_3' => '<p>Bangunan gedung merupakan salah satu elemen penting dalam infrastruktur yang memiliki fungsi beragam, mulai dari hunian hingga fasilitas umum. Dalam perancangan dan analisis struktur bangunan gedung, aspek keselamatan, efisiensi, dan ketahanan terhadap beban sangatlah krusial. Oleh karena itu, panduan dan regulasi yang mengacu pada standar nasional Indonesia (SNI) menjadi pedoman utama dalam memastikan kualitas dan keamanan konstruksi. 
                Artikel ini akan membahas analisis struktur bangunan gedung yang mengacu pada SNI pembebanan, SNI gempa, dan SNI beton terbaru. Ketiga standar ini memiliki peran yang sangat signifikan dalam memastikan desain bangunan sesuai dengan kondisi alam dan beban yang akan diterima sepanjang umur bangunan.</p>',
                'description_4' => '<h6><b>Layanan yang Kami Tawarkan</b></h6>
                Sebagai penyedia jasa hitung struktur gedung, kami menawarkan layanan berikut:',
                'list_items' => [
                    '<li><i class="bi bi-check-circle"></i><span>Analisis Struktur: Menggunakan perangkat lunak terkini untuk menghitung beban dan distribusi gaya pada elemen struktur.</li>',
                    '<li><i class="bi bi-check-circle"></i><span>Desain Struktur: Memberikan rekomendasi desain yang sesuai dengan kebutuhan dan anggaran Anda.</span></li>',
                    '<li><i class="bi bi-check-circle"></i><span>Konsultasi Teknis: Tim ahli kami siap memberikan solusi untuk masalah teknis yang mungkin Anda hadapi.</span></li>',
                ],
                'description_5' => 'Bangunan gedung merupakan salah satu elemen penting dalam dunia konstruksi dan arsitektur. Bangunan gedung memiliki berbagai macam fungsi, mulai dari tempat tinggal, perkantoran, pusat perbelanjaan, hingga fasilitas umum seperti rumah sakit dan sekolah. Desain bangunan gedung yang baik harus memperhatikan aspek estetika, keamanan, serta kenyamanan penggunanya.
                    Dalam proses pembangunan gedung, diperlukan perencanaan yang matang. Mulai dari analisis lokasi, perencanaan desain, hingga perhitungan struktur yang memastikan bangunan dapat berdiri kokoh dan tahan terhadap beban yang diterima. Struktur bangunan harus dirancang untuk menahan beban mati (dead load), beban hidup (live load), dan beban dinamis seperti angin dan gempa.',
            ],
            'rumah-tinggal-ruko' => [
    'title' => 'Rumah Tinggal & Ruko',
    'judul' => 'Jasa Hitung Struktur Rumah dan Ruko: Solusi Tepat untuk Hunian dan Bisnis yang Aman dan Nyaman',
    'description' => 'Rumah tinggal dan ruko merupakan bagian penting dari kehidupan sehari-hari, baik sebagai tempat tinggal maupun sebagai pusat aktivitas bisnis. Dalam perencanaan dan analisis struktur rumah dan ruko, aspek keamanan, kenyamanan, dan efisiensi biaya menjadi prioritas utama. Panduan dan regulasi yang mengacu pada standar nasional Indonesia (SNI) menjadi pedoman utama dalam memastikan kualitas konstruksi yang kokoh dan tahan lama.
                Artikel ini akan membahas analisis struktur rumah dan ruko yang mengacu pada SNI pembebanan, SNI gempa, dan SNI beton terbaru. Ketiga standar ini memiliki peran penting dalam memastikan desain bangunan sesuai dengan kondisi alam dan kebutuhan penggunanya.',
    'h5' => '<h5>Mengapa Perhitungan Struktur Penting untuk Rumah dan Ruko?</h5>',
    'description_2' => '<p>Perhitungan struktur rumah dan ruko melibatkan analisis teknis mendalam untuk menentukan dimensi, bahan, dan desain yang sesuai. Dengan perhitungan yang akurat,</p>',
    'list' => [
        '<li><i class="bi bi-check-circle"></i><span>Memastikan rumah dan ruko dapat menahan beban harian, termasuk beban hidup dan beban mati.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Melindungi bangunan dari risiko kerusakan akibat gempa atau kondisi cuaca ekstrem.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Mengoptimalkan penggunaan material untuk efisiensi biaya tanpa mengorbankan kualitas.</span></li>',
    ],
    'images' => '<img src="' . asset('assets_2/img/Designer.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'images_2' => '<img src="' . asset('assets_2/img/Designer (1).jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'description_3' => '<p>Rumah dan ruko tidak hanya menjadi tempat tinggal atau usaha tetapi juga investasi jangka panjang. Oleh karena itu, perencanaan dan perhitungan struktur yang matang sangat penting untuk memastikan bangunan tahan lama dan bernilai tinggi. Artikel ini mengulas analisis struktur rumah dan ruko berdasarkan SNI pembebanan, SNI gempa, dan SNI beton terbaru yang berperan penting dalam menciptakan konstruksi berkualitas.</p>',
    'description_4' => '<h6><b>Layanan yang Kami Tawarkan</b></h6>
        Sebagai penyedia jasa hitung struktur rumah dan ruko, kami menawarkan layanan berikut:',
    'list_items' => [
        '<li><i class="bi bi-check-circle"></i><span>Analisis Struktur: Menggunakan perangkat lunak modern untuk menghitung beban dan distribusi gaya pada elemen struktur.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Desain Struktur: Memberikan solusi desain yang sesuai dengan kebutuhan hunian dan bisnis Anda.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Konsultasi Teknis: Tim ahli kami siap memberikan solusi terbaik untuk kebutuhan teknis Anda.</span></li>',
    ],
    'description_5' => 'Rumah tinggal dan ruko adalah bagian esensial dalam kehidupan masyarakat. Selain berfungsi sebagai tempat tinggal atau usaha, desainnya harus memperhatikan keamanan, kenyamanan, dan estetika. Dalam proses pembangunan rumah atau ruko, perencanaan yang matang sangat diperlukan, mulai dari analisis lokasi, desain, hingga perhitungan struktur yang memastikan bangunan mampu menahan berbagai beban, termasuk beban mati, beban hidup, serta beban dinamis seperti angin dan gempa.',
],
            'bangunan-gudang' => [
    'title' => 'Bangunan Gudang',
    'judul' => 'Jasa Analisa Struktur Non Gedung: Solusi untuk Keamanan dan Kualitas Konstruksi Anda',
    'description' => 'Analisa struktur non gedung mencakup berbagai jenis bangunan seperti atap kanopi, rangka atap cremona, bangunan IPAL, dan konstruksi lainnya yang memerlukan perencanaan struktur yang matang. Keamanan, ketahanan, dan efisiensi adalah faktor utama yang harus diperhatikan dalam setiap analisa struktur. Panduan analisa ini mengacu pada standar nasional Indonesia (SNI) yang relevan untuk memastikan kualitas konstruksi yang andal dan sesuai kebutuhan.',
    'h5' => '<h5>Mengapa Analisa Struktur Penting untuk Non Gedung?</h5>',
    'description_2' => '<p>Analisa struktur non gedung membantu memastikan desain dan konstruksi bangunan non gedung dapat memenuhi kebutuhan fungsional sekaligus mengoptimalkan penggunaan material.</p>',
    'list' => [
        '<li><i class="bi bi-check-circle"></i><span>Memastikan konstruksi mampu menahan beban operasional, angin, dan kondisi lingkungan lainnya.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Memberikan solusi desain yang efisien tanpa mengorbankan kualitas atau estetika.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Melindungi struktur dari kerusakan akibat beban dinamis seperti gempa atau beban angin ekstrem.</span></li>',
    ],
    'images' => '<img src="' . asset('assets_2/img/gudang_2.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'images_2' => '<img src="' . asset('assets_2/img/gudang_1.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'description_3' => '<p>Konstruksi non gedung seperti atap kanopi, rangka atap cremona, dan bangunan IPAL memerlukan perencanaan struktur yang cermat agar dapat bertahan lama dan berfungsi dengan baik. Kami menggunakan pendekatan berbasis SNI untuk memastikan konstruksi berkualitas yang mampu memenuhi kebutuhan Anda.</p>',
    'description_4' => '<h6><b>Layanan yang Kami Tawarkan</b></h6>
        Sebagai penyedia jasa analisa struktur non gedung, kami menawarkan layanan berikut:',
    'list_items' => [
        '<li><i class="bi bi-check-circle"></i><span>Analisa Struktur: Menggunakan perangkat lunak modern untuk menghitung distribusi beban dan gaya pada elemen struktur.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Desain Struktur: Memberikan solusi desain yang sesuai dengan kebutuhan proyek Anda.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Konsultasi Teknis: Tim ahli kami siap membantu Anda dalam memberikan solusi terbaik untuk kebutuhan teknis.</span></li>',
    ],
    'description_5' => 'Bangunan non gedung seperti atap kanopi, rangka atap cremona, dan bangunan IPAL memerlukan analisa struktur yang komprehensif untuk memastikan ketahanan terhadap berbagai beban seperti beban mati, beban hidup, dan beban dinamis. Perencanaan yang matang dan analisa yang akurat adalah kunci untuk mencapai hasil konstruksi yang aman, tahan lama, dan ekonomis.',
],


            'assesment' => [
    'title' => 'Assesment',
    'judul' => 'Jasa Assesment dan SLF Struktur untuk Gedung, Gudang, dan Pabrik: Studi Kelayakan yang Akurat dan Terpercaya',
    'description' => 'Gedung, gudang, dan pabrik adalah elemen penting dalam mendukung aktivitas industri dan bisnis. Untuk memastikan kelayakan dan keamanan struktur bangunan, assesment struktur dan SLF (Sertifikat Laik Fungsi) menjadi langkah vital. Dengan mengikuti standar nasional Indonesia (SNI), proses ini bertujuan memastikan bangunan memenuhi persyaratan teknis yang berlaku serta mendukung operasional yang efisien dan aman.
                Artikel ini akan membahas pentingnya assesment struktur dan penerapan SNI pembebanan, SNI gempa, dan SNI beton terbaru sebagai dasar dalam evaluasi kelayakan struktur.',
    'h5' => '<h5>Mengapa Assesment Struktur Penting?</h5>',
    'description_2' => '<p>Assesment struktur melibatkan evaluasi teknis menyeluruh terhadap elemen bangunan untuk menentukan apakah struktur tersebut memenuhi persyaratan teknis, keamanan, dan fungsionalitas. Dengan assesment yang akurat,</p>',
    'list' => [
        '<li><i class="bi bi-check-circle"></i><span>Memastikan bangunan dapat menahan beban operasional dan eksternal seperti angin dan gempa.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Identifikasi risiko kerusakan yang dapat memengaruhi keselamatan dan kelayakan bangunan.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Mendukung proses perizinan seperti penerbitan SLF.</span></li>',
    ],
    'images' => '<img src="' . asset('assets_2/img/assesment_1.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'images_2' => '<img src="' . asset('assets_2/img/assesment_1.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'description_3' => '<p>Assesment struktur adalah langkah penting dalam memastikan kelayakan gedung, gudang, dan pabrik. Dengan mengikuti standar nasional Indonesia (SNI), evaluasi ini memberikan informasi mendalam mengenai kondisi struktur, potensi risiko, serta rekomendasi teknis untuk perbaikan atau penguatan jika diperlukan.</p>',
    'description_4' => '<h6><b>Layanan yang Kami Tawarkan</b></h6>
        Sebagai penyedia jasa assesment dan SLF struktur, kami menawarkan layanan berikut:',
    'list_items' => [
        '<li><i class="bi bi-check-circle"></i><span>Evaluasi Struktur: Melakukan pemeriksaan detail terhadap elemen struktur bangunan.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Analisis Kelayakan: Menggunakan perangkat lunak modern untuk mengevaluasi kelayakan teknis.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Konsultasi SLF: Membantu proses penerbitan SLF sesuai regulasi.</span></li>',
    ],
    'description_5' => 'Assesment struktur diperlukan untuk memastikan bangunan, gudang, atau pabrik memenuhi standar teknis, keamanan, dan efisiensi. Dengan analisis menyeluruh terhadap struktur bangunan, kami memastikan bahwa bangunan tidak hanya layak secara teknis tetapi juga mendukung operasional dengan optimal. Layanan kami meliputi evaluasi kelayakan, analisis risiko, dan konsultasi teknis untuk penerbitan SLF.',
],

            'bim-tekla' => [
    'title' => 'Modeling Bim & Tekla',
    'judul' => 'Layanan Modeling BIM dan Tekla Structures: Solusi Tepat untuk Struktur Baja yang Presisi dan Efisien',
    'description' => 'Dalam era konstruksi modern, pemodelan Building Information Modeling (BIM) dan penggunaan perangkat lunak seperti Tekla Structures menjadi elemen penting dalam merancang struktur baja. Teknologi ini membantu proses perencanaan, desain, dan pembuatan gambar kerja dengan detail dan akurasi tinggi. Dengan mengikuti standar dan regulasi internasional, modeling menggunakan Tekla Structures memungkinkan efisiensi dalam proyek konstruksi, mengurangi risiko kesalahan, dan meningkatkan kualitas keseluruhan.',
    'h5' => '<h5>Mengapa Menggunakan BIM dan Tekla Structures?</h5>',
    'description_2' => '<p>Penerapan BIM dan Tekla Structures dalam pemodelan struktur baja memberikan berbagai keuntungan, termasuk:</p>',
    'list' => [
        '<li><i class="bi bi-check-circle"></i><span>Meningkatkan akurasi gambar kerja melalui model tiga dimensi yang detail.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Mengidentifikasi potensi konflik desain lebih awal untuk mencegah kesalahan saat konstruksi.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Mempercepat proses konstruksi dengan koordinasi yang lebih baik antar disiplin.</span></li>',
    ],
    'images' => '<img src="' . asset('assets_2/img/modeling_bim_1.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'images_2' => '<img src="' . asset('assets_2/img/modeling_bim_2.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'description_3' => '<p>BIM dan Tekla Structures membantu menciptakan solusi konstruksi yang optimal, baik untuk proyek skala kecil maupun besar. Teknologi ini memungkinkan perencanaan yang lebih terorganisir, analisis yang lebih presisi, dan visualisasi yang jelas, sehingga mempermudah seluruh proses pengambilan keputusan dalam konstruksi struktur baja.</p>',
    'description_4' => '<h6><b>Layanan yang Kami Tawarkan</b></h6>
        Sebagai penyedia jasa pemodelan BIM dan Tekla Structures, kami menawarkan layanan berikut:',
    'list_items' => [
        '<li><i class="bi bi-check-circle"></i><span>Pemodelan Struktur Baja: Membuat model 3D yang detail dan akurat untuk memastikan semua elemen sesuai desain.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Pembuatan Gambar Kerja: Menghasilkan gambar kerja yang lengkap dan terintegrasi langsung dari model Tekla Structures.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Konsultasi BIM: Memberikan saran teknis terbaik untuk memanfaatkan teknologi BIM dalam proyek Anda.</span></li>',
    ],
    'description_5' => 'Pemodelan BIM dan penggunaan Tekla Structures memberikan solusi yang efisien dan akurat untuk semua kebutuhan konstruksi struktur baja Anda. Dengan teknologi ini, proyek konstruksi dapat dijalankan dengan lebih lancar, hemat waktu, dan biaya, serta menghasilkan struktur berkualitas tinggi yang tahan lama.',
],
            'ded-arsitek-mep-rab' => [
    'title' => 'DED Arsitek, MEP, dan RAB',
    'judul' => 'Layanan Spesial Order dari MacroStruktur.id: Jasa Hitung RAB, DED Arsitek, dan DED Mechanical, Electrical & Plumbing',
    'description' => 'MacroStruktur.id menyediakan layanan spesial untuk mendukung kebutuhan perencanaan dan pembangunan Anda. Dengan tim ahli yang berpengalaman, kami menghadirkan solusi komprehensif dalam penyusunan DED (Detailed Engineering Design) Arsitek, Mechanical, Electrical & Plumbing (MEP), serta Rencana Anggaran Biaya (RAB). Semua layanan kami dirancang untuk memastikan efisiensi, keamanan, dan kualitas tinggi pada setiap tahap pembangunan.',
    'h5' => '<h5>Mengapa Memilih Layanan Spesial dari MacroStruktur.id?</h5>',
    'description_2' => '<p>Melalui perhitungan dan desain yang matang, layanan DED Arsitek, MEP, dan RAB kami menawarkan solusi yang terintegrasi untuk kebutuhan proyek konstruksi Anda.</p>',
    'list' => [
        '<li><i class="bi bi-check-circle"></i><span>Menyusun DED Arsitek yang estetis, fungsional, dan sesuai dengan kebutuhan Anda.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Menyediakan desain dan perhitungan sistem MEP yang efisien dan aman.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Menyusun RAB yang detail untuk estimasi biaya proyek yang transparan dan akurat.</span></li>',
    ],
    'images' => '<img src="' . asset('assets_2/img/ded_2.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'images_2' => '<img src="' . asset('assets_2/img/ded_1.jpeg') . '" alt="" class="img-fluid services-img w-100">',
    'description_3' => '<p>Perencanaan yang terperinci sangat penting dalam setiap proyek konstruksi. Dengan layanan DED Arsitek, MEP, dan RAB dari MacroStruktur.id, Anda dapat memastikan bahwa proyek Anda memiliki desain yang optimal, sistem yang andal, serta perhitungan biaya yang efisien. Semua layanan kami mengikuti standar dan regulasi terkini untuk memberikan hasil yang terbaik.</p>',
    'description_4' => '<h6><b>Layanan yang Kami Tawarkan</b></h6>
        Kami menyediakan berbagai layanan yang dapat disesuaikan dengan kebutuhan proyek Anda:',
    'list_items' => [
        '<li><i class="bi bi-check-circle"></i><span>DED Arsitek: Penyusunan desain arsitektur yang inovatif, estetis, dan fungsional.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>DED MEP: Perancangan sistem mekanikal, elektrikal, dan plumbing yang efisien dan terintegrasi.</span></li>',
        '<li><i class="bi bi-check-circle"></i><span>Jasa Hitung RAB: Penyusunan Rencana Anggaran Biaya yang detail untuk efisiensi biaya.</span></li>',
    ],
    'description_5' => 'Dengan layanan DED Arsitek, MEP, dan RAB dari MacroStruktur.id, Anda mendapatkan solusi menyeluruh untuk setiap aspek proyek konstruksi. Mulai dari perencanaan arsitektur hingga sistem MEP yang terintegrasi, kami siap membantu mewujudkan proyek Anda dengan hasil yang berkualitas tinggi dan efisien.',
],

        ];

        // Cek apakah slug ada dalam data layanan
        if (!array_key_exists($slug, $layanan)) {
            abort(404); // Jika tidak ditemukan, tampilkan halaman 404
        }

        return view('layanan.detail', ['layanan' => $layanan[$slug]]);
    }
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
