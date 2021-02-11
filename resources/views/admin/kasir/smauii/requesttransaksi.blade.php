@extends('admin.master.app', ['title' => 'Request Range Transaksi'])

@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Range Tanggal Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Range Tanggal Transaksi</li>
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
                <h3 class="card-title">Pilih range tanggal</h3>
              </div>
              <div class="card-body">
                <div class="col-md-6">
                    <form action="{{url('/admin/kasirsmauii/rangetanggal')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="dari_tanggal">Dari tanggal</label>
                            <input type="date" class="form-control @error('dari_tanggal') is-invalid @enderror" name="dari_tanggal" id="dari_tanggal" value="{{ old('dari_tanggal') ?? '' }}">
                            @error('dari_tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sampai_tanggal">Sampai tanggal</label>
                            <input type="date" class="form-control @error('sampai_tanggal') is-invalid @enderror" name="sampai_tanggal" id="sampai_tanggal" value="{{ old('sampai_tanggal') ?? '' }}">
                            @error('sampai_tanggal')
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