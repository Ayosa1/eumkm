@extends('admin.master.app', ['title' => 'Tambah Transaksi'])

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi UMKM</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @include('alert')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Transaksi</h3>
              </div>
              <div class="card-body">
            <form action="{{url('/admin/transaksi/store')}}" method="POST" autocomplete="on" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="id_anggota">Anggota UMKM</label>
                            
                            <select class="form-control @error('id_anggota') is-invalid @enderror" name="id_anggota" id="id_anggota">
                            <option disabled selected>Choose one!</option>
                            @foreach ($data_anggota as $anggota)
                                <option value="{{ $anggota->id_anggota }}">{{ $anggota->nama_umkm }}</option>
                            @endforeach
                            </select>
                            @error('id_anggota')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_pembeli">Nama Pembeli</label>
                                <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" id="nama_pembeli" value="{{ old('nama_pembeli') ?? '' }}">
                                @error('nama_pembeli')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_transaksi">Tanggal Transaksi</label>
                                <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi" id="tanggal_transaksi" value="{{ old('tanggal_transaksi') ?? '' }}">
                                @error('tanggal_transaksi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="nama_produk1">Nama Produk </label>
                            <textarea type="text" class="form-control @error('nama_produk1') is-invalid @enderror" name="nama_produk1" id="nama_produk1" value="{{ old('nama_produk1') ?? '' }}"></textarea>
                            @error('nama_produk1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah_beli1">Jumlah Beli </label>
                            <textarea type="text" class="form-control @error('jumlah_beli1') is-invalid @enderror" name="jumlah_beli1" id="jumlah_beli1" value="{{ old('jumlah_beli1') ?? '' }}"></textarea>
                            @error('jumlah_beli1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="form-group mb-5">
                            <label for="harga1">Harga Barang </label>
                            <textarea type="text" class="form-control @error('harga1') is-invalid @enderror" name="harga1" id="harga1" value="{{ old('harga1') ?? '' }}"></textarea>
                            @error('harga1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-5">
                                <label for="harga_reseller">Harga Reseller</label>
                                <textarea type="text" class="form-control @error('harga_reseller') is-invalid @enderror" name="harga_reseller" id="harga_reseller" value="{{ old('harga_reseller') ?? '' }}"></textarea>
                                @error('harga_reseller')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            <div class="form-group">
                                <label for="harga_ongkir">Harga Ongkir</label>
                                <textarea type="text" class="form-control @error('harga_ongkir') is-invalid @enderror" name="harga_ongkir" id="harga_ongkir" value="{{ old('harga_ongkir') ?? '' }}"></textarea>
                                @error('harga_ongkir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="metode_pembayaran">Metode Pembayaran</label>
                                <select class="form-control @error('metode_pembayaran') is-invalid @enderror" name="metode_pembayaran" id="metode_pembayaran">
                                <option disabled selected>Choose one!</option>
                                    <option value="transfer">Transfer</option>
                                    <option value="cod">COD (Ketemuan)</option>
                                </select>
                                @error('metode_pembayaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tempat_cod">Tempat COD (Bila pembeli melakukan cod klo tidak abaikan)</label>
                                <input type="text" class="form-control @error('tempat_cod') is-invalid @enderror" name="tempat_cod" id="tempat_cod" value="{{ old('tempat_cod') ?? '' }}">
                                @error('tempat_cod')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kasir_transaksi">Pilih Kasir</label>
                                <select class="form-control @error('kasir_transaksi') is-invalid @enderror" name="kasir_transaksi" id="kasir_transaksi">
                                <option disabled selected>Choose one!</option>
                                    <option value="okeoc">OKE OC</option>
                                    <option value="smauii">SMA UII</option>
                                </select>
                                @error('kasir_transaksi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" value="{{ old('keterangan') ?? '' }}"></textarea>
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
              </div>
            </div>
        </div>
      </div>
    </section   
  </div>
@endsection