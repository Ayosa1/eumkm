<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk_umkm;
use App\anggota_umkm;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('anggota_umkm')
        ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
        ->get();

        return view('list',compact('produk'));
    }

    public function indexproduk()
    {
        $produk_admin = DB::table('produk_umkm')
        ->get();

        return view('admin.produk.index',compact('produk_admin'));
    }


    public function detail_umkm($id)
    {
        $detail_umkm = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_anggota','=',$id)
        ->get();

        return view('umkmview',compact('detail_umkm'));
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
        $produk_edit = DB::table('produk_umkm')
        ->where('produk_umkm.id_produk','=',$id)
        ->get();

        return view('admin.produk.edit',compact('produk_edit'));
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
        $this->validate($request, [
           'nama_produk1' => 'required|min:3', 
           'deskripsi_produk1' => 'required|min:3', 
           'nama_produk2' => 'required|min:3', 
           'deskripsi_produk2' => 'required|min:3', 
           'nama_produk3' => 'required|min:3', 
           'deskripsi_produk3' => 'required|min:3', 
            
        ]);
        DB::table('produk_umkm')->where('id_produk',$id)->update([
			'nama_produk1' => $request->nama_produk1,
			'deskripsi_produk1' => $request->deskripsi_produk1,
			'nama_produk2' => $request->nama_produk2,
			'deskripsi_produk2' => $request->deskripsi_produk2,
			'nama_produk3' => $request->nama_produk3,
			'deskripsi_produk3' => $request->deskripsi_produk3,
		]);

        return redirect()->route('produkadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('produk_umkm')->where('id_produk',$id)->delete();

        return redirect()->route('produkadmin');
    }
}
