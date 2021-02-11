<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Eumkm</title>
    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link href="{{ url('/css/pastel.css') }}" rel="stylesheet">
<link href="{{ url('/css/style.css') }}" rel="stylesheet">
<link href="{{ url('/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb15521389.js" crossorigin="anonymous"></script>   
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->

  </head>
  <body style="background-color: #f8f8f8">
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white" style="padding: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item ">
              <a style="display: flex;padding: 15px 15px 10px;" class="navbar-brand" href="#" style="margin-right: 0;"><img src="{{ asset('/images/logo/logo.png') }}" width="40px;" height="30px" alt=""><h1 style="color: #0e0e0e;
                font-size: 24px;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin: 0;" >E-UMKM</h1></a>
            </li>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link hover-yellow" style="letter-spacing: 1px;
          font-size: 13px;
          text-transform: uppercase;
          padding: 15px 15px 10px;
          color: #0e0e0e;
          font-weight: 400;"  href="{{ asset('/') }}">Home</a></a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-yellow" style="letter-spacing: 1px;
          font-size: 13px;
          padding: 15px 15px 10px;
          text-transform: uppercase;
          color: #0e0e0e;
          font-weight: 400;" href="{{ asset('/tentang') }}">Tentang Kami</a></a>
        </li>
        <li class="nav-item dropdown">
          <a style="letter-spacing: 1px;
          font-size: 13px;
          padding: 15px 15px 10px;
          text-transform: uppercase;
          color: #0e0e0e;
          font-weight: 400; " class="nav-link dropdown-toggle hover-yellow" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mitra UMKM 
          </a>
          <ul class="dropdown-menu" style="border-color: white;" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item hover-yellow" href="{{ url('/mitrakuliner') }}">Kuliner</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/mitrafashion') }}">Fasion</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/mitracinmata') }}">Cindera Mata</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/mitrakosmetik') }}">Kosmetik</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/mitraargo') }}">Argo Bisnis</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/mitraseni') }}">Seni Kerajinan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a style="letter-spacing: 1px;
          font-size: 13px;
          padding: 15px 15px 10px;
          text-transform: uppercase;
          color: #0e0e0e;
          font-weight: 400;" class="nav-link dropdown-toggle hover-yellow" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori Produk
          </a>
          <ul class="dropdown-menu" style="border-color: white;" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item hover-yellow" href="{{ url('/kategorikuliner') }}">Kuliner</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/kategorifashion') }}">Fasion</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/kategoricinmata') }}">Cindera Mata</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/kategorikosmetik') }}">Kosmetik</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/kategoriargo') }}">Argo Bisnis</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('/kategoriseni') }}">Seni Kerajinan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a style="letter-spacing: 1px;
          font-size: 13px;
          padding: 15px 15px 10px;
          text-transform: uppercase;
          color: #0e0e0e;
          font-weight: 400;" class="nav-link hover-yellow" href="{{ asset('/blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a style="letter-spacing: 1px;
          font-size: 13px;
          padding: 15px 15px 10px;
          text-transform: uppercase;
          color: #0e0e0e;
          font-weight: 400;" class="nav-link hover-yellow" href="{{ asset('/gabung') }}">Gabung</a>
        </li>
        <li class="nav-item">
          <a style="letter-spacing: 1px;
          font-size: 13px;
          padding: 15px 15px 10px;
          text-transform: uppercase;
          color: #0e0e0e;
          font-weight: 400;" class="nav-link hover-yellow"  href="{{ asset('/kontak') }}">Kontak</a>
        </li>
        @if (Auth::check())
        <li class="nav-item dropdown">
          <a style="letter-spacing: 1px;
          font-size: 13px;
          padding: 15px 15px 10px;
          text-transform: uppercase;
          color: #0e0e0e;
          font-weight: 400;" class="nav-link dropdown-toggle hover-yellow" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <ul class="dropdown-menu" style="border-color: white;" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item hover-yellow disabled">Hello {{Auth::user()->name}}</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('detailacount') }}">Profile</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ url('dataumkm') }}">Detail UMKM</a></li>
            <li><a class="dropdown-item hover-yellow" href="{{ route('logout') }}">Log Out</a></li>
          </ul>
        </li>
        @endif
        
      </ul>
        </div>
      </div>
    </nav> --}}
    <div class="container">
@yield('konten')

</div>

  </body>
</html>