<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datapembeli()
    {
        $data_pembeli = DB::table('transaksi')
        ->join('users','transaksi.id_user','users.id')
        ->join('anggota_umkm','transaksi.id_anggota','anggota_umkm.id_anggota')
        ->where('transaksi.id_user','=',Auth::user()->id)
    ->get();

    return view('admin.transaksi.transaksipembeli',compact('data_pembeli'));
    }

    public function transaksirange()
    {
        return view('admin.kasir.smauii.requesttransaksi');
    }

    public function marginerange()
    {
        return view('admin.kasir.smauii.requestmargine');
    }

    public function rangetanggal(Request $request)
    {
        $request->session()->put('dari_tanggal', $request->dari_tanggal);
        $request->session()->put('sampai_tanggal', $request->sampai_tanggal);

        return redirect()->route('transaksiperbulan');
    }

    public function rangemargine(Request $request)
    {
        $request->session()->put('dr_tanggal', $request->dari_tanggal);
        $request->session()->put('sp_tanggal', $request->sampai_tanggal);

        return redirect()->route('marginebulanan');
    }
    
    
    public function transaksiperbulan(Request $request)
    {
        
        $transaksi_bulanan = DB::table('transaksi')
        ->whereBetween('tanggal_transaksi', [$request->session()->get('dari_tanggal'),$request->session()->get('sampai_tanggal')])
        ->where('transaksi.kasir_transaksi','=','smauii')
        ->selectRaw('sum(total_bayar) as total_transaksi')
        ->selectRaw("DATE_FORMAT(tanggal_transaksi, '%M %y') as mounth")
        ->groupBy('mounth')
        ->get(); 
        
        return view('admin.kasir.smauii.indexuii', compact('transaksi_bulanan'));
    }

    public function margineperbulan(Request $request)
    {
        $margine_bulanan = DB::table('transaksi')
        ->whereBetween('tanggal_transaksi', [$request->session()->get('dr_tanggal'),$request->session()->get('sp_tanggal')])
        ->where('transaksi.kasir_transaksi','=','smauii')
        ->selectRaw('sum(margine) as margine')
        ->selectRaw("DATE_FORMAT(tanggal_transaksi, '%M %y') as mounth")
        ->groupBy('mounth')
        ->get(); 
        
        return view('admin.kasir.smauii.margineuii', compact('margine_bulanan'));
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
    public function createtransaksi()
    {
        $data_anggota = DB::table('anggota_umkm')->get();
        return view('admin.transaksi.transaksicreate', compact('data_anggota'));
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
            'nama_pembeli' => 'required',
            'tanggal_transaksi' => 'required',
            'nama_produk1' => 'required',
            'jumlah_beli1' => 'required',
            'harga1' => 'required',
            'metode_pembayaran' => 'required',
            'kasir_transaksi' => 'required',
        ]);

        $harga = $request->harga1;
        $harga_ongkir = $request->harga_ongkir;
        $harga_reseller = $request->harga_reseller;

        $total_harga = $harga+$harga_ongkir;
        $margine = $harga-$harga_reseller;

        DB::table('transaksi')->insert([
            'id_user' => Auth::user()->id,
            'id_anggota' => $request->id_anggota,
            'nama_pembeli' => $request->nama_pembeli,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'nama_produk1' => $request->nama_produk1,
            'jumlah_beli1' => $request->jumlah_beli1,
            'harga1' => $request->harga1,
            'harga_ongkir' => $request->harga_ongkir,
            'harga_reseller' => $request->harga_reseller,
            'total_bayar' => $total_harga,
            'margine' => $margine,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tempat_cod' => $request->tempat_cod,
            'kasir_transaksi' => $request->kasir_transaksi,
            'keterangan' => $request->keterangan,
        ]);        


        return redirect()->route('transaksiadmin');
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
        $edittransaksi = DB::table('transaksi')
        ->where('transaksi.id_transaksi','=',$id)
        ->get();

        return view('admin.transaksi.edit',compact('edittransaksi'));
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
            'nama_pembeli' => 'required',
            'tanggal_transaksi' => 'required',
            'nama_produk1' => 'required',
            'jumlah_beli1' => 'required',
            'harga1' => 'required',
        ]);

       
        DB::table('transaksi')->where('id_transaksi',$id)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'nama_produk1' => $request->nama_produk1,
            'jumlah_beli1' => $request->jumlah_beli1,
            'harga1' => $request->harga1,
            'harga_reseller' => $request->harga_reseller,
            'harga_ongkir' => $request->harga_ongkir,
            'keterangan' => $request->keterangan,
        ]);        


        return redirect()->route('transaksiadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('transaksi')->where('id_transaksi',$id)->delete();

        return redirect()->route('transaksiadmin');
    }
}
