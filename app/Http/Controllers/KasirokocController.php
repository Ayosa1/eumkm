<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KasirokocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaksirange()
    {
        return view('admin.kasir.okeoc.requesttransaksi');
    }

    public function marginerange()
    {
        return view('admin.kasir.okeoc.requestmargine');
    }

    public function rangetanggal(Request $request)
    {
        $request->session()->put('dari_tanggal', $request->dari_tanggal);
        $request->session()->put('sampai_tanggal', $request->sampai_tanggal);

        return redirect()->route('transaksiperbulanokoc');
    }

    public function rangemargine(Request $request)
    {
        $request->session()->put('dr_tanggal', $request->dari_tanggal);
        $request->session()->put('sp_tanggal', $request->sampai_tanggal);

        return redirect()->route('marginebulananokoc');
    }
    
    
    public function transaksiperbulan(Request $request)
    {
        
        $transaksi_bulanan = DB::table('transaksi')
        ->whereBetween('tanggal_transaksi', [$request->session()->get('dari_tanggal'),$request->session()->get('sampai_tanggal')])
        ->where('transaksi.kasir_transaksi','=','okeoc')
        ->selectRaw('sum(total_bayar) as total_transaksi')
        ->selectRaw("DATE_FORMAT(tanggal_transaksi, '%M %y') as mounth")
        ->groupBy('mounth')
        ->get(); 
        
        return view('admin.kasir.okeoc.indexokeoc', compact('transaksi_bulanan'));
    }

    public function margineperbulan(Request $request)
    {
        $margine_bulanan = DB::table('transaksi')
        ->whereBetween('tanggal_transaksi', [$request->session()->get('dr_tanggal'),$request->session()->get('sp_tanggal')])
        ->where('transaksi.kasir_transaksi','=','okeoc')
        ->selectRaw('sum(margine) as margine')
        ->selectRaw("DATE_FORMAT(tanggal_transaksi, '%M %y') as mounth")
        ->groupBy('mounth')
        ->get(); 
        
        return view('admin.kasir.okeoc.margineokeoc', compact('margine_bulanan'));
    }

    public function index()
    {
        //
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
