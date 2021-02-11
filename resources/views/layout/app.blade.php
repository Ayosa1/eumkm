<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <title>E-UMKM</title>
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb15521389.js" crossorigin="anonymous"></script>   
    <link href="{{ url('/css/pe-icons.css') }}" rel="stylesheet">
    <link href="{{ url('/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ url('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    <script src="{{ url('js/jquery.js') }}"></script>
   
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    
</head><!--/head-->
<body >
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand" href="index.html"><h1><span class=" bounce-in"></span><img src="/images/logo/logo.png" width="40px" alt="">  E-UMKM</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-yellow" href="{{ asset('/') }}">Home</a></li>
                    <li><a class="hover-yellow" href="{{ asset('/tentang') }}">Tentang Kami</a></li>
                     <li class="dropdown hover-yellow">
                        <a href="#" style="color: black" class="dropdown-toggle hover-yellow" data-toggle="dropdown">Kategori Produk <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu hover-yellow">
                            <li><a class="hover-yellow" href="{{ url('/kategorikuliner') }}">Kuliner</a></li>
                            <li><a class="hover-yellow" href="{{ url('/kategorifashion') }}">Fasion</a></li>
                            <li><a class="hover-yellow" href="{{ url('/kategoricinmata') }}">Cindera Mata</a></li>
                            <li><a class="hover-yellow" href="{{ url('/kategorikosmetik') }}">Kosmetik</a></li>
                            <li><a class="hover-yellow" href="{{ url('/kategoriagro') }}">Agro Bisnis</a></li>
                            <li><a class="hover-yellow" href="{{ url('/kategoriseni') }}">Seni Kerajinan</a></li>
                        </ul>
                    </li>
                    <li><a class="hover-yellow" href="{{ asset('/blog') }}">Edukasi</a></li>
                    <li><a  class="hover-yellow" href="{{ asset('/gabung') }}">Gabung</a></li>
                    <li><a  class="hover-yellow" href="{{ asset('/kontak') }}">Kontak</a></li>
                    @if (Auth::check())
                    <li class="dropdown hover-yellow">
                        <a href="#" style="color: black" class="dropdown-toggle hover-yellow" data-toggle="dropdown"><i class="fas fa-user"></i> <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu hover-yellow">
                            <li><a class="hover-yellow disabled" >hello {{Auth::user()->name}}</a></li>
                            @if (auth()->user()->level=="umkm" || auth()->user()->level=="admin")
                            <li><a class="hover-yellow" href="{{ url('dataumkm') }}">Detail Anggota</a></li>
                            @endif
                            @if (auth()->user()->level=="admin" || auth()->user()->level=="smauii" || auth()->user()->level=="okeoc")   
                            <li><a class="hover-yellow" href="{{ route('adminhome') }}">Dashboard UMKM</a></li>
                            @endif
                            <li><a class="hover-yellow" href="{{ url('detailacount') }}">Profile</a></li>
                            <li><a class="hover-yellow" href="{{ route('logout') }}">Log Out</a></li>
                        </ul>
                    </li>
                    @else
                    <li><a  class="hover-yellow" href="{{ asset('/login') }}">Login</a></li>                 
                    @endif
                </ul>
            </div>
        </div>
    </header><!--/header-->

    @yield('content')
    
    <div id="footer-wrapper" style="position: relative;">
        <section id="bottom" class="">
            <div class="container">
                <div class="row flex-footer">
                    <div class="col-md-4 col-sm-4" >
                        <div style="display: flex">
                            <img src="{{ asset('/images/logo/logo.png') }}" width="50px" alt="">
                            <h4 style="font-size: 30px; margin-left: 10px;">E-UMKM</h4>
                        </div>
                        <p class="max-width-footer" style="font-size: 17px; margin-top: 5px; font-weight:bold;">Mitra Layanan Promosi Semakin Luas</p>
                        <p style="font-size: 14px;
                        font-family: MaisonNeue-Demi,sans-serif;
                        font-style: italic;
                        color: #21a723;" >#LakukanYangKitaBisa</p>
                    </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div>
                                <h4>Info</h4>
                                <ul class="arrow">
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Mitra UMKM</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Gabung</a></li>        
                                    <li><a href="#">Kontak </a></li>
                                </ul>
                            </div>
                        </div><!--/.col-md-3-->
                        
                        <div class="col-md-4 col-sm-4">
                            <h4>Ikuti Kami</h4>
                                <img src="/images/social/fb.png" width="40px" alt="">
                                <img src="/images/social/ig.png" width="40px" alt="">
                        </div> <!--/.col-md-3-->
                    </div>
                </div>
            </section>
        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 center" >
                        &copy; 2020 E-UMKM
                        <br>
                        Daerah Istimewa Yogyakarta
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>


    <script src="{{ url('/js/plugins.js') }}"></script>
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="{{ url('/js/init.js') }}"></script>
</body>
</html>
