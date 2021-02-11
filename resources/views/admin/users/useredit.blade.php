@extends('admin.master.app', ['title' => 'Edit USER'])

@section('content')

<script>
    $( ".selector" ).datepicker({
  dateFormat: "yyyy/mm/dd"
  }); 
  </script>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit USER</li>
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
                <h3 class="card-title">Edit USER</h3>
              </div>
              <div class="card-body">
                @foreach ($useredit as $item)
            <form action="/admin/user/userupdate/{{$item->id}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @endforeach   
                <div class="col-md-6">
                    @method('patch')
                    @csrf
                    @foreach ($useredit as $item)                       
                    <div class="form-group">
                        <label for="name">Nama </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $item->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin') ?? '' }}">
                            <option selected>Jenis Kelamin</option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                          @error('produk_umkm_id')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                    </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example@example.com" value="{{ old('email') ?? $item->email }}">
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                  <div class="form-group">
                      <label for="domisili">Domisili</label>
                      <input type="text" class="form-control @error('domisili') is-invalid @enderror" name="domisili" id="domisili" value="{{ old('domisili') ?? $item->domisili }}">
                      @error('domisili')
                      <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{$item->tanggal_lahir}}" id="website" />
                        @error('tanggal_lahir')
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
            @endforeach
        </div>
    </div>
    </section>
  </div>
@endsection