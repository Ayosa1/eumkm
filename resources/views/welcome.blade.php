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
                                <div style="padding: 10px 15px;">
                                    <a class="btn btn-md animation bounce-in" href="#services">Mari Berbagung</a>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">

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
                        <div style="display: flex; justify-content: center; align-item: start;">
                            <div class="icon-tentangkami border-radius">
                                <img class="animation animated-item-1 fade-down" src="/images/logo/tentang.png" width="350px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h2 class="tentang-title animation animated-item-2 fade-up">Tentang Kami</h2>
                        <hr>
                        <p class="animation animated-item-2 fade-up">E-UMKM berangkat dari mimpi yang ingin membantu mempermudah kehidupan orang banyak melalui teknologi. 
                            E-UMKM dapat memberikan layanan website untuk mempromosikan dan meningkatkan penjualan dari semua pengusaha UMKM secara luas. </p>
                        <button class="btn btn-warning">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>

</section>

<section id="carousel"  class="white" style="" style="background-image: url({{ asset('images/logo/wall.png') }}); background-repeat: no-repeat;">
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
                                        <p class="tulisan-carousel">example product</p>
                                    </div>
                                </div>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">             
                                <div class="">
                                    <div class=" text-center">
                                        <img class="gambar-carousel border-radius" src="/images/product/2.jpg" style="width: 1000px;height:500px;">
                                        <p class="tulisan-carousel">example product sasd</p>
                                    </div>
                                </div>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                                <div class="">
                                    <div class=" text-center">
                                        <img class="gambar-carousel border-radius" src="/images/product/3.jpg" style="width: 1000px;height:500px;">
                                        <p class="tulisan-carousel">example product sasd</p>
                                    </div>
                                </div>
                        </div>
                    </div>
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
            <p class="animation animated-item-2 fade-up">Lewat E-UMKM, Kamu bisa mengakses dan melihat produk-produk yang di tawarkan dari para UMKM sehingga memberikan informasi beragam kuliner, aksesoris atau kerajinan tangan dan oleh-oleh produk lokal maupun luar daerah</p>
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
            <h2 class="tentang-title">Berita Terbaru</h2><br>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="post">
                    <div class="post-img-content">
                        <img src="images/product/gudeg.jpg" class="img-responsive" />
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-warning" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h2 class="post-title">Gudeg Yu jum Wenak</h2>
                        <div class="author">
                           <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                        </div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div class="read-more-wrapper">
                            <a href="#" class="btn btn-outlined btn-warning">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post">
                    <div class="post-img-content">
                        <img src="images/product/gudeg.jpg" class="img-responsive" />
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-warning" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h2 class="post-title">Gudeg Yujum Wenak</h2>
                        <div class="author">
                            <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                        </div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div class="read-more-wrapper">
                            <a href="#" class="btn btn-outlined btn-warning">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post">
                    <div class="post-img-content">
                        <img src="images/product/gudeg.jpg" class="img-responsive" />
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-warning" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h2 class="post-title">Gudeg Yu jum wenak</h2>
                        <div class="author">
                            <i class="fa fa-clock-o"></i> <time datetime="2014-01-20">April 11th, 2014</time>
                        </div>
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div class="read-more-wrapper">
                            <a href="#" class="btn btn-outlined btn-warning">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>
   </section>

<section id="services" class="white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center gap fade-down section-heading">
                    <h2 class="tentang-title">Kriteria UMKM</h2>
                    <hr>
                    <p>Terdapat beberapa kriteria yang harus di penuhi untuk bisa gabung sebagai berikut.</p>
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
                            <p style="margin-top: 20px">Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall.</p>
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
                            <p style="margin-top: 20px">Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall.</p>
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
                            <p style="margin-top: 20px">Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall.</p>
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
                            <p style="margin-top: 20px">Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall.</p>
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
                            <p style="margin-top: 20px">Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall.</p>
                        </div>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="service-block">
                        <div class="pull-left bounce-in padding-card">
                            <h3 class="media-heading">Otomotif</h3>
                            <img class="border-radius" src="/images/product/5.jpg" width="300px" height="170px" alt="">
                            <p style="margin-top: 20px">Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall.</p>
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