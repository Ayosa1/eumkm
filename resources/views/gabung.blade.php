@extends('layout.app')

@section('content')
<script src="js/tentang.js"></script>
<section id="single-page-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center gap fade-down section-heading">
                                <h2 class="main-title">Gabung</h2>
                                <hr>
                                <p>Mitra Layanan Promosi Semakin Luas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">
    <section id="about-us" style="padding-top: 0 !important; padding-bottom: 0 !important;" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="center gap fade-down section-heading">
                    <h2 class="tentang-title">Syarat-syarat Gabung</h2>
                </div><br>
            </div>
            <div class="row">
               <div class="col-sm-3 fade-down">
                <div class="center border-gambar" style="background-color: #f0ad4e; width:200px" >
                    <img src="/images/product/a.png" width="200px" height="200px" alt="">
                </div>
                    <p style="margin-top: 50px" class="content-tengah">Mempunyai alamat usaha</p>
               </div>
               <div class="col-sm-3 fade-down">
                <div class="center border-gambar" style="background-color: #f0ad4e; width:200px" >
                    <img src="/images/product/b.png" width="200px" height="200px" alt="">
                </div>
                <p style="margin-top: 50px" class="content-tengah">Memberikan data usaha berupa
                    <ul>
                        <li>foto produk minimal 3</li>
                        <li>foto KTP</li>
                        <li>alamat email</li>
                    </ul></p>
               </div>
               <div class="col-sm-3 fade-down">
                <div class="center border-gambar" style="background-color: #f0ad4e; width:200px" >
                    <img src="/images/product/c.png" width="200px" height="200px" alt="">
                </div>
                <p style="margin-top: 50px" class="content-tengah">Mempunyai acount mendia sosial khusus penjualan produk berupa
                    <ul>
                        <li>Nomor whatsapp</li>
                        <li>Akun Instagram</li>
                        <li>Akun Facebook</li>    
                    </ul></p>
               </div>
               <div class="col-sm-3 fade-down">
                <div class="center border-gambar" style="background-color: #f0ad4e; width:200px" >
                    <img src="/images/product/d.png" width="200px" height="200px" alt="">
                </div>
                <p style="margin-top: 50px" class="content-tengah" >Memiliki Usaha Mikro Tetap</p>
               </div>
            </div>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>
    {{-- <section id="formgabung" class="white">
        <div class="container">
            @if (Auth()->user()->level=="umkm"){

                <div class="padding-gabung">
                    <div class="post border-radius">
                        <div class="post-img-content">
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-warning" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3 style="color: gray">{{Auth::user()->name}} Klik link di bawah Jika Anda ingin bergabung</h3>
                            <div class="read-more-wrapper">
                                <a href="{{ route('form1') }}" class="btn btn-outlined btn-warning">Gabung</a>
                            </div>
                        </div>
                    </div>
                </div> 
           
            }@else{
            <div class="padding-gabung">
                <div class="post border-radius">
                    <div class="post-img-content">
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-warning" href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3 style="color: gray">jika anda ingin bergabung silahkan anda Registrasi menjadi Mitra..</h3>
                        <div class="read-more-wrapper">
                            <a href="{{ route('register') }}" class="btn btn-outlined btn-warning">Registrasi</a>
                        </div>
                    </div>
                </div>
            </div> 
        }@endif      
        </div>
    </section> --}}
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
                                <p class="content-mengapa" style="margin-top: 20px">Usaha tani yang berbasis usaha pertanian dengan menawarkan berbagai jenis tanaman, mulai dari tanaman hias, benih tanaman, buah-buahan hingga sayur mayur.</p>
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
</div>    
<!--/#bottom-->    
        @endsection