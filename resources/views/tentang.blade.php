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
                <div class="col-md-6 fade-up">
                    <img src="/images/logo/tentang.png" width="400px" alt="">
                </div>
                <div class="col-md-6 fade-up">
                    <p>Berawal dari obrolan diwarung makan yang sedarhana dengan berbagai macam kesahan yang ada. kami ingin ada sesuatu yang dapat memberikan
                        kebermanfaatan bagi banyak orang. Dengan itu, terciptalah suatu gagasan untuk membuat sebuah website yang nantinya dapat dijadikan
                        wabah berjualan untuk pedagang-pedagang UMKM yang ingin memperluas penjualan mereka melalui teknologi.Dengan membantu
                        kemudahan kehidupan orang banyak melalui teknologi, E-UMKM dapat memberikan layanan promosi, sehingga dapat mewujudkan struktur perekonomian
                        yang seimbang dan berkembang.
                    </p>

                <p>Kami Percaya bahwa dengan E-umkm akan menjadu suatu solusi untuk menyelesaikan masalah dalam penjualan karena memberikan
                    kemampuan usaha mikro,kecil dan menengah menjadi usaha yang tangguh situasi di era digital </p>
                </div>
               
            </div>
            <div class="gap"></div> 
            <div id="meet-the-team" class="row">
               <div class="col-md-6">
                <h2 class="main-title">Layanan</h2>
                <p>Lewat E-UMKM kamu dapat melihat dan membeli produk dan jasa dari lapak yang di tawarkan di UMKM.
                    dan E-UMKM memberikan informasi beragam kuliner makanan dan minuman kemudian pernak pernik dan oleh oleh khas dll.
                </p>
               </div>

               <div class="col-md-6 center">
                <img src="/images/logo/layanan.png" width="250px" alt="">
               </div>
            </div><!--/#meet-the-team-->
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>
</div>
</div>    
<!--/#bottom-->    
        @endsection