<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\anggota_umkm;
use App\kategori_umkm;
use App\produk_umkm;
use cookie;
use Auth;
use session;
use DB;
use Carbon\Carbon;
use explode;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view('login');
    }

    public function getregister()
    {
        return view('register');
    }

    public function postlogin(Request $request)
    {

        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }

        return redirect()->route('welcome');
    }

    

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|min:4',
            'email'=>'required|email|unique:users',
            'level'=>'required',
            'kasir'=>'required',
            'password'=> 'required|min:5|confirmed'
        ]);
        $leveluser = 'user';

       User::create([
           'name' => $request->name,
           'email' => $request->email,
           'level' => $request->level,
           'kasir' => $request->kasir,
           'password'=> bcrypt($request->password)
       ]);

       return redirect()->route('login');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('welcome');
    }

    public function getuser()
    {
        $getuser = User::where('id', Auth::user()->id)->first();

        return view('detailacount',compact('getuser'));

        
    }

    public function updateuser(Request $request)
    {

        $this->validate($request, [
            'password' => 'confirmed',
        ]);
        $getuser = User::where('id', Auth::user()->id)->first();
        $getuser->name = $request->name;
        $getuser->email = $request->email;
        $getuser->alamat = $request->alamat;
        $getuser->hobi = $request->hobi;
        $getuser->tanggal_lahir = $request->tanggal_lahir;
        $getuser->instagram = $request->instagram;
        if(!empty($request->password))
        {
            $getuser->password = Hash::make($request->password);
        }
        $getuser->update();

        return redirect('detailacount');
    }

    public function user_produk()
    {
        $user = Auth::user()->id;
        $user_produk = DB::table('anggota_umkm')
            ->join('users','anggota_umkm.id_user','users.id')
            ->join('produk_umkm','anggota_umkm.id_produk','produk_umkm.id_produk')
            ->join('kategori_umkm','anggota_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('anggota_umkm.id_user','=', $user)
            ->get();

            // if ($user_produk->isEmpty()) {
            //     return 'data kosong';
            // }

            return view('detailuserumkm',compact('user_produk'));
    }

    public function cek_anggota()
    {
        $cek_anggota = DB::table('anggota_umkm')->get();
        return view('layout.app', compact('cek_anggota'));
    }

    
}
