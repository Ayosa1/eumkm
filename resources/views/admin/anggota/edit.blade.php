@extends('admin.master.app', ['title' => 'Edit Anggota'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Anggota</li>
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
                <h3 class="card-title">Edit Anggota</h3>
              </div>
              @foreach ($anggotaedit as $anggota)
              <div class="card-body">
                <form action="/admin/anggota/update/{{$anggota->id_anggota}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                  <div class="col-md-6">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="foto_produk1">Logo UMKM: &nbsp</label>
                        <img src="{{ asset('/storage/images/foto_logo/'.$anggota->nama_umkm.$anggota->foto_logo_umkm) }}" class="img-thumbnail" width="80px">
                      </div>
                    <div class="form-group">
                      <label for="nama_umkm">Nama UMKM</label>
                        <input type="text" class="form-control @error('nama_umkm') is-invalid @enderror" name="nama_umkm" id="nama_umkm" value="{{ old('nama_umkm') ?? $anggota->nama_umkm }}">
                        @error('nama_umkm')
                        <div class="invalid-feedback">
                          {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="nama_pemilik">Nama Pemilik</label>
                            <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror" name="nama_pemilik" id="nama_pemilik" value="{{ old('nama_pemilik') ?? $anggota->nama_pemilik }}">
                      @error('nama_pemilik')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example@example.com" value="{{ old('email') ?? $anggota->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="{{ old('alamat') ?? $anggota->alamat }}">
                      @error('alamat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nomor_hp">No Telp</label>
                      <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" id="nomor_hp" value="{{ old('nomor_hp') ?? $anggota->nomor_hp }}">
                      @error('nomor_hp')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="instagram">Instagram</label>
                      <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram" value="{{ old('instagram') ?? $anggota->instagram }}">
                      @error('instagram')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="facebook">Facebook</label>
                      <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook" value="{{ old('facebook') ?? $anggota->facebook }}">
                    @error('facebook')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" id="whatsapp" value="{{ old('whatsapp') ?? $anggota->whatsapp }}">
                        @error('whatsapp')
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
              @endforeach
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection