@extends('admin.master.app', ['title' => 'Daftar Transaksi'])

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi UMKM</li>
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
                <h3 class="card-title">Halaman Transaksi UMKM</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{route('createtransaksi')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i>&nbsp Tambah Data</a>
                </div>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama UMKM</th>
                    <th>Nama Pembeli</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Produk</th>
                    <th>jumlah Beli</th>
                    <th>Harga</th>
                    <th>Harga Reseller</th>
                    <th>Harga Ongkir</th>
                    <th>Total Bayar</th>
                    <th>Margine</th>
                    <th>Metode Pembayaran</th>
                    <th>tempat COD</th>
                    <th>Kasir</th>
                    <th>Keterangan</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data_pembeli as $anggota)
                  <tr>
                    <td>{{ $anggota->nama_umkm }}</td>
                    <td>{{ $anggota->nama_pembeli }}</td>
                    <td>{{ $anggota->tanggal_transaksi }}</td>
                    <td>{{ $anggota->nama_produk1 }}</td>
                    <td>{{ $anggota->jumlah_beli1 }}</td>
                    <td>{{ $anggota->harga1 }}</td>
                    <td>{{ $anggota->harga_reseller }}</td>
                    <td>{{ $anggota->harga_ongkir }}</td>
                    <td>{{ $anggota->total_bayar }}</td>
                    <td>{{ $anggota->margine }}</td>
                    <td>{{ $anggota->metode_pembayaran }}</td>
                    <td>{{ $anggota->tempat_cod }}</td>
                    <td>{{ $anggota->kasir_transaksi }}</td>
                    <td>{{ $anggota->keterangan }}</td>
                    {{-- <td>{{ $anggota->deskripsi_awal }}</td>
                    <td>{{ $anggota->deskripsi_inti }}</td>
                    <td><img src="{{ asset("storage/" . $anggota->foto_logo_umkm) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $anggota->facebook }}</td>
                    <td>{{ $anggota->instagram }}</td>
                    <td>{{ $anggota->whatsapp }}</td> --}}
                    <td>
                      <form action="{{ $anggota->id_transaksi }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data Anggota?')">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    <td><a href="/admin/transaksi/edit/{{ $anggota->id_transaksi }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
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