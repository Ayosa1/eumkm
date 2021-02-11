@extends('admin.master.app', ['title' => 'Produk UMKM'])

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produk UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk UMKM</li>
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
                <h3 class="card-title">Halaman Produk UMKM</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Index produk</th>
                    <th>Nama Produk 1</th>
                    {{-- <th>Deskripsi Produk 1</th> --}}
                    <th>Foto Produk 1</th>
                    <th>Nama Produk 2</th>
                    {{-- <th>Deskripsi Produk 2</th> --}}
                    <th>Foto Produk 2</th>
                    <th>Nama Produk 3</th>
                    {{-- <th>Deskripsi Produk 3</th> --}}
                    <th>Foto Produk 3</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($produk_admin as $produk)
                  <tr>
                    <td>{{ $produk->nama_index_produk }}</td>
                    <td>{{ $produk->nama_produk1 }}</td>
                    {{-- <td>{{ $produk->deskripsi_produk1 }}</td> --}}
                    <td><img src="{{ asset("storage/images/foto_produk/" . $produk->foto_produk1) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $produk->nama_produk2 }}</td>
                    {{-- <td>{{ $produk->deskripsi_produk2 }}</td> --}}
                    <td><img src="{{ asset("storage/images/foto_produk/" . $produk->foto_produk2) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $produk->nama_produk3 }}</td>
                    {{-- <td>{{ $produk->deskripsi_produk3 }}</td> --}}
                    <td><img src="{{ asset("storage/images/foto_produk/" . $produk->foto_produk3) }}" class="img-thumbnail" width="80px"></td>
                    <td>
                      <form action="{{ $produk->id_produk }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data produk?')">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    <td><a href="/admin/produk/edit/{{ $produk->id_produk }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
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