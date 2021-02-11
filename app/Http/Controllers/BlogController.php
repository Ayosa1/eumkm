<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog_umkm()
    {
        $blog_umkm = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
        ->paginate(5);
    
        return view('blog',compact('blog_umkm'));
    }

    public function blog_admin()
    {
        $blog_admin = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
        ->paginate(5);
    
        return view('admin.blog.index',compact('blog_admin'));
    }

    public function blog_kuliner()
    {
        $blog_kuliner = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('blog_umkm.id_kategori','=',1)
        ->paginate(5);

        return view('blogkuliner',compact('blog_kuliner'));
    }

    public function blog_fashion()
    {
        $blog_fashion = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('blog_umkm.id_kategori','=',2)
        ->paginate(5);

        return view('blogfashion',compact('blog_fashion'));
    }

    public function blog_cinmata()
    {
        $blog_cinmata = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('blog_umkm.id_kategori','=',3)
        ->paginate(5);

        return view('blogcinmata',compact('blog_cinmata'));
    }

    public function blog_kosmetik()
    {
        $blog_kosmetik = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('blog_umkm.id_kategori','=',4)
        ->paginate(5);

        return view('blogkosmetik',compact('blog_kosmetik'));
    }

    public function blog_argo()
    {
        $blog_argo = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('blog_umkm.id_kategori','=',5)
        ->paginate(5);

        return view('blogargo',compact('blog_argo'));
    }

    public function blog_seni()
    {
        $blog_seni = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('blog_umkm.id_kategori','=',6)
        ->paginate(5);

        return view('blogseni',compact('blog_seni'));
    }

    public function detail_blog($id)
    {
        $blog_detail = DB::table('blog_umkm')
            ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
            ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
            ->where('blog_umkm.id_blog','=',$id)
        ->get();

        return view('blogdetail', compact('blog_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $anggota = DB::table('anggota_umkm')
        ->get();   
        return view('admin.blog.create',compact('anggota'));
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
            'id_anggota' => 'required',
            'judul_blog' => 'required',
            'deskripsi_awal' => 'required',
            'deskripsi_lanjutan' => 'required',
            'id_kategori' => 'required',
            'tanggal_terbit' => 'required',
			'foto_blog' => 'image|mimes:jpeg,png,gif,webp|max:10000',
		]);

        $judul_blog = $request->judul_blog;
        $nama_foto = time();
        $foto_umkm = request()->file('foto_blog') ? request()->file('foto_blog')->store('public/images/foto_blog') : null;
        $foto_umkm = request()->file('foto_blog');
        $foto_umkmUrl = $foto_umkm->storeAs("public/images/foto_blog", "{$judul_blog}.{$nama_foto}.{$foto_umkm->extension()}");
        $foto_fix = $judul_blog.'.'.$nama_foto.'.'.$foto_umkm->extension();

        DB::table('blog_umkm')->insert([
            'id_anggota' => $request->id_anggota,
            'judul_blog' => $request->judul_blog,
            'deskripsi_awal' => $request->deskripsi_awal,
            'deskripsi_lanjutan' => $request->deskripsi_lanjutan,
            'id_kategori' => $request->id_kategori,
            'tanggal_terbit' => $request->tanggal_terbit,
            'foto_blog' => $foto_fix,
        ]);        

        return redirect()->route('blogadmin');
       
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
        $blogedit = DB::table('blog_umkm')
        ->join('anggota_umkm','blog_umkm.id_anggota','anggota_umkm.id_anggota')
        ->join('kategori_umkm','blog_umkm.id_kategori','kategori_umkm.id_kategori')
        ->where('blog_umkm.id_blog','=',$id)
        ->get();
        return view('admin.blog.edit', compact('blogedit'));
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
            'judul_blog' => 'required|min:3', 
            'deskripsi_awal' => 'required|min:3', 
            'deskripsi_lanjutan' => 'required|min:3', 
            'tanggal_terbit' => 'required', 
            // 'foto_logo_umkm' => 'required|mimes:jpeg,jpg,png|max:10000',
             
         ]);
         DB::table('blog_umkm')->where('id_blog',$id)->update([
             'judul_blog' => $request->judul_blog,
             'deskripsi_awal' => $request->deskripsi_awal,
             'deskripsi_lanjutan' => $request->deskripsi_lanjutan,
             'tanggal_terbit' => $request->tanggal_terbit,
            
            //  'foto_logo_umkm' => $request->foto_logo_umkm,
         ]);

         return redirect()->route('blogadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('blog_umkm')->where('id_blog',$id)->delete();

        return redirect()->route('blogadmin');
    }
}
