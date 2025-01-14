<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;
use App\Models\Tags;
// use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $artikel = [
    //         'pentingnya-struktur-bangunan' => [
    //             'title' => 'Pentingnya Struktur Bangunan: Fondasi Kekuatan dan Keamanan Rumah Anda',
    //             'author' => 'Admin',
    //             'category' => 'Architecture',
    //             'date' => 'January 2, 2025',
    //             'image' => 'assets_3/assets/img/blog/blog-1.jpg',
    //             'content' => 'Membangun rumah impian bukan hanya tentang desain yang menawan atau interior yang mewah...',
    //         ],
    //         'tips-membangun-rumah' => [
    //             'title' => 'Tips Membangun Rumah Impian dengan Anggaran Terbatas',
    //             'author' => 'John Doe',
    //             'category' => 'Construction',
    //             'date' => 'December 12, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-2.jpg',
    //             'content' => 'Membangun rumah impian dengan anggaran terbatas bukanlah hal yang mustahil...',
    //         ],
    //         'mengapa-renovasi-diperlukan' => [
    //             'title' => 'Mengapa Renovasi Rumah Diperlukan?',
    //             'author' => 'Jane Smith',
    //             'category' => 'Home Improvement',
    //             'date' => 'November 20, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-3.jpg',
    //             'content' => 'Renovasi rumah tidak hanya memperbaiki tampilan, tetapi juga meningkatkan fungsionalitas...',
    //         ],
    //         'panduan-memilih-material' => [
    //             'title' => 'Panduan Memilih Material Bangunan Berkualitas',
    //             'author' => 'Admin',
    //             'category' => 'Construction',
    //             'date' => 'October 15, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-4.jpg',
    //             'content' => 'Material yang berkualitas adalah kunci dari bangunan yang kokoh dan tahan lama...',
    //         ],
    //         'keuntungan-rumah-minimalis' => [
    //             'title' => 'Keuntungan Memiliki Rumah Bergaya Minimalis',
    //             'author' => 'Sarah Lee',
    //             'category' => 'Design',
    //             'date' => 'September 10, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-5.jpg',
    //             'content' => 'Rumah minimalis menjadi pilihan banyak orang karena desainnya yang simpel dan efisien...',
    //         ],
    //         'cara-merawat-rumah' => [
    //             'title' => 'Cara Merawat Rumah Agar Tetap Nyaman dan Bersih',
    //             'author' => 'John Doe',
    //             'category' => 'Maintenance',
    //             'date' => 'August 5, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-6.jpg',
    //             'content' => 'Merawat rumah secara rutin adalah cara terbaik untuk menjaga kenyamanan dan kebersihan...',
    //         ],
    //         'desain-interior-modern' => [
    //             'title' => 'Desain Interior Modern untuk Rumah Masa Kini',
    //             'author' => 'Jane Smith',
    //             'category' => 'Interior Design',
    //             'date' => 'July 20, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-7.jpg',
    //             'content' => 'Interior modern menonjolkan elemen sederhana, tetapi tetap elegan dan fungsional...',
    //         ],
    //         'pemanfaatan-energi-terbarukan' => [
    //             'title' => 'Pemanfaatan Energi Terbarukan di Rumah',
    //             'author' => 'Admin',
    //             'category' => 'Green Living',
    //             'date' => 'June 10, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-8.jpg',
    //             'content' => 'Energi terbarukan seperti panel surya semakin banyak digunakan di rumah-rumah modern...',
    //         ],
    //         'tips-menghemat-energi' => [
    //             'title' => 'Tips Menghemat Energi di Rumah Anda',
    //             'author' => 'John Doe',
    //             'category' => 'Green Living',
    //             'date' => 'May 5, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-9.jpg',
    //             'content' => 'Hemat energi di rumah Anda dengan langkah-langkah sederhana seperti mengganti lampu LED...',
    //         ],
    //         'perencanaan-pembangunan' => [
    //             'title' => 'Perencanaan Pembangunan Rumah yang Tepat',
    //             'author' => 'Sarah Lee',
    //             'category' => 'Planning',
    //             'date' => 'April 25, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-10.jpg',
    //             'content' => 'Perencanaan yang baik adalah langkah awal untuk memastikan pembangunan rumah berjalan lancar...',
    //         ],
    //         'perawatan-bangunan-tua' => [
    //             'title' => 'Perawatan Bangunan Tua: Antara Nilai Sejarah dan Keamanan',
    //             'author' => 'Jane Smith',
    //             'category' => 'Preservation',
    //             'date' => 'March 15, 2024',
    //             'image' => 'assets_3/assets/img/blog/blog-11.jpg',
    //             'content' => 'Bangunan tua memiliki nilai sejarah, tetapi memerlukan perawatan ekstra untuk tetap aman...',
    //         ],
    //     ];

    //     return view('tamplate_artikel.index', ['artikel' => $artikel]);
    // }
    public function index(){
        $category_widget = Category::all();
        $data = Posts::latest()->paginate(6);
        return view('admin.artikel.index', compact('data','category_widget'));
    }
    private $title = 'Artikel';

    public function list_artikel(Posts $posts)
{
    $category_widget = Category::all();
    $data['title'] = $this->title;
    $data = Posts::latest()->paginate(6); // Slug akan otomatis disertakan jika ada di tabel posts
    return view('tamplate_artikel.index', compact('data', 'category_widget'));
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

//      public function detail($slug)
// {
//     // Data artikel berdasarkan slug
//     $artikel = [
//         'pentingnya-struktur-bangunan' => [
//             'title' => 'Pentingnya Struktur Bangunan: Fondasi Kekuatan dan Keamanan Rumah Anda',
//             'author' => 'Admin',
//             'category' => 'Architecture',
//             'date' => 'January 2, 2025',
//             'image' => 'assets_3/assets/img/blog/blog-1.jpg',
//             'content' => 'Membangun rumah impian bukan hanya tentang desain yang menawan atau interior yang mewah...',
//         ],
//         'tips-membangun-rumah' => [
//             'title' => 'Tips Membangun Rumah Impian dengan Anggaran Terbatas',
//             'author' => 'John Doe',
//             'category' => 'Construction',
//             'date' => 'December 12, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-2.jpg',
//             'content' => 'Membangun rumah impian dengan anggaran terbatas bukanlah hal yang mustahil...',
//         ],
//         'mengapa-renovasi-diperlukan' => [
//             'title' => 'Mengapa Renovasi Rumah Diperlukan?',
//             'author' => 'Jane Smith',
//             'category' => 'Home Improvement',
//             'date' => 'November 20, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-3.jpg',
//             'content' => 'Renovasi rumah tidak hanya memperbaiki tampilan, tetapi juga meningkatkan fungsionalitas...',
//         ],
//         'panduan-memilih-material' => [
//             'title' => 'Panduan Memilih Material Bangunan Berkualitas',
//             'author' => 'Admin',
//             'category' => 'Construction',
//             'date' => 'October 15, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-4.jpg',
//             'content' => 'Material yang berkualitas adalah kunci dari bangunan yang kokoh dan tahan lama...',
//         ],
//         'keuntungan-rumah-minimalis' => [
//             'title' => 'Keuntungan Memiliki Rumah Bergaya Minimalis',
//             'author' => 'Sarah Lee',
//             'category' => 'Design',
//             'date' => 'September 10, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-5.jpg',
//             'content' => 'Rumah minimalis menjadi pilihan banyak orang karena desainnya yang simpel dan efisien...',
//         ],
//         'cara-merawat-rumah' => [
//             'title' => 'Cara Merawat Rumah Agar Tetap Nyaman dan Bersih',
//             'author' => 'John Doe',
//             'category' => 'Maintenance',
//             'date' => 'August 5, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-6.jpg',
//             'content' => 'Merawat rumah secara rutin adalah cara terbaik untuk menjaga kenyamanan dan kebersihan...',
//         ],
//         'desain-interior-modern' => [
//             'title' => 'Desain Interior Modern untuk Rumah Masa Kini',
//             'author' => 'Jane Smith',
//             'category' => 'Interior Design',
//             'date' => 'July 20, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-7.jpg',
//             'content' => 'Interior modern menonjolkan elemen sederhana, tetapi tetap elegan dan fungsional...',
//         ],
//         'pemanfaatan-energi-terbarukan' => [
//             'title' => 'Pemanfaatan Energi Terbarukan di Rumah',
//             'author' => 'Admin',
//             'category' => 'Green Living',
//             'date' => 'June 10, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-8.jpg',
//             'content' => 'Energi terbarukan seperti panel surya semakin banyak digunakan di rumah-rumah modern...',
//         ],
//         'tips-menghemat-energi' => [
//             'title' => 'Tips Menghemat Energi di Rumah Anda',
//             'author' => 'John Doe',
//             'category' => 'Green Living',
//             'date' => 'May 5, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-9.jpg',
//             'content' => 'Hemat energi di rumah Anda dengan langkah-langkah sederhana seperti mengganti lampu LED...',
//         ],
//         'perencanaan-pembangunan' => [
//             'title' => 'Perencanaan Pembangunan Rumah yang Tepat',
//             'author' => 'Sarah Lee',
//             'category' => 'Planning',
//             'date' => 'April 25, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-10.jpg',
//             'content' => 'Perencanaan yang baik adalah langkah awal untuk memastikan pembangunan rumah berjalan lancar...',
//         ],
//         'perawatan-bangunan-tua' => [
//             'title' => 'Perawatan Bangunan Tua: Antara Nilai Sejarah dan Keamanan',
//             'author' => 'Jane Smith',
//             'category' => 'Preservation',
//             'date' => 'March 15, 2024',
//             'image' => 'assets_3/assets/img/blog/blog-11.jpg',
//             'content' => 'Bangunan tua memiliki nilai sejarah, tetapi memerlukan perawatan ekstra untuk tetap aman...',
//         ],
//     ];

//     // Cek apakah slug ada dalam data artikel
//     if (!array_key_exists($slug, $artikel)) {
//         abort(404); // Jika tidak ditemukan, tampilkan halaman 404
//     }

//     return view('tamplate_artikel.detail', ['artikel' => $artikel[$slug], 'detail' => $artikel[$slug]]);

// }

public function detail($slug)
{
    // Fetch the article based on the slug
    $artikel = Posts::where('slug', $slug)->first();

    // Check if the article exists
    if (!$artikel) {
        abort(404, 'Article not found');
    }

    // Optionally fetch categories if needed for widgets
    $category_widget = Category::all();

    // Pass the article and widget data to the view
    return view('tamplate_artikel.detail', compact('artikel', 'category_widget'));
}
    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('admin.artikel.create', compact('category','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'content' => 'required',
            'content_2' => 'required',
            'gambar_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta_description' => 'nullable|string|max:500',
            'meta_keyword' => 'nullable|string|max:500',
            'tags' => 'nullable|array',
            'link_url' => 'nullable|url', // Validasi URL pertama
            'link_url_2' => 'nullable|url', // Validasi URL kedua
        ]);
    
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $new_gambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('public/uploads/posts/'), $new_gambar);
    
            // Proses gambar kedua jika ada
            $new_gambar_2 = null;
            if ($request->hasFile('gambar_2')) {
                $gambar_2 = $request->file('gambar_2');
                $new_gambar_2 = time() . '_2_' . $gambar_2->getClientOriginalName();
                $gambar_2->move(public_path('public/uploads/posts/'), $new_gambar_2);
            }
    
            // Ensure meta_description does not exceed the limit
            $meta_description = Str::limit($request->meta_description, 255);
    
            // dd($new_gambar_2);
            $post = Posts::create([
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'content_2' => $request->content_2,
                'meta_description' => $meta_description,
                'meta_keyword' => $request->meta_keyword,
                'gambar' => 'public/uploads/posts/' . $new_gambar,
                'gambar_2' => $new_gambar_2 ? 'public/uploads/posts/' . $new_gambar_2 : null,
                'link_url' => $request->link_url, // Simpan URL pertama
                'link_url_2' => $request->link_url_2, // Simpan URL kedua
                'slug' => Str::slug($request->judul),
                'users_id' => Auth::id(),
            ]);
    
            if ($request->tags) {
                $post->tags()->attach($request->tags);
            }
    
            // dd($post);
            return redirect('/artikel')->with('success', 'Postingan anda berhasil disimpan');
        }
    
        return back()->with('error', 'Gambar tidak valid');
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
        $post = Posts::findOrFail($id); // Fetch the specific post by ID
        $category = Category::all(); // Fetch all categories
        $tags = Tags::all(); // Fetch all tags

        return view('admin.artikel.edit', compact('post', 'category', 'tags'));
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
        $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'content' => 'required',
            // 'meta_description' => 'nullable|string|max:500',
            'meta_keyword' => 'nullable|string|max:500',
            'tags' => 'nullable|array',
        ]);



        $post = Posts::findorfail($id);

        if ($request->has('gambar')) {
            // $gambar = $request->gambar;
            // $new_gambar = time().$gambar->getClientOriginalName();
            // $gambar->move('public/uploads/posts/', $new_gambar);
            $gambar = $request->file('gambar');
            $new_gambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(public_path('public/uploads/posts/'), $new_gambar);

            $meta_description = Str::limit($request->meta_description, 255);
        $post_data = [
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'meta_description' => $meta_description,
            'meta_keyword' => $request->meta_keyword,
            'gambar' => 'public/uploads/posts/' . $new_gambar,
            'link_url' => $request->link_url, // Simpan URL pertama
            'link_url_2' => $request->link_url_2, // Simpan URL kedua
            'slug' => Str::slug($request->judul),
            'users_id' => Auth::id(),
        ];
        }
        else{
        $post_data = [
            'judul' => $request->judul,
            'category_id' =>  $request->category_id,
            'content' =>  $request->content,
            'slug' => Str::slug($request->judul)
        ];
        }


        $post->tags()->sync($request->tags);
        $post->update($post_data);


        return redirect()->route('artikel.index')->with('success','Postingan anda berhasil diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();

        return redirect()->back()->with('success','Post Berhasil Dihapus (Silahkan cek trashed post)');
    }
}
