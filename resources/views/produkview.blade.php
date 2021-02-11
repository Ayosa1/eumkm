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
                                <h2 class="main-title">Produk UMKM</h2>
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
    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
                <ul class="portfolio-filter fade-down center">
                    <li><a class="btn btn-outlined btn-warning active" href="#" data-filter="*">Semua</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".kuliner">Kuliner</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".fasion">Fasion</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".cindera_mata">Cindera Mata</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".kosmetik">Kosmetik</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".agro">Argo Bisnis</a></li>
                    <li><a class="btn btn-outlined btn-warning" href="#" data-filter=".otomotif">Otomotif</a></li>
                </ul><!--/#portfolio-filter-->
                
                <div class="row">
                    <ul class="portfolio-items col-3 isotope fade-up">
                    @foreach ($detail_produk as $item)
                        <li class="portfolio-item {{ $item->nama_kategori }} apps isotope-item">
                            <div class="item-inner">
                                <img src="{{ url('/images/produkumkm/'.$item->foto_produk1) }}"  width="300px" height="300px" alt="">
                                <h5 class="center">{{ $item->nama_produk1 }}</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{ url('umkmview') }}/{{ $item->id_anggota }}"><button class="btn-sm btn-warning">Lihat Selengkapnya</button></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item {{ $item->nama_kategori }} apps isotope-item">
                            <div class="item-inner">
                                <img src="{{ url('/images/produkumkm/'.$item->foto_produk2) }}"  width="300px" height="300px" alt="">
                                <h5 class="center">{{ $item->nama_produk2 }}</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{ url('umkmview') }}/{{ $item->id_anggota }}"><button class="btn-sm btn-warning">Lihat Selengkapnya</button></a>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item {{ $item->nama_kategori }} apps isotope-item">
                            <div class="item-inner">
                                <img src="{{ url('/images/produkumkm/'.$item->foto_produk3) }}"  width="300px" height="300px" alt="">
                                <h5 class="center">{{ $item->nama_produk3 }}</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{ url('umkmview') }}/{{ $item->id_anggota }}"><button class="btn-sm btn-warning">Lihat Selengkapnya</button></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div> 
                <div>
                    {{-- {{$detail_produk->links()}} --}}
                </div>
            </div>
        </section>
</div>
</div>    
<!--/#bottom-->    
        @endsection