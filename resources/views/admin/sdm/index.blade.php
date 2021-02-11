@extends('admin.master.app', ['title' => 'Daftar SDM'])

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar SDM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SDM EUMKM</li>
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
                <h3 class="card-title">Halaman SDM EUMKM</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{route('sdmcreate')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i>&nbsp Tambah Data</a>
                </div>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>WA</th>
                    <th>Nomor Rekening</th>
                    <th>Nama Bank</th>
                    <th>Atas Nama</th>
                    <th>Ahli Waris</th>
                    <th>Alamat Waris</th>
                    <th>WA Waris</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 0;
                      $no = $i++;  
                    ?>
                  @foreach ($sdm as $item)
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->nama_lengkap }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->wa }}</td>
                    <td>{{ $item->nomor_rekening }}</td>
                    <td>{{ $item->nama_bank }}</td>
                    <td>{{ $item->atas_nama }}</td>
                    <td>{{ $item->ahli_waris }}</td>
                    <td>{{ $item->alamat_waris }}</td>
                    <td>{{ $item->wa_waris }}</td>
                    <td>
                      <form action="{{ $item->id_sdm }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data Anggota?')">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    <td><a href="/admin/sdm/edit/{{ $item->id_sdm }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
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