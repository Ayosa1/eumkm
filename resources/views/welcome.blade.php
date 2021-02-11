@extends('layout.app')

@section('content')

<script src="js/home.js"></script>
<section id="main-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="carousel-content tulisan_home centered">
                                <span class="home-icon-bawah bounce-in"></span>
                                <p class="boxed animation animated-item-2 fade-up warna-tulisan-banner">Mitra layanan promosi semakin luas</p>
                                <p class="animation animated-item-2 fade-up quote-font">#LakukanYangKitaBisa</p>
                                <br>
                                {{-- <div style="padding: 10px 15px;">
                                    <a class="btn btn-md animation bounce-in" href="#services"></a>
                                </div> --}}
                            </div>  
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->
<div id="content-wrapper" style="margin-bottom: 0 !important;">
    {{-- <section id="carousel"  class="white" style="padding-top:100px;" style="background-image: url({{ asset('images/logo/wall.png') }}); background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class='col-md-12 fade-up'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner ">
                          <!-- Quote 1 -->
                            <div class="item active"> 
                                    <div class="">
                                        <div class=" text-center">
                                            <img class="gambar-carousel border-radius" src="/images/product/1.jpg" style="width: 1000px;height:500px;">
                                            <p class="background-text tulisan-carousel">example product</p>
                                        </div>
                                    </div>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">             
                                    <div class="">
                                        <div class=" text-center">
                                            <img class="gambar-carousel border-radius" src="/images/product/2.jpg" style="width: 1000px;height:500px;">
                                            <p class="background-text tulisan-carousel">example product sasd</p>
                                        </div>
                                    </div>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                    <div class="">
                                        <div class=" text-center">
                                            <img class="gambar-carousel border-radius" src="/images/product/3.jpg" style="width: 1000px;height:500px;">
                                            <p class="background-text tulisan-carousel">example product sasd</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>  --}}
    <section id="services" class="white">
        <div class="container">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Tentang Kami</h2>
                            <hr>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="tentang-title animation animated-item-2 fade-up" style="margin-top:0; margin-bottom:40px;">Kenapa EUMKM?</h2>
                        <div style="justify-content: center; align-item: start;">      
                            <div>
                                <img class="animation animated-item-1 fade-down border-radius" src="/images/logo/mengapa.jpg" width="350px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top: 98px;">
                        <h2 class="tentang-title animation animated-item-2 fade-up">EUMKM menawarkan banyak pilihan produk-produk</h2>
                        <hr>
                        <p class="content-mengapa animation animated-item-2 fade-up">Kami akan terus bekerjasama dengan mitra UMKM untuk terus meningkatkan dan memperbanyak pilihan produk yang 
                        yang berkualitas sehingga memberikan pelayanan terbaik untuk anda. </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="about-us" class="white mt-3">
    <div class="container" >
        <div class="row" >
        <div class="col-sm-6">
            <h3 class="tentang-title  animation animated-item-2 fade-up">Layanan</h3>
            <hr>
            <p class="content-mengapa animation animated-item-2 fade-up">Lewat E-UMKM, Kamu bisa mengakses dan melihat produk-produk yang di tawarkan dari para UMKM sehingga memberikan informasi beragam kuliner, aksesoris atau kerajinan tangan dan oleh-oleh produk lokal maupun luar daerah</p>
        </div>
        
        <div class="col-sm-6 align-layanan">
            <div class="icon-tentangkami border-radius">
                <img class="animation animated-item-1 fade-down" src="/images/logo/layanan.png" width="350px" alt="">
            </div> 
        </div>
    </div>                
    </section>
    <section id="blog" class="white">
    <div class="container">
        <div class="center fade-down section-heading">
            <h2 class="tentang-title">Produk UMKM</h2><br>
        </div>
        <div class="row">
            @foreach ($produk_adv as $item)          
            <div class="col-md-4">
                <div class="post">
                    <div class="post-img-content">
                        <img src="{{ url('storage/images/foto_produk/'.$item->foto_produk1) }}" width="400px" height="300px"  />
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-warning" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h2 class="post-title">{{$item->nama_produk1}}</h2>
                        <div class="read-more-wrapper">
                            <a href="{{ url('umkmview') }}/{{ $item->id_anggota }}" class="btn btn-outlined btn-warning">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="gap"></div>
    </div>
   </section>

    <section id="services" class="white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center gap fade-down section-heading">
                    <h2 class="tentang-title">Kategori UMKM</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="service-block">
                        <div class="pull-left bounce-in padding-card">
                            <h3 class="media-heading">Usaha Kuliner</h3>
                            <img class="border-radius" src="/images/product/6.jpg" width="300px" height="170px" alt="">
                            <p class="content-mengapa" style="margin-top: 20px">Memberikan berbagai macam pilihan makanan, minuman dan jajanan tradisional yang ditawarkan dari mitra kuliner kita.</p>
                        </div>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="service-block">
                        <div class="pull-left bounce-in padding-card">
                            <h3 class="media-heading">Usaha Fasion</h3>
                            <img class="border-radius" src="/images/product/7.jpg" width="300px" height="170px" alt="">
                            <p class="content-mengapa" style="margin-top: 20px">Mulai dari beragam jenis pakaian dan model-model kekinian hingga classic ada dalam satu wadah usaha fashion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="service-block">
                        <div class="pull-left bounce-in padding-card">
                            <h3 class="media-heading">Cindera mata</h3>
                            <img class="border-radius" src="/images/product/8.jpg" width="300px" height="170px" alt="">
                            <p class="content-mengapa" style="margin-top: 20px">Produk yang ditawarkan mulai dari produk kecantikan berbahan herbal yang aman untuk digunakan hingga salon kecantikan dan alat-alat kosmetik.</p>
                        </div>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="service-block">
                        <div class="pull-left bounce-in padding-card">
                            <h3 class="media-heading">Kosmetik</h3>
                            <img class="border-radius" src="/images/product/9.jpg" width="300px" height="170px" alt="">
                            <p class="content-mengapa" style="margin-top: 20px">Pernak Pernik/souvenir yang dapat anda bawa sebagai oleh-oleh ketika berkunjung atau berwisata ketempat tertentu untuk kenang-kenangan dari hasil kunjungan anda </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="service-block">
                        <div class="pull-left bounce-in padding-card">
                            <h3 class="media-heading">Argo Bisnis</h3>
                            <img class="border-radius" src="/images/product/3.jpg" width="300px" height="170px" alt="">
                            <p class="content-mengapa" style="margin-top: 20px">Usaha tani yang berbasis usaha pertanian dengan menawarkan berbagai jenis tanaman, mulai dari tanaman hias, benih tanaman, buah-buahan hingga sayur mayur</p>
                        </div>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="service-block">
                        <div class="pull-left bounce-in padding-card">
                            <h3 class="media-heading">Seni Kerajinan</h3>
                            <img class="border-radius" src="/images/product/10.jpg" width="300px" height="170px" alt="">
                            <p class="content-mengapa" style="margin-top: 20px">Disini kami memiliki berbagai macam seni kerajinan yang mungkin anda inginkan
                                (seni kriya kayu, seni kriya tekstil, seni kriya keramik, dll)
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
</div>    
<!--/#bottom-->    
        @endsection