@extends('master.app-detail')
    <section class="content">
          <div class="col-12">
              <div class="card-header">
                <h3 class="card-title">Detail {{ $produkumkm->nama_index_produk }}</h3>
              </div>
              <!-- /.card-header harus membuat model fillable--> 
              <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="/produks/create" class="btn btn-primary"><i class="fas fa-plus-square"></i>&nbsp Tambah Data</a>
                </div>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Index produk</th>
                    <th>Nama Produk 1</th>
                    <th>Deskripsi Produk 1</th>
                    <th>Foto Produk 1</th>
                    <th>Nama Produk 2</th>
                    <th>Deskripsi Produk 2</th>
                    <th>Foto Produk 2</th>
                    <th>Nama Produk 3</th>
                    <th>Deskripsi Produk 3</th>
                    <th>Foto Produk 3</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>{{ $produkumkm->nama_index_produk }}</td>
                    <td>{{ $produkumkm->nama_produk1 }}</td>
                    <td>{{ $produkumkm->deskripsi_produk1 }}</td>
                    <td><img src="{{ asset("storage/" . $produkumkm->foto_produk1) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $produkumkm->nama_produk2 }}</td>
                    <td>{{ $produkumkm->deskripsi_produk2 }}</td>
                    <td><img src="{{ asset("storage/" . $produkumkm->foto_produk2) }}" class="img-thumbnail" width="80px"></td>
                    <td>{{ $produkumkm->nama_produk3 }}</td>
                    <td>{{ $produkumkm->deskripsi_produk3 }}</td>
                    <td><img src="{{ asset("storage/" . $produkumkm->foto_produk3) }}" class="img-thumbnail" width="80px"></td>
                    <td>
                      <form action="{{ $produkumkm->id }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data produk?')">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                    <td><a href="/produks/edit/{{ $produkumkm->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                  </tr>
                  </tbody>
                </table>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="/produks/index" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp Kembali Ke Halaman Produk</a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->