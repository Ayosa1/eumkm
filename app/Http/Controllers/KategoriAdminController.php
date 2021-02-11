<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KategoriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = DB::table('kategori_umkm')->get();

        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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
            'nama_kategori' => 'required',
		]);

        DB::table('kategori_umkm')->insert([
            'nama_kategori' => $request->nama_kategori,
        ]);        

        return redirect()->route('adminkategori');
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
        $kategoriedit = DB::table('kategori_umkm')
        ->where('kategori_umkm.id_kategori','=',$id)
        ->get();

        return view('admin.kategori.edit',compact('kategoriedit'));
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
            'nama_kategori' => 'required|min:3', 
            // 'foto_logo_umkm' => 'required|mimes:jpeg,jpg,png|max:10000',
             
         ]);
         DB::table('kategori_umkm')->where('id_kategori',$id)->update([
             'nama_kategori' => $request->nama_kategori,
            
            //  'foto_logo_umkm' => $request->foto_logo_umkm,
         ]);

         return redirect()->route('adminkategori');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('kategori_umkm')->where('id_kategori',$id)->delete();

        return redirect()->route('adminkategori');
    }
}
