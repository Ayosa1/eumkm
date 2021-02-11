@extends('master.app-detail')
<!-- Main content -->
    <section class="content">
          <div class="col-12">
              <div class="card-header">
                <h3 class="card-title">Detail {{ $anggota->nama_umkm }}</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama UMKM</th>
                    <th>nama_pemilik</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Deskripsi Awal</th>
                    <th>Deskripsi Inti</th>
                    <th>Foto logo UMKM</th>
                    <th>Facebook</th>
                    <th>instagram</th>
                    <th>whatsapp</th>
                    <th>Nama Kategori</th>
                    <th>Nama Produk</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                    <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>{{ $anggota->nama_umkm }}</td>
                    <td>{{ $anggota->nama_pemilik }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>{{ $anggota->nomor_hp }}</td>
                    <td>{{ $anggota->deskripsi_awal }}</td>
                    <td>{{ $anggota->deskripsi_inti }}</td>
                    <td><img src="{{ asset("storage/" . $anggota->foto_logo_umkm) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $anggota->facebook }}</td>
                    <td>{{ $anggota->instagram }}</td>
                    <td>{{ $anggota->whatsapp }}</td>
                    <td>{{ $anggota->kategoriumkm->nama_kategori ?? '-' }}</td>
                    <td>{{ $anggota->produkumkm->nama_index_produk ?? '-' }}</td>
                    <td>
                    <form action="{{ $anggota->id }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data Anggota?')">
                      @method("delete")
                      @csrf
                      <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                    </td>                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="/anggotas/index" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp Kembali Ke Halaman Anggota</a>
                </div>
                    <td><a href="/anggotas/edit/{{ $anggota->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                    <td><a href="/anggotas/detail/{{ $anggota->id }}" class="btn btn-success"><i class="fas fa-address-card"></i></a></td>
                  </tr>
                  </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="/anggotas/index" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp Kembali Ke Halaman Anggota</a>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->