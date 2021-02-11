@extends('admin.master.app', ['title' => 'Edit Transaksi'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Transaksi</li>
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
                <h3 class="card-title">Edit Data Transaksi</h3>
              </div>
              <div class="card-body">
                
                <div class="col-md-6">
                  @foreach ($edittransaksi as $kategori)
                  <form action="/admin/transaksi/update/{{$kategori->id_transaksi}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_pembeli">Nama Pembeli</label>
                            <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" id="nama_pembeli" value="{{ old('nama_pembeli') ??  $kategori->nama_pembeli }}">
                            @error('nama_pembeli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_transaksi">Tanggal Transaksi</label>
                            <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi" id="tanggal_transaksi" value="{{ old('tanggal_transaksi') ?? $kategori->tanggal_transaksi }}">
                            @error('tanggal_transaksi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="nama_produk1">Nama Produk </label>
                        <input type="text" class="form-control @error('nama_produk1') is-invalid @enderror" name="nama_produk1" id="nama_produk1" value="{{ old('nama_produk1') ?? $kategori->nama_produk1 }}">
                        @error('nama_produk1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_beli1">Jumlah Beli </label>
                        <input type="text" class="form-control @error('jumlah_beli1') is-invalid @enderror" name="jumlah_beli1" id="jumlah_beli1" value="{{ old('jumlah_beli1') ?? $kategori->jumlah_beli1 }}">
                        @error('jumlah_beli1')
                            <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="form-group mb-5">
                        <label for="harga1">Harga Barang </label>
                        <input type="text" class="form-control @error('harga1') is-invalid @enderror" name="harga1" id="harga1" value="{{ old('harga1') ?? $kategori->harga1 }}">
                        @error('harga1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group mb-5">
                            <label for="harga_reseller">Harga Reseller</label>
                            <input type="text" class="form-control @error('harga_reseller') is-invalid @enderror" name="harga_reseller" id="harga_reseller" value="{{ old('harga_reseller') ?? $kategori->harga_reseller }}">
                            @error('harga_reseller')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="form-group">
                            <label for="harga_ongkir">Harga Ongkir</label>
                            <input type="text" class="form-control @error('harga_ongkir') is-invalid @enderror" name="harga_ongkir" id="harga_ongkir" value="{{ old('harga_ongkir') ?? $kategori->harga_ongkir }}">
                            @error('harga_ongkir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" value="{{ old('keterangan') ?? $kategori->keterangan }}">
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection