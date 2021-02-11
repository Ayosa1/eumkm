<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\anggota_umkm;

class kategoriProdukController extends Controller
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
            ->join('users','anggota_umkm.id_user','users.id')
            ->where('anggota_umkm.id_kategori','=',1)
        ->paginate(6);
        
        return view('kategorikuliner',compact('kategori_kuliner'));
    }

    public function kategori_fashion()
    {
        $kategori_fashion = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',2)
        ->paginate(3);

        return view('kategorifasion',compact('kategori_fashion'));
    }

    public function kategori_cinmata()
    {
        $kategori_cinmata = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',3)
        ->paginate(3);

        return view('kategoricinmata',compact('kategori_cinmata'));
    }

    public function kategori_kosmetik()
    {
        $kategori_kosmetik = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',4)
        ->paginate(3);

        return view('kategorikosmetik',compact('kategori_kosmetik'));
    }

    public function kategori_agro()
    {
        $kategori_argo = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',5)
        ->paginate(3);

        return view('kategoriargo',compact('kategori_argo'));
    }

    public function kategori_seni()
    {
        $kategori_seni = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',5)
        ->paginate(3);

        return view('kategorisenikerajinan',compact('kategori_seni'));
    }

    public function carikuliner(Request $request)
    {
	// menangkap data pencarian
	$carikuliner = $request->carikuliner;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$kategori_kuliner = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',1)
	        ->where('produk_umkm.nama_produk1','like',"%".$carikuliner."%")
	        ->paginate(5);
 
    	// mengirim data pegawai ke view index
	return view('kategorikuliner',compact('kategori_kuliner'));
 
    }

    public function carifashion(Request $request)
    {
	// menangkap data pencarian
	$carifashion = $request->carifashion;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$kategori_fashion = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',2)
	        ->where('produk_umkm.nama_produk1','like',"%".$carikuliner."%")
	        ->paginate(5);
 
    	// mengirim data pegawai ke view index
	return view('kategorifasion',compact('kategori_fashion'));
 
    }

    public function caricindera(Request $request)
    {
	// menangkap data pencarian
	$caricindera = $request->caricindera;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$kategori_cindera = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',3)
	        ->where('produk_umkm.nama_produk1','like',"%".$caricindera."%")
	        ->paginate(5);
 
    	// mengirim data pegawai ke view index
	return view('kategoricinderamata',compact('kategori_cindera'));
 
    }

    public function carikosmetik(Request $request)
    {
	// menangkap data pencarian
	$carikosmetik = $request->carikosmetik;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$kategori_kosmetik = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',4)
	        ->where('produk_umkm.nama_produk1','like',"%".$carikosmetik."%")
	        ->paginate(5);
 
    	// mengirim data pegawai ke view index
	return view('kategorikosmetik',compact('kategori_kosmetik'));
 
    }

    public function cariagro(Request $request)
    {
	// menangkap data pencarian
	$cariagro = $request->cariagro;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$kategori_agro = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',5)
	        ->where('produk_umkm.nama_produk1','like',"%".$cariagro."%")
	        ->paginate(5);
 
    	// mengirim data pegawai ke view index
	return view('kategoriagro',compact('kategori_kosmetik'));
 
    }

    public function cariseni(Request $request)
    {
	// menangkap data pencarian
	$cariseni = $request->cariseni;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$kategori_seni = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_kategori','=',6)
	        ->where('produk_umkm.nama_produk1','like',"%".$cariagro."%")
	        ->paginate(5);
 
    	// mengirim data pegawai ke view index
	return view('kategoriseni',compact('kategori_seni'));
 
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
