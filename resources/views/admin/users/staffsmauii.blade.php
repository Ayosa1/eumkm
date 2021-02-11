@extends('admin.master.app', ['title' => 'Staff SMA UII '])

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Staff SMA UII</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Staff SMA UII</li>
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
                <h3 class="card-title">Halaman Staff SMA UII</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{route('smauiicreate')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i>&nbsp Tambah Data</a>
                </div>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Staff</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Domisili</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($staff1 as $anggota)
                  <tr>
                    <td>{{ $anggota->name }}</td>
                    <td>{{ $anggota->jenis_kelamin }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td>{{ $anggota->domisili }}</td>
                    {{-- <td>{{ $anggota->deskripsi_awal }}</td>
                    <td>{{ $anggota->deskripsi_inti }}</td>
                    <td><img src="{{ asset("storage/" . $anggota->foto_logo_umkm) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $anggota->facebook }}</td>
                    <td>{{ $anggota->instagram }}</td>
                    <td>{{ $anggota->whatsapp }}</td> --}}
                    <td>
                      <form action="/admin/user/staff1delete/{{ $anggota->id }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data Anggota?')">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    <td><a href="/admin/user/staff1edit/{{ $anggota->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
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