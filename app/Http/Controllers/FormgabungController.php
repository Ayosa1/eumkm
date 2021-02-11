<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk_umkm;
use DB;
use App\anggota_umkm;
use Auth;

class FormgabungController extends Controller
{
    public function GetProduk(Request $request)
    {
        return view('Formgabung1');
    }

    public function sukses(Request $request)
    {
        return view('successform');
    }

    public function GetUmkm(Request $request)
    {
        return view('Formgabung2');
    }

    public function PostProduk1(Request $request)
    {
        $this->validate($request, [
            'nama_index_produk'=>'required',
            'nama_produk1'=>'required|min:3',
            'deskripsi_produk1'=> 'required|min:5',
            'foto_produk1' => 'required|mimes:jpeg,jpg,png|max:10000',
            'nama_produk2'=>'min:3',
            'deskripsi_produk2'=> 'min:5',
            'foto_produk2' => 'mimes:jpeg,jpg,png|max:10000',
            'nama_produk3'=>'min:3',
            'deskripsi_produk3'=> 'min:5',
            'foto_produk3' => 'mimes:jpeg,jpg,png|max:10000',
        ]);


       $request->session()->put('id_produk', $request->id_produk);

       $nama_index = $request->nama_index_produk;
       
        $nama_foto1 = time();
        $nama_produk1 = $request->nama_produk1;
        $foto_umkm1 = request()->file('foto_produk1') ? request()->file('foto_produk1')->store('images/produk_umkm') : null;
        $foto_umkm1 = request()->file('foto_produk1');
        $foto_umkmUrl1 = $foto_umkm1->storeAs("public/images/foto_produk", "{$nama_produk1}.{$nama_foto1}.{$foto_umkm1->extension()}");
        $foto_fix1 = $nama_produk1.'.'.$nama_foto1.'.'.$foto_umkm1->extension();

        $nama_foto2 = time();
        $nama_produk2 = $request->nama_produk2;
        $foto_umkm2 = request()->file('foto_produk2') ? request()->file('foto_produk2')->store('images/produk_umkm') : null;
        $foto_umkm2 = request()->file('foto_produk2');
        $foto_umkmUrl2 = $foto_umkm2->storeAs("public/images/foto_produk", "{$nama_produk2}.{$nama_foto2}.{$foto_umkm2->extension()}");
        $foto_fix2 = $nama_produk2.'.'.$nama_foto2.'.'.$foto_umkm2->extension();

        $nama_foto3 = time();
        $nama_produk3 = $request->nama_produk3;
        $foto_umkm3 = request()->file('foto_produk3') ? request()->file('foto_produk3')->store('images/produk_umkm') : null;
        $foto_umkm3 = request()->file('foto_produk3');
        $foto_umkmUrl3 = $foto_umkm3->storeAs("public/images/foto_produk", "{$nama_produk3}.{$nama_foto3}.{$foto_umkm3->extension()}");
        $foto_fix3 = $nama_produk3.'.'.$nama_foto3.'.'.$foto_umkm3->extension();

       DB::table('produk_umkm')->insert([
           'id_produk' => $request->id_produk,
           'nama_index_produk' => 'produk_'.$nama_index,
           'nama_produk1' => $request->nama_produk1,
           'deskripsi_produk1'=> $request->deskripsi_produk1,
           'foto_produk1' => $foto_fix1,
           'nama_produk2' => $request->nama_produk2,
           'deskripsi_produk2'=> $request->deskripsi_produk2,
           'foto_produk2' =>  $foto_fix2,
           'nama_produk3' => $request->nama_produk3,
           'deskripsi_produk3'=> $request->deskripsi_produk3,
           'foto_produk3' => $foto_fix3
       ]);

       return redirect()->route('form2');
    }
    public function PostUmkm1(Request $request)
       {

        $this->validate($request, [
            'nama_umkm'=>'required',
            'nama_pemilik'=>'required|min:3',
            'email'=> 'required|email|unique:anggota_umkm',
            'alamat'=>'required|min:3',
            'nomor_hp'=>'required|min:3',
            'foto_logo_umkm' => 'required|mimes:jpeg,jpg,png|max:10000',
            'facebook'=>'min:3',
            'instagram'=>'required|min:3',
            'whatsapp'=>'required|min:3',
            'id_kategori' => 'required',
            
        ]);

        $id_user = Auth::user()->id;
        $nama_umkm = $request->nama_umkm;
        $nama_foto = time();
        $rand =rand(10, 99);
        $nama_produk1 = $request->nama_produk1;
        $foto_umkm = request()->file('foto_logo_umkm') ? request()->file('foto_logo_umkm')->store('public/images/foto_logo') : null;
        $foto_umkm = request()->file('foto_logo_umkm');
        $foto_umkmUrl = $foto_umkm->storeAs("public/images/foto_logo", "{$nama_umkm}.{$nama_foto}.{$foto_umkm->extension()}");
        $foto_fix = $nama_umkm.'.'.$nama_foto.'.'.$foto_umkm->extension();

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
            'id_user' => $id_user,
        ]);   
        
        return redirect()->route('sukses');
       }
}
