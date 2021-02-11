@extends('layout.app')

@section('content')
<main style="width: 100%; padding:15px; margin-top:10%; margin-bottom:10%;">
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 col-sm-6 align_auth_image">
                <img class="mb-4 ukuran_logo" src="{{ asset('images/logo/logo.png') }}" alt=""  >
            </div>
            <div class="col-md-6 col-sm-6 align_auth_form" >
                <h1 class="h3 mb-3 fw-normal">Register EUMKM</h1>
                <a style="text-decoration: none; color: blue;" href="{{ route('login') }}">Saya sudah punya acount</a>
                <br><label for="inputName" class="visually-hidden">Name</label>
        <input type="text" id="inputName" class="form-control mb-2 {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{old('name')}}" placeholder="Name" required >
        @if ($errors->has('name'))
        <div class="invalid-feedback">
           {{ $errors->first('name') }}
          </div>
        @endif
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="email" id="inputEmail" class="form-control mb-2 {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{old('email')}}" placeholder="Email address" required autofocus>
        @if ($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
          </div>
        @endif
        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-2 {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
          </div>
        @endif
        <label for="inputPassword" class="visually-hidden">Confrim Password</label>
        <input type="password" id="inputPassword" class="form-control mb-2" name="password_confirmation" placeholder="Password Confirmation" required>
        <p class="mb-0">Pilih kasir pembayaran anda</p>
        <select name="kasir" class="form-control mb-2 form-control {{ $errors->has('kasir') ? 'is-invalid' : '' }}" required>
            <option>klik untuk memilih</option>
            <option value="okeoc">Oke OC</option>
            <option value="smauii">SMA UII</option>
          </select>
          <p class="mb-0">Anda ingin menjadi mitra atau pembeli?</p>
        <select name="level" style="margin-bottom: 23px;" class="form-control mb-2 form-control {{ $errors->has('kasir') ? 'is-invalid' : '' }}" required>
            <option>klik untuk memilih</option>
            <option value="user">Pembeli</option>
            <option value="umkm">Mitra</option>
          </select>
        <button style="margin-bottom: 23px;" class="w-100 btn btn-lg btn-warning mb-3" type="submit">Register</button><br>
        
            </div>
        </div>
        
    </form>
</main>
@endsection