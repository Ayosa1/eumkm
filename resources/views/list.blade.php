@extends('layout.app')

@section('content')

<script src="js/list.js"></script>
<section id="single-page-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center gap fade-down section-heading">
                                <h2 class="main-title">Daftar UMKM</h2>
                                <hr>
                                <p>Memberikan Layanan Promosi Penjualan secara luas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">
    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
                <ul class="portfolio-filter fade-down center">
                    <li><a class="btn btn-outlined btn-warning active" href="#" data-filter="*">Semua</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".bootstrap">Kuliner</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".html">Fasion</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".wordpress">Cindera Mata</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".kosmetik">Kosmetik</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".argo">Argo Bisnis</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".otomotif">Otomotif</a></li>
                </ul><!--/#portfolio-filter-->

                <ul class="portfolio-items col-3 isotope fade-up">
                    <li class="portfolio-item bootstrap apps isotope-item">
                        <div class="item-inner">
                            <img src="/images/product/gudeg.jpg"  width="100%" height="auto" alt="">
                            <h5>Gudeg Yu jum</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><button class="btn-sm btn-warning">Lihat Selengkapnya</button></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla bootstrap isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item bootstrap wordpress isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla wordpress apps isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item wordpress html isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla wordpress apps isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item wordpress html isotope-item">
                        <div class="item-inner">
                            <img src="http://placehold.it/800x600" alt="">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->
                </ul>
            </div>
        </section>
</div>
</div>    
<!--/#bottom-->    
        @endsection