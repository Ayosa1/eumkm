@extends('admin.master.app', ['title' => 'Daftar Blog'])

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
                <h3 class="card-title">Halaman Blog UMKM</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{route('createblog')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i>&nbsp Tambah Data</a>
                </div>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama UMKM</th>
                    <th>Judul Blog</th>
                    <th>Deskripsi Awal</th>
                    <th>Deskripsi Lanjutan</th>
                    <th>Kategori UMKM</th>
                    <th>Tanggal Terbit</th>
                    <th>Foto Blog</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($blog_admin as $blog)
                  <tr>
                    <td>{{ $blog->nama_umkm ?? '-' }}</td>
                    <td>{{ $blog->judul_blog }}</td>
                    <td>{{ $blog->deskripsi_awal }}</td>
                    <td>{{ $blog->deskripsi_lanjutan }}</td>
                    <td>{{ $blog->nama_kategori ?? '-' }}</td>
                    <td>{{ $blog->tanggal_terbit }}</td>
                    <td><img src="{{ asset("/storage/images/foto_blog/".$blog->foto_blog) }}" class="img-thumbnail" width="80px"></td>
                    <td>
                      <form action="{{ $blog->id_blog }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data blog?')">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    <td><a href="/admin/blog/edit/{{ $blog->id_blog }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
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