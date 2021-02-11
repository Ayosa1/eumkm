@extends('auth.app')

@section('konten')
<main style="width: 100%; padding:15px; margin-top:10%; margin-bottom:10%;">
    <form method="POST" action="{{route('form2')}}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 col-sm-6" >
                <h1 class="h3 mb-3 fw-normal">Masukan Data UMKM</h1>
                <label for="inputNama_umkm" class="visually-hidden">Nama UMKM</label>
                <input type="text" id="inputName" class="form-control mb-2 {{ $errors->has('nama_umkm') ? 'is-invalid' : '' }}" name="nama_umkm" value="{{old('nama_umkm')}}" placeholder="Nama UMKM" required >
                @if ($errors->has('nama_umkm'))
                <div class="invalid-feedback">
                {{ $errors->first('nama_umkm') }}
                </div>
                @endif
                <label for="inputNamaPemilik" class="visually-hidden">Nama UMKM</label>
                <input type="text" id="inputNamaPemilik" class="form-control mb-2 {{ $errors->has('nama_pemilik') ? 'is-invalid' : '' }}" name="nama_pemilik" value="{{old('nama_pemilik')}}" placeholder="Nama Pemilik" required >
                @if ($errors->has('nama_pemilik'))
                <div class="invalid-feedback">
                {{ $errors->first('nama_pemilik') }}
                </div>
                @endif
                <label for="inputEmail" class="visually-hidden">Email</label>
                <input type="email" id="inputEmail" class="form-control mb-2 {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{old('email')}}" placeholder="Email  " required >
                @if ($errors->has('email'))
                <div class="invalid-feedback">
                {{ $errors->first('email') }}
                </div>
                @endif
                <label for="inputAlamat" class="visually-hidden">Alamat</label>
                <input type="text" id="inputAlamat" class="form-control mb-2 {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat" value="{{old('alamat')}}" placeholder="Nama Alamat" required >
                @if ($errors->has('alamat'))
                <div class="invalid-feedback">
                {{ $errors->first('alamat') }}
                </div>
                @endif
                <label for="inputNohp" class="visually-hidden">Nomor HP</label>
                <input type="text" id="inputnomor_hp" class="form-control mb-2 {{ $errors->has('nomor_hp') ? 'is-invalid' : '' }}" name="nomor_hp" value="{{old('nomor_hp')}}" placeholder="Nama Nomor HP" required >
                @if ($errors->has('nomor_hp'))
                <div class="invalid-feedback">
                {{ $errors->first('nomor_hp') }}
                </div>
                @endif
                <span style="font-size: 15px;
            font-family: sans-serif;
            color: gray; ">Foto Logo UMKM</span>
            <label for="inputfotologoumkm" class="visually-hidden">Foto Logo UMKM</label>
                <input style="margin-bottom:40px;" type="file" id="inputfotoproduk3" class="form-control  {{ $errors->has('foto_logo_umkm') ? 'is-invalid' : '' }}" name="foto_logo_umkm" value="{{old('foto_logo_umkm')}}" placeholder="Foto Logo UMKM" >
            @if ($errors->has('foto_logo_umkm'))
            <div class="invalid-feedback">
           {{ $errors->first('foto_logo_umkm') }}
          </div>
            @endif
            <label for="inputfacebook" class="visually-hidden">Link Facebook</label>
            <input type="text" id="facebook" class="form-control mb-2 {{ $errors->has('facebook') ? 'is-invalid' : '' }}" name="facebook" value="{{old('facebook')}}" placeholder="Link Facebook" required >
            @if ($errors->has('facebook'))
            <div class="invalid-feedback">
            {{ $errors->first('facebook') }}
            </div>
            @endif
            <label for="inputinstagram" class="visually-hidden">Instagram</label>
            <input type="text" id="instagram" class="form-control mb-2 {{ $errors->has('instagram') ? 'is-invalid' : '' }}" name="instagram" value="{{old('instagram')}}" placeholder="Nama Instagram" required >
            @if ($errors->has('instagram'))
            <div class="invalid-feedback">
            {{ $errors->first('instagram') }}
            </div>
            @endif
            <label for="inputwhatsApp" class="visually-hidden">WhatsApp</label>
            <input type="text" id="whatsapp" class="form-control mb-2 {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" name="whatsapp" value="{{old('whatsapp')}}" placeholder="Nomor WhatsApp" required >
            @if ($errors->has('whatsapp'))
            <div class="invalid-feedback">
            {{ $errors->first('whatsapp') }}
            </div>
            @endif
            <label for="id_kategori">Kategori UMKM</label>
            <select class="form-control mb-3" name="id_kategori" id="id_kategori">
                <option value="" >Klik Untuk Memilih kategori</option>
                <option value="1">Kuliner</option>
                <option value="2">Fashion</option>
                <option value="3">Cindera Mata</option>
                <option value="4">Agro Bisnis</option>
                <option value="5">Seni Kerajinan</option>
              </select>
        
        <button class="w-100 btn btn-lg btn-warning mb-3" type="submit">Simpan</button>
        </div>

        <div class="col-sm-6 col-md-6 d-flex align-self-center justify-content-center">
            <img src="{{ url('/images/logo/form1.jpg') }}" width="400px" height="350px" class="border-radius icon-tentangkami" alt="">
        </div>
     </div>
        
    </form>
</main>
@endsection