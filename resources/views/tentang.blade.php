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
                                <h2 class="main-title">Tentang Kami</h2>
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
    <section id="about-us" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div style="display: flex; justify-content: center; padding-top:40px;" class="col-md-6 fade-up ">
                    <div class="icon-tentangkami border-radius">
                        <img src="/images/logo/tentang.png" width="400px" alt="">
                    </div>
                </div>
                <div class="col-md-6 fade-up">
                    <h2>Awal Perjalanan Kami</h2>
                        <p style="margin-top: 20px" class="content-mengapa">Berawal dari obrolan diwarung makan yang sedarhana dengan berbagai macam kesahan yang ada. kami ingin ada sesuatu yang dapat memberikan
                            kebermanfaatan bagi banyak orang. Dengan itu, terciptalah suatu gagasan untuk membuat sebuah website yang nantinya dapat dijadikan
                            wabah berjualan untuk pedagang-pedagang UMKM yang ingin memperluas penjualan mereka melalui teknologi.Dengan membantu
                            kemudahan kehidupan orang banyak melalui teknologi, E-UMKM dapat memberikan layanan promosi, sehingga dapat mewujudkan struktur perekonomian
                            yang seimbang dan berkembang.
                        </p>
    
                    <p class="content-mengapa">Kami Percaya bahwa dengan E-umkm akan menjadu suatu solusi untuk menyelesaikan masalah dalam penjualan karena memberikan
                        kemampuan usaha mikro,kecil dan menengah menjadi usaha yang tangguh situasi di era digital </p>
                </div>
            </div>

            <div class="gap"></div>
            <div class="row">
                
            </div>
            <section id="about-us" class="white mt-3">
                <div class="container" >
                    <div class="row" >
                    <div class="col-sm-6">
                        <h3 class="tentang-title  animation animated-item-2 fade-up">Layanan</h3>
                        <hr>
                        <p class="content-mengapa animation animated-item-2 fade-up">Lewat E-UMKM, Kamu bisa mengakses dan melihat produk-produk yang di tawarkan dari para UMKM sehingga memberikan informasi beragam kuliner, aksesoris atau kerajinan tangan dan oleh-oleh produk lokal maupun luar daerah</p>
                    </div>
                    
                    <div class="col-sm-6 align-layanan">
                        <div class="icon-tentangkami border-radius fade-up">
                            <img class="animation animated-item-1 fade-down" src="/images/logo/layanan.png" width="350px" alt="">
                        </div> 
                    </div>
                </div>                
            </section>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>
</div>
</div>    
<!--/#bottom-->    
        @endsection