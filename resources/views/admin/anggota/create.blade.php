@extends('admin.master.app', ['title' => 'Tambah Anggota'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Anggota UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Anggota UMKM</li>
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
                <h3 class="card-title">Tambah Anggota</h3>
              </div>
              <div class="card-body">
                <div class="col-md-6">
                    <form action="/anggotas/store" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kategori_umkm_id">Kategori UMKM</label>
                            <select class="form-control @error('kategori_umkm_id') is-invalid @enderror" name="kategori_umkm_id" id="kategori_umkm_id">
                              <option disabled selected>Choose one!</option>
                                  <option value="1">Kuliner</option>
                                  <option value="2">fashion</option>
                                  <option value="3">Cindera Mata</option>
                                  <option value="4">Kosmetik</option>
                                  <option value="5">Agro</option>
                                  <option value="6">Seni kerajinan</option>
                            </select>
                              @error('kategori_umkm_id')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                        </div>
                        <div class="form-group">
                          <label for="produk_umkm_id">Produk UMKM</label>
                          <select class="form-control @error('produk_umkm_id') is-invalid @enderror" name="produk_umkm_id" id="produk_umkm_id">
                            <option disabled selected>Choose one!</option>
                            @foreach ($anggota_create as $produk)
                                <option value="{{ $produk->id_produk }}">{{ $produk->nama_index_produk }}</option>
                            @endforeach
                          </select>
                            @error('produk_umkm_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_umkm">Nama UMKM</label>
                            <input type="text" class="form-control @error('nama_umkm') is-invalid @enderror" name="nama_umkm" id="nama_umkm" value="{{ old('nama_umkm') ?? '' }}">
                            @error('nama_umkm')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="nama_pemilik">Nama Pemilik</label>
                          <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror" name="nama_pemilik" id="nama_pemilik" value="{{ old('nama_pemilik') ?? '' }}">
                          @error('nama_pemilik')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example@example.com" value="{{ old('email') ?? '' }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="{{ old('alamat') ?? '' }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">No Telp</label>
                            <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" id="nomor_hp" value="{{ old('nomor_hp') ?? '' }}">
                            @error('nomor_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group">
                          <label for="deskripsi_awal">Deskripsi Awal</label>
                          <input type="text" class="form-control @error('deskripsi_awal') is-invalid @enderror" name="deskripsi_awal" id="deskripsi_awal" value="{{ old('deskripsi_awal') ?? '' }}">
                          @error('deskripsi_awal')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                      </div>
                      <div class="form-group">
                        <label for="deskripsi_inti">Deskripsi Awal</label>
                        <input type="text" class="form-control @error('deskripsi_inti') is-invalid @enderror" name="deskripsi_inti" id="deskripsi_inti" value="{{ old('deskripsi_inti') ?? '' }}">
                        @error('deskripsi_inti')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="instagram">Instagram</label>
                      <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram" value="{{ old('instagram') ?? '' }}">
                      @error('instagram')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                  </div>
                        <div class="form-group">
                          <label for="facebook">Facebook</label>
                          <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook" value="{{ old('facebook') ?? '' }}">
                          @error('facebook')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                      </div>
                        <div class="form-group">
                          <label for="whatsapp">Whatsapp</label>
                          <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" id="whatsapp" value="{{ old('whatsapp') ?? '' }}">
                          @error('whatsapp')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                      </div>
                      <div class="form-group">
                        <label for="foto_logo_umkm">Logo UMKM: &nbsp</label>
                        <input type="file" name="foto_logo_umkm" id="foto_logo_umkm">
                        @error('foto_logo_umkm')
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