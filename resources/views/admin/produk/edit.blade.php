@extends('admin.master.app', ['title' => 'Edit Produk'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Produk</li>
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
                <h3 class="card-title">Edit Produk</h3>
              </div>
              <div class="card-body">
                <div class="col-md-6">
                  @foreach ($produk_edit as $produk_edit)
                    <form action="/admin/produk/update/{{$produk_edit->id_produk}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                                  <label for="nama_produk1">Nama Produk 1</label>
                          <input type="text" class="form-control @error('nama_produk1') is-invalid @enderror" name="nama_produk1" id="nama_produk1" value="{{ old('nama_produk1') ?? $produk_edit->nama_produk1 }}">
                          @error('nama_produk1')
                          <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                          </div>
                              <div class="form-group">
                                <label for="deskripsi_produk1">Deskripsi Produk 1</label>
                                <textarea type="text" class="form-control @error('deskripsi_produk1') is-invalid @enderror" name="deskripsi_produk1" id="deskripsi_produk1">{{ old('deskripsi_produk1') ?? $produk_edit->deskripsi_produk1 }}</textarea>
                          @error('deskripsi_produk1')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="foto_produk1">Foto Produk 1: &nbsp</label>
                        <img src="{{ asset("/storage/images/foto_produk/" .$produk_edit->foto_produk1) }}" class="img-thumbnail" width="80px">
                      </div>
                      <div class="form-group">
                        <label for="nama_produk2">Nama Produk 2</label>
                        <input type="text" class="form-control @error('nama_produk2') is-invalid @enderror" name="nama_produk2" id="nama_produk2" value="{{ old('nama_produk2') ?? $produk_edit->nama_produk2 }}">
                        @error('nama_produk2')
                        <div class="invalid-feedback">
                          {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_produk2">Deskripsi Produk 2</label>
                      <textarea type="text" class="form-control @error('deskripsi_produk2') is-invalid @enderror" name="deskripsi_produk2" id="deskripsi_produk2">{{ old('deskripsi_produk2') ?? $produk_edit->deskripsi_produk2 }}</textarea>
                        @error('deskripsi_produk2')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="foto_produk2">Foto Produk 2: &nbsp</label>
                        <img src="{{ asset("/storage/images/foto_produk/" . $produk_edit->foto_produk2) }}" class="img-thumbnail" width="80px">
                    </div>
                    <div class="form-group">
                      <label for="nama_produk3">Nama Produk 3</label>
                      <input type="text" class="form-control @error('nama_produk3') is-invalid @enderror" name="nama_produk3" id="nama_produk3" value="{{ old('nama_produk3') ?? $produk_edit->nama_produk3 }}">
                      @error('nama_produk3')
                      <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="deskripsi_produk3">Deskripsi Produk 3</label>
                      <textarea type="text" class="form-control @error('deskripsi_produk3') is-invalid @enderror" name="deskripsi_produk3" id="deskripsi_produk3">{{ old('deskripsi_produk3') ?? $produk_edit->deskripsi_produk3 }}</textarea>
                      @error('deskripsi_produk3')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="foto_produk3">Foto Produk 3: &nbsp</label>
                    <img src="{{ asset("/storage/images/foto_produk/" . $produk_edit->foto_produk3) }}" class="img-thumbnail" width="80px">
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