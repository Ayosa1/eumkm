<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kategorimitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kategori_kuliner()
    {
        $kategori_kuliner = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',1)
        ->paginate(6);

        return view('mitrakuliner',compact('kategori_kuliner'));
    }

    public function kategori_fashion()
    {
        $kategori_fashion = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',2)
        ->paginate(6);

        return view('mitrafashion',compact('kategori_fashion'));
    }

    public function kategori_cinmata()
    {
        $kategori_cinmata = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',3)
        ->paginate(6);

        return view('mitracinmata',compact('kategori_cinmata'));
    }

    public function kategori_kosmetik()
    {
        $kategori_kosmetik = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',4)
        ->paginate(6);

        return view('mitrakuliner',compact('kategori_kosmetik'));
    }

    public function kategori_argo()
    {
        $kategori_argo = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',5)
        ->paginate(6);

        return view('mitraargo',compact('kategori_argo'));
    }

    public function kategori_seni()
    {
        $kategori_seni = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',5)
        ->paginate(6);

        return view('mitraseni',compact('kategori_seni'));
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
