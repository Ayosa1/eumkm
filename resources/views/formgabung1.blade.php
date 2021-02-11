@extends('auth.app')

@section('konten')
<main style="width: 100%; padding:15px; margin-top:10%; margin-bottom:10%;">
    <form method="POST" action="{{route('form1')}}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 col-sm-6" >
                <?php 
                    $rand =rand(10, 99);    
                ?>
                <h1 class="h3 mb-3 fw-normal">Masukan Data Produk Anda</h1>
                <label for="inputProduk" class="visually-hidden">ID produk</label>
                <input type="text" id="inputProduk" class="form-control mb-2 {{ $errors->has('id_produk') ? 'is-invalid' : '' }}" name="id_produk" value="<?php echo $rand?>{{time()}}" placeholder="Kode Produk" required >
                @if ($errors->has('id_produk'))
                <div class="invalid-feedback">
                {{ $errors->first('id_produk') }}
                </div>
                @endif
                <label for="inputName" class="visually-hidden">Nama Produk</label>
                <input type="text" id="inputName" class="form-control mb-2 {{ $errors->has('nama_index_produk') ? 'is-invalid' : '' }}" name="nama_index_produk" value="{{old('nama_index_produk')}}" placeholder="Nama indek Produk" required >
                <p>Contoh nama indek produk : BasogrMS</p>
                @if ($errors->has('nama_index_produk'))
                <div class="invalid-feedback">
                {{ $errors->first('nama_index_produk') }}
                </div>
                @endif
                <label for="inputnamaproduk1" class="visually-hidden">Nama Produk 1</label>
                <input type="text" id="inputnamaproduk1" class="form-control mb-2 {{ $errors->has('nama_produk1') ? 'is-invalid' : '' }}" name="nama_produk1" value="{{old('nama_produk1')}}" placeholder="Nama Produk 1" required >
                @if ($errors->has('nama_produk1'))
                <div class="invalid-feedback">
           {{ $errors->first('nama_produk1') }}
          </div>
            @endif
            <label for="inputdeskripsiproduk1" class="visually-hidden">Deskripsi Produk 1</label>
                <input type="text" id="inputdeskripsiproduk1" class="form-control mb-2 {{ $errors->has('deskripsi_produk1') ? 'is-invalid' : '' }}" name="deskripsi_produk1" value="{{old('deskripsi_produk1')}}" placeholder="Deskripsi Produk 1" required >
            @if ($errors->has('deskripsi_produk1'))
            <div class="invalid-feedback">
           {{ $errors->first('deskripsi_produk1') }}
          </div>
            @endif
            <span style="font-size: 15px;
            font-family: sans-serif;
            color: gray; ">Foto Produk 1</span>
            <label for="inputfotoproduk1" class="visually-hidden">Foto Produk 1</label>
                <input style="margin-bottom:40px;" type="file" id="inputfotoproduk1" class="form-control  {{ $errors->has('foto_produk1') ? 'is-invalid' : '' }}" name="foto_produk1" value="{{old('foto_produk1')}}" placeholder="Foto Produk 1"  >
            @if ($errors->has('foto_produk1'))
            <div class="invalid-feedback">
           {{ $errors->first('foto_produk1') }}
          </div>
            @endif
            <label for="inputnamaproduk2" class="visually-hidden">Nama Produk 2</label>
                <input type="text" id="inputnamaproduk2" class="form-control mb-2 {{ $errors->has('nama_produk2') ? 'is-invalid' : '' }}" name="nama_produk2" value="{{old('nama_produk2')}}" placeholder="Nama Produk 2" required >
            @if ($errors->has('nama_produk2'))
            <div class="invalid-feedback">
           {{ $errors->first('nama_produk2') }}
          </div>
            @endif
            
            <label for="inputdeskripsiproduk2" class="visually-hidden">Deskripsi Produk 2</label>
                <input type="text" id="inputdeskripsiproduk2" class="form-control mb-2 {{ $errors->has('deskripsi_produk2') ? 'is-invalid' : '' }}" name="deskripsi_produk2" value="{{old('deskripsi_produk2')}}" placeholder="Deskripsi Produk 2" required >
            @if ($errors->has('deskripsi_produk2'))
            <div class="invalid-feedback">
           {{ $errors->first('deskripsi_produk2') }}
          </div>
            @endif
            <span style="font-size: 15px;
            font-family: sans-serif;
            color: gray; ">Foto Produk 2</span>
            <label for="inputfotoproduk2" class="visually-hidden">Foto Produk 2</label>
                <input style="margin-bottom:40px;" type="file" id="inputfotoproduk2" class="form-control  {{ $errors->has('foto_produk2') ? 'is-invalid' : '' }}" name="foto_produk2" value="{{old('foto_produk2')}}" placeholder="Foto Produk 2">
            @if ($errors->has('foto_produk2'))
            <div class="invalid-feedback">
           {{ $errors->first('foto_produk2') }}
          </div>
            @endif
            <label for="inputnamaproduk3" class="visually-hidden">Nama Produk 3</label>
                <input type="text" id="inputnamaproduk3" class="form-control mb-2 {{ $errors->has('nama_produk3') ? 'is-invalid' : '' }}" name="nama_produk3" value="{{old('nama_produk3')}}" placeholder="Nama Produk 3" required >
            @if ($errors->has('nama_produk3'))
            <div class="invalid-feedback">
           {{ $errors->first('nama_produk3') }}
          </div>
            @endif
            <label for="inputdeskripsiproduk3" class="visually-hidden">Deskripsi Produk 3</label>
                <input type="text" id="inputdeskripsiproduk3" class="form-control mb-2 {{ $errors->has('deskripsi_produk3') ? 'is-invalid' : '' }}" name="deskripsi_produk3" value="{{old('deskripsi_produk3')}}" placeholder="Deskripsi Produk 3" required >
            @if ($errors->has('deskripsi_produk3'))
            <div class="invalid-feedback">
           {{ $errors->first('deskripsi_produk3') }}
          </div>
            @endif
            <span style="font-size: 15px;
            font-family: sans-serif;
            color: gray; ">Foto Produk 3</span>
            <label for="inputfotoproduk3" class="visually-hidden">Foto Produk 3</label>
                <input style="margin-bottom:40px;" type="file" id="inputfotoproduk3" class="form-control  {{ $errors->has('foto_produk3') ? 'is-invalid' : '' }}" name="foto_produk3" value="{{old('foto_produk3')}}" placeholder="Foto Produk 3" >
            @if ($errors->has('foto_produk3'))
            <div class="invalid-feedback">
           {{ $errors->first('foto_produk3') }}
          </div>
            @endif
        
        <button class="w-100 btn btn-lg btn-warning mb-3" type="submit">Simpan</button>
        </div>

        <div class="col-sm-6 col-md-6 d-flex align-self-center justify-content-center">
            <img src="{{ url('/images/logo/form1.jpg') }}" width="400px" height="350px" class="border-radius icon-tentangkami" alt="">
        </div>
     </div>
        
    </form>
</main>
@endsection