@extends('admin.master.app', ['title' => 'Daftar Anggota'])

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
                <h3 class="card-title">Halaman Anggota UMKM</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama UMKM</th>
                    <th>Nama pemilik</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Nama Kategori</th>
                    <th>Nama Produk</th>
                    <th>Nama User</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                    <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($anggota_admin as $anggota)
                  <tr>
                    <td>{{ $anggota->nama_umkm }}</td>
                    <td>{{ $anggota->nama_pemilik }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>{{ $anggota->nomor_hp }}</td>
                    {{-- <td>{{ $anggota->deskripsi_awal }}</td>
                    <td>{{ $anggota->deskripsi_inti }}</td>
                    <td><img src="{{ asset("storage/" . $anggota->foto_logo_umkm) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $anggota->facebook }}</td>
                    <td>{{ $anggota->instagram }}</td>
                    <td>{{ $anggota->whatsapp }}</td> --}}
                    <td>{{ $anggota->nama_kategori ?? '-' }}</td>
                    <td>{{ $anggota->nama_index_produk?? '-' }}</td>
                    <td>{{ $anggota->name?? '-' }}</td>
                    <td>
                      <form action="{{ $anggota->id_anggota }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data Anggota?')">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    <td><a href="/admin/anggota/edit/{{ $anggota->id_anggota }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                    <td><a href="/detail/{{ $anggota->id }}" class="btn btn-success"><i class="fas fa-address-card"></i></a></td>
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