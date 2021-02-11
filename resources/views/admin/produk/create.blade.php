@extends('master.app', ['title' => 'Tambah Produk'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produk UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk UMKM</li>
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
                <h3 class="card-title">Tambah Produk</h3>
              </div>
              <div class="card-body">
                <div class="col-md-6">
                    <form action="/produks/store" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_index_produk">Nama Index Produk</label>
                            <input type="text" class="form-control @error('nama_index_produk') is-invalid @enderror" name="nama_index_produk" id="nama_index_produk" value="{{ old('nama_index_produk') ?? '' }}">
                            @error('nama_index_produk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="nama_produk1">Nama Produk 1</label>
                          <input type="text" class="form-control @error('nama_produk1') is-invalid @enderror" name="nama_produk1" id="nama_produk1" value="{{ old('nama_produk1') ?? '' }}">
                          @error('nama_produk1')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                        <div class="form-group">
                          <label for="deskripsi_produk1">Deskripsi Produk 1</label>
                          <textarea type="text" class="form-control @error('deskripsi_produk1') is-invalid @enderror" name="deskripsi_produk1" id="deskripsi_produk1" value="{{ old('deskripsi_produk1') ?? '' }}"></textarea>
                          @error('deskripsi_produk1')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="foto_produk1">Foto Produk 1: &nbsp</label>
                        <input type="file" name="foto_produk1" id="foto_produk1">
                        @error('foto_produk1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                      </div>
                      <div class="form-group">
                        <label for="nama_produk2">Nama Produk 2</label>
                        <input type="text" class="form-control @error('nama_produk2') is-invalid @enderror" name="nama_produk2" id="nama_produk2" value="{{ old('nama_produk2') ?? '' }}">
                        @error('nama_produk2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label for="deskripsi_produk2">Deskripsi Produk 2</label>
                        <textarea type="text" class="form-control @error('deskripsi_produk2') is-invalid @enderror" name="deskripsi_produk2" id="deskripsi_produk2" value="{{ old('deskripsi_produk2') ?? '' }}"></textarea>
                        @error('deskripsi_produk2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="foto_produk2">Foto Produk 2: &nbsp</label>
                      <input type="file" name="foto_produk2" id="foto_produk2">
                      @error('foto_produk2')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama_produk3">Nama Produk 1</label>
                      <input type="text" class="form-control @error('nama_produk3') is-invalid @enderror" name="nama_produk3" id="nama_produk3" value="{{ old('nama_produk3') ?? '' }}">
                      @error('nama_produk3')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
                    <div class="form-group">
                      <label for="deskripsi_produk3">Deskripsi_produk 3</label>
                      <textarea type="text" class="form-control @error('deskripsi_produk3') is-invalid @enderror" name="deskripsi_produk3" id="deskripsi_produk3" value="{{ old('deskripsi_produk3') ?? '' }}"></textarea>
                      @error('deskripsi_produk3')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="foto_produk3">Foto Produk 3: &nbsp</label>
                    <input type="file" name="foto_produk3" id="foto_produk3">
                    @error('foto_produk3')
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection