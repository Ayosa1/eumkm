@extends('admin.master.app', ['title' => 'Tambah Kategori'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SDM E-UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SDM E-UMKM</li>
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
                <h3 class="card-title">Tambah SDM</h3>
              </div>
              <div class="card-body">
                <div class="col-md-6">
                    <form action="{{url('/admin/sdm/store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama lengkap</label>
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') ?? '' }}">
                            @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="jabatan">Pilih Jabatan</label>
                          <select class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan">
                          <option disabled selected>Choose one!</option>
                              <option value="Founder">Founder</option>
                              <option value="CEO">CEO</option>
                              <option value="CTO">CTO</option>
                              <option value="karyawan">karyawan</option>
                          </select>
                          @error('jabatan')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                      <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="{{ old('alamat') ?? '' }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="wa">wa</label>
                        <input type="text" class="form-control @error('wa') is-invalid @enderror" name="wa" id="wa" value="{{ old('wa') ?? '' }}">
                        @error('wa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="nomor_rekening">Nomor Rekening</label>
                        <input type="text" class="form-control @error('nomor_rekening') is-invalid @enderror" name="nomor_rekening" id="nomor_rekening" value="{{ old('nomor_rekening') ?? '' }}">
                        @error('nomor_rekening')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="nama_bank">Nama bank</label>
                        <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" id="nama_bank" value="{{ old('nama_bank') ?? '' }}">
                        @error('nama_bank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="atas_nama">Atas Nama Nomor Rekening</label>
                        <input type="text" class="form-control @error('atas_nama') is-invalid @enderror" name="atas_nama" id="atas_nama" value="{{ old('atas_nama') ?? '' }}">
                        @error('atas_nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <hr>
                      <div class="form-group">
                        <p style="color: red;">(Untuk karyawan Tidak Perlu Mengisikan Ahli Waris)</p>
                        <label for="ahli_waris">Ahli Waris</label>
                        <input type="text" class="form-control @error('ahli_waris') is-invalid @enderror" name="ahli_waris" id="ahli_waris" value="{{ old('ahli_waris') ?? '' }}">
                        @error('ahli_waris')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="alamat_waris">Alamat Ahli Waris</label>
                        <input type="text" class="form-control @error('alamat_waris') is-invalid @enderror" name="alamat_waris" id="alamat_waris" value="{{ old('alamat_waris') ?? '' }}">
                        @error('alamat_waris')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="wa_waris">WA Waris</label>
                        <input type="text" class="form-control @error('wa_waris') is-invalid @enderror" name="wa_waris" id="wa_waris" value="{{ old('wa_waris') ?? '' }}">
                        @error('wa_waris')
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