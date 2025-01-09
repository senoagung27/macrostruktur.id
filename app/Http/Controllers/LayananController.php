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
            'description' => 'Detail informasi mengenai Bangunan Gedung.',
        ],
        'rumah-tinggal-ruko' => [
            'title' => 'Rumah Tinggal/Ruko',
            'description' => 'Detail informasi mengenai Rumah Tinggal/Ruko.',
        ],
        'bangunan-gudang' => [
            'title' => 'Bangunan Gudang',
            'description' => 'Detail informasi mengenai Bangunan Gudang.',
        ],
        'assesment' => [
            'title' => 'Assesment',
            'description' => 'Detail informasi mengenai Assesment.',
        ],
        'bim-tekla-rab' => [
            'title' => 'BIM, Tekla, RAB',
            'description' => 'Detail informasi mengenai BIM, Tekla, RAB.',
        ],
        'ded-arsitek-mep' => [
            'title' => 'DED Arsitek, MEP',
            'description' => 'Detail informasi mengenai DED Arsitek, MEP.',
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
