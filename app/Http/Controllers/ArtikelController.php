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
    public function index()
    {
        $category_widget = Category::all();
        // $data = Posts::latest()->paginate(10);
        $data = Posts::get();
        return view('admin.artikel.index', compact('data', 'category_widget'));
        // $data = Posts::paginate(5);
        // return view('admin.artikel.index', compact('data'));
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
        return view('admin.artikel.create', compact('category', 'tags'));
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
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        'gambar_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        'meta_description' => 'nullable|string|max:500',
        'meta_keyword' => 'nullable|string|max:500',
        'tags' => 'nullable|array',
        'link_url' => 'nullable|url',
        'link_url_2' => 'nullable|url',
    ]);

    // Default nilai gambar adalah null
    $new_gambar = null;
    $new_gambar_2 = null;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $path = $gambar->store('public/uploads/posts');
        $new_gambar = base64_encode(file_get_contents(storage_path('app/' . $path)));
    }

    if ($request->hasFile('gambar_2')) {
        $gambar_2 = $request->file('gambar_2');
        $path_2 = $gambar_2->store('public/uploads/posts');
        $new_gambar_2 = base64_encode(file_get_contents(storage_path('app/' . $path_2)));
    }

    // Batasi meta_description jika ada
    $meta_description = $request->meta_description 
        ? Str::limit($request->meta_description, 500) 
        : null;

    // Simpan postingan ke database
    $post = Posts::create([
        'judul' => $request->judul,
        'category_id' => $request->category_id,
        'content' => $request->content,
        'content_2' => $request->content_2,
        'meta_description' => $meta_description,
        'meta_keyword' => $request->meta_keyword,
        'gambar' => $new_gambar,
        'gambar_2' => $new_gambar_2,
        'link_url' => $request->link_url,
        'link_url_2' => $request->link_url_2,
        'slug' => Str::slug($request->judul),
        'users_id' => Auth::id(),
    ]);

    // Jika ada tags, attach ke postingan
    if ($request->tags) {
        $post->tags()->attach($request->tags);
    }

    return redirect('/artikel')->with('success', 'Postingan anda berhasil disimpan');
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
        'content_2' => 'required',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        'gambar_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        'meta_description' => 'nullable|string|max:500',
        'meta_keyword' => 'nullable|string|max:500',
        'tags' => 'nullable|array',
        'link_url' => 'nullable|url',
        'link_url_2' => 'nullable|url',
    ]);

    $post = Posts::findorfail($id);

    $new_gambar = $post->gambar; // Default ke gambar lama
    $new_gambar_2 = $post->gambar_2; // Default ke gambar kedua lama

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $path = $gambar->store('public/uploads/posts');
        $new_gambar = base64_encode(file_get_contents(storage_path('app/' . $path)));
    }

    if ($request->hasFile('gambar_2')) {
        $gambar_2 = $request->file('gambar_2');
        $path_2 = $gambar_2->store('public/uploads/posts');
        $new_gambar_2 = base64_encode(file_get_contents(storage_path('app/' . $path_2)));
    }

    $meta_description = Str::limit($request->meta_description, 255);
    $post_data = [
        'judul' => $request->judul,
        'category_id' => $request->category_id,
        'content' => $request->content,
        'content_2' => $request->content_2,
        'meta_description' => $meta_description,
        'meta_keyword' => $request->meta_keyword,
        'gambar' => $new_gambar,
        'gambar_2' => $new_gambar_2,
        'link_url' => $request->link_url,
        'link_url_2' => $request->link_url_2,
        'slug' => Str::slug($request->judul),
        'users_id' => Auth::id(),
    ];

    $post->tags()->sync($request->tags);
    $post->update($post_data);

    return redirect()->route('artikel.index')->with('success', 'Postingan anda berhasil diupdate');
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

        return redirect()->back()->with('success', 'Post Berhasil Dihapus (Silahkan cek trashed post)');
    }
}
