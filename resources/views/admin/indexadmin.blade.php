@extends('admin.master.app')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman Admin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <h8> Selamat Datang di halaman admin {{ Auth::user()->name }} </h8>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card p-3">
            <table class="table">
              <p>Data Induk UMKM</p>
              <tbody>
                <tr>
                  <td>Nama Perusahaan</td>
                  <td>:</td>
                  <td>E-UMKM</td>
                </tr>
                <tr>
                  <td>Alamat Perusahaan</td>
                  <td>:</td>
                  <td> Jl. A.M. Sangaji No:97 Petinggen, RT-26/RW-07 Kelurahan Karangwaru, Kecamatan Tegalrejo, Kota Yogyakarta, DI. Yogyakarta. Kode Pos: 55241</td>
                </tr>
                <tr>
                  <td>WA Perusahaan</td>
                  <td>:</td>
                  <td>0821-5713-3281</td>
                </tr>
                <tr>
                  <td>Nomor Rekening</td>
                  <td>:</td>
                  <td>794501004993539</td>
                </tr>
                <tr>
                  <td>Nama Bank</td>
                  <td>:</td>
                  <td>BRI</td>
                </tr>
                <tr>
                  <td>Nama Pemegang Rekening</td>
                  <td>:</td>
                  <td>Rifky Dermawan</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
