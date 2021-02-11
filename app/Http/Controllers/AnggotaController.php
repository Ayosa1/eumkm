<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota_umkm;
use DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota_admin = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->join('users','anggota_umkm.id_user','users.id')
        ->get();

        return view('admin.anggota.index',compact('anggota_admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota_create = DB::table('anggota_umkm')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->join('users','anggota_umkm.id_user','users.id')
        ->get();

        return view('admin.anggota.create',compact('anggota_create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_umkm' => 'required',
            'nama_pemilik' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'deskripsi_awal' => 'required',
            'deskripsi_inti' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'whatsapp' => 'required',
            'kategori_umkm_id' => 'required',
            'produk_umkm_id' => 'required',
			'foto_logo_umkm' => 'image|mimes:jpeg,png,gif,webp|max:2048',
		]);

        $nama_umkm = $request->nama_umkm;
        $nama_foto = time();
        $nama_produk1 = $request->nama_produk1;
        $foto_umkm = request()->file('foto_logo_umkm') ? request()->file('foto_logo_umkm')->store('public/images/foto_logo') : null;
        $foto_umkm = request()->file('foto_logo_umkm');
        $foto_umkmUrl = $foto_umkm->storeAs("public/images/foto_logo", "{$nama_umkm}.{$nama_foto}.{$foto_umkm->extension()}");
        $foto_fix = $nama_produk.'.'.$nama_foto.'.'.$foto_umkm->extension();

        DB::table('anggota_umkm')->insert([
            'nama_umkm' => $nama_umkm,
            'nama_pemilik' => $request->nama_pemilik,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
            'foto_logo_umkm' => $foto_fix,
            'facebook' => $request->facebook,
            'instagram' => 'https://www.instagram.com/'.$request->instagram,
            'whatsapp' => 'https://api.whatsapp.com/send?phone='.$request->whatsapp,
            'id_kategori' => $request->id_kategori,
            'id_produk' => $request->session()->get('id_produk'),
            'id_user' => $request->$id_user,
        ]);        
       
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
        $anggotaedit = DB::table('anggota_umkm')
        ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
        ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
        ->join('users','anggota_umkm.id_user','users.id')
        ->where('anggota_umkm.id_anggota','=',$id)
        ->get();
        return view('admin.anggota.edit', compact('anggotaedit'));
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
            'nama_umkm' => 'required|min:3', 
            'nama_pemilik' => 'required|min:3', 
            'email' => 'required|min:3', 
            'alamat' => 'required|min:3', 
            'nomor_hp' => 'required|min:3', 
            // 'foto_logo_umkm' => 'required|mimes:jpeg,jpg,png|max:10000',
            'facebook' => 'required', 
            'instagram' => 'required', 
            'whatsapp' => 'required', 
             
         ]);
         DB::table('anggota_umkm')->where('id_anggota',$id)->update([
             'nama_umkm' => $request->nama_umkm,
             'nama_pemilik' => $request->nama_pemilik,
             'email' => $request->email,
             'alamat' => $request->alamat,
             'nomor_hp' => $request->nomor_hp,
             'facebook' => $request->facebook,
             'instagram' => $request->instagram,
             'whatsapp' => $request->whatsapp,
            //  'foto_logo_umkm' => $request->foto_logo_umkm,
         ]);

         return redirect()->route('anggotaadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('anggota_umkm')->where('id_anggota',$id)->delete();

        return redirect()->route('anggotaadmin');
    }
}
