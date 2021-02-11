@extends('admin.master.app', ['title' => 'Daftar Margin Perbulan'])

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Margin Perbulan UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Margine Perbulan UMKM</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @include('alert')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Halaman margine Perbulan</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <a href="{{route('requestmargine')}}">
                  <button class="btn btn-primary mb-3">Kembali</button>
                </a>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Bulan</th>
                    <th>Total Margine Perbulan</th>
                    <th>Hasil SMAUII</th>
                    <th>Hasil Pengembang</th>
                    <th>Donasi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($margine_bulanan as $kategori)
                  <?php
                    $margine = $kategori->margine;
                    $hasil_smauii = $margine * 0.40;
                    $hasil_pengembang = $margine * 0.50;
                    $hasil_donasi = $margine * 0.10;
                  ?>
                  <tr>
                    <td>{{ $kategori->mounth }}</td>
                    <td>{{ $kategori->margine }}</td>
                    <td>{{ $hasil_smauii }}</td>
                    <td>{{ $hasil_pengembang }}</td>
                    <td>{{ $hasil_donasi }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection