@extends('layout.app')

@section('content')
<main style="width: 100%; padding:15px; margin-top:10%; margin-bottom:10%;">
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 d-flex align_auth_image">
                <img class="mb-4 ukuran_logo" src="{{ asset('images/logo/logo.png') }}" alt="" >
            </div>
            <div class="col-md-6  align_auth_form margin_login">
        <h1 class="h3 mb-3 fw-normal">Login EUMKM</h1>
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="email" id="inputEmail" class="form-control mb-2" name="email" value="{{old('email')}}" placeholder="Email address" required autofocus>
        {{-- @if ($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
          </div>
        @endif --}}
        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-2 " style="margin-bottom: 23px;" name="password" placeholder="Password" required>
        {{-- @if ($errors->has('password'))
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
          </div>
        @endif --}}
        <button class="w-100 btn btn-lg btn-warning " style="margin-bottom: 23px;" type="submit">Login</button>
        <p style="margin-bottom: 0;">Anda belum punya acount? silahkan klik</p>
        <a style="text-decoration: none !important;color: blue;" href="{{ url('/register') }}">Register</a>
    </div>
    </div>
    </form>
</main>
@endsection