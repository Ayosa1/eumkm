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
                                <h2 class="main-title">Kategori Fashion</h2>
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
                <div class="row">
                    <ul class="portfolio-items col-3 isotope fade-up">
                    @foreach ($kategori_fashion as $item)
                        <li class="portfolio-item {{ $item->nama_kategori }} apps isotope-item">
                            <div class="item-inner">
                                <img src="{{ url('/storage/images/foto_logo/'.$item->foto_logo_umkm) }}"  width="300px" height="300px" alt="">
                                <h5 class="center">{{ $item->nama_umkm }}</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{ url('umkmview') }}/{{ $item->id_anggota }}"><button class="btn-sm btn-warning">Lihat Selengkapnya</button></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        @endforeach
                    </ul>
                </div> 
                <div>
                    {{$kategori_fashion->links()}}
                </div>
            </div>
        </section>
</div>
</div>    
<!--/#bottom-->    
        @endsection