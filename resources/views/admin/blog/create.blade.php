@extends('admin.master.app', ['title' => 'Tambah Blog'])

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
  $('.cari').select2({
    placeholder: 'Cari...',
    ajax: {
      url: '/cari',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
            return {
              text: item.email,
              id: item.id
            }
          })
        };
      },
      cache: true
    }
  });

</script>
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
                <h3 class="card-title">Tambah Blog</h3>
              </div>
              <div class="card-body">
                <div class="col-md-6">
                    <form action="{{url('/admin/blog/store')}}" method="POST" autocomplete="on" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="id_anggota">Anggota UMKM</label>
                        
                        <select class="form-control @error('id_anggota') is-invalid @enderror" name="id_anggota" id="id_anggota">
                          <option disabled selected>Choose one!</option>
                          @foreach ($anggota as $anggota)
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
                            <label for="judul_blog">Judul Blog</label>
                            <input type="text" class="form-control @error('judul_blog') is-invalid @enderror" name="judul_blog" id="judul_blog" value="{{ old('judul_blog') ?? '' }}">
                            @error('judul_blog')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="deskripsi_awal">Deskripsi Awal</label>
                          <textarea type="text" class="form-control @error('deskripsi_awal') is-invalid @enderror" name="deskripsi_awal" id="deskripsi_awal" value="{{ old('deskripsi_awal') ?? '' }}"></textarea>
                          @error('deskripsi_awal')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="deskripsi_lanjutan">Deskripsi Lanjutan</label>
                        <textarea type="text" class="form-control @error('deskripsi_lanjutan') is-invalid @enderror" name="deskripsi_lanjutan" id="deskripsi_lanjutan" value="{{ old('deskripsi_lanjutan') ?? '' }}"></textarea>
                        @error('deskripsi_lanjutan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                        <div class="form-group">
                          <label for="id_kategori">Kategori UMKM</label>
                          <select class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori" id="id_kategori">
                            <option disabled selected>Choose one!</option>
                                <option value="1">Kuliner</option>
                                <option value="2">Fashion</option>
                                <option value="3">Cindera Mata</option>
                                <option value="4">Kosmetik</option>
                                <option value="5">Agro Bisnis</option>
                                <option value="6">Seni Kerajinan</option>
                          </select>
                            @error('id_kategori')
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
                          <input class="form-control" type="date" name="tanggal_terbit" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="foto_blog">Foto Blog: &nbsp</label>
                        <input type="file" name="foto_blog" id="foto_blog">
                        @error('foto_blog')
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