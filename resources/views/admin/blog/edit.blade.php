@extends('admin.master.app', ['title' => 'Edit Blog'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog UMKM</li>
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
                <h3 class="card-title">Edit Blog</h3>
              </div>
              <div class="card-body">
                @foreach ($blogedit as $blogedit)
                
                <div class="col-md-6">
                  <form action="/admin/blog/update/{{$blogedit->id_blog}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="judul_blog">Judul Blog</label>
                        <input type="text" class="form-control @error('judul_blog') is-invalid @enderror" name="judul_blog" id="judul_blog" value="{{ old('judul_blog') ?? $blogedit->judul_blog }}">
                        @error('judul_blog')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                          <label for="deskripsi_awal">Deskripsi Awal</label>
                          <textarea type="text" class="form-control @error('deskripsi_awal') is-invalid @enderror" name="deskripsi_awal" id="deskripsi_awal">{{ old('deskripsi_awal') ?? $blogedit->deskripsi_awal }}</textarea>
                          @error('deskripsi_awal')
                          <div class="invalid-feedback">
                            {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="deskripsi_lanjutan">Deskripsi Lanjutan</label>
                              <textarea type="text" class="form-control @error('deskripsi_lanjutan') is-invalid @enderror" name="deskripsi_lanjutan" id="deskripsi_lanjutan">{{ old('deskripsi_lanjutan') ?? $blogedit->deskripsi_lanjutan }}</textarea>
                              @error('deskripsi_lanjutan')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="kategori_umkm_id">Tanggal terbit</label><br>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input class="form-control" type="text" name="tanggal_terbit" id="date" value="{{ old('tanggal_terbit') ?? $blogedit->tanggal_terbit }}" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="foto_blog">Foto Blog: &nbsp</label>
                        <img src="{{ asset("/storage/images/foto_blog/" . $blogedit->foto_blog) }}" class="img-thumbnail" width="80px">
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection