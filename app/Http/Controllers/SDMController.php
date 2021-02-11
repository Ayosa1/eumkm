<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SDMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sdm = DB::table('sdm_umkm')->get();

        return view('admin.sdm.index', compact('sdm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sdm.create');
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
            'nama_lengkap' => 'required|min:3',
            'jabatan' => 'required',
            'alamat' => 'required|min:3',
            'wa' => 'required|min:3',
            'nomor_rekening' => 'required|min:3',
            'nama_bank' => 'required|min:3',
            'atas_nama' => 'required|min:3',
            'ahli_waris' => 'required|min:3',
            'alamat_waris' => 'required|min:3',
            'wa_waris' => 'required|min:3',
		]);

        DB::table('sdm_umkm')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'wa' => $request->wa,
            'nomor_rekening' => $request->nomor_rekening,
            'nama_bank' => $request->nama_bank,
            'atas_nama' => $request->atas_nama,
            'ahli_waris' => $request->ahli_waris,
            'alamat_waris' => $request->alamat_waris,
            'wa_waris' => $request->wa_waris,
        ]);        

        return redirect()->route('sdmadmin');
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
        $editsdm = DB::table('sdm_umkm')
        ->where('sdm_umkm.id_sdm','=',$id)
        ->get();

        return view('admin.sdm.edit',compact('editsdm'));
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
            'nama_lengkap' => 'required|min:3',
            'jabatan' => 'required',
            'alamat' => 'required|min:3',
            'wa' => 'required|min:3',
            'nomor_rekening' => 'required|min:3',
            'nama_bank' => 'required|min:3',
            'atas_nama' => 'required|min:3',
            'ahli_waris' => 'required|min:3',
            'alamat_waris' => 'required|min:3',
            'wa_waris' => 'required|min:3',
		]);

        DB::table('sdm_umkm')->where('id_sdm',$id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'wa' => $request->wa,
            'nomor_rekening' => $request->nomor_rekening,
            'nama_bank' => $request->nama_bank,
            'atas_nama' => $request->atas_nama,
            'ahli_waris' => $request->ahli_waris,
            'alamat_waris' => $request->alamat_waris,
            'wa_waris' => $request->wa_waris,
        ]);        

        return redirect()->route('sdmadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sdm_umkm')->where('id_sdm',$id)->delete();

        return redirect()->route('sdmadmin');
    }
}
