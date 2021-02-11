@extends('layout.app')

@section('content')

{{-- <script src="js/tentang.js"></script>
<section id="single-page-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center gap fade-down section-heading">
                                <h2 class="main-title">Kategori Argo Bisnis</h2>
                                <hr>
                                <p>Mitra Layanan Promosi Semakin Luas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider--> --}}

<section id="protfolio" class="background-cover-agro" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="color: white;" class="center gap fade-down section-heading">
                    <h2 class="main-title">Kategori Agro Bisnis</h2>
                    <hr>
                    <p>Mitra Layanan Promosi Semakin Luas</p>
                </div>
            </div>
        </div>
</section>
<div id="content-wrapper">
    <section id="portfolio" class="white" style="margin-top: 50px;">
        <div class="container">
            <p>Cari Data :</p>
            <form action="/kategoriagro/cari" method="GET">
                <input type="text" name="cariagro" placeholder="Cari.." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>
            <div class="gap"></div>   
                <div class="row">
                    <ul class="portfolio-items col-3 isotope fade-up">
                    @foreach ($kategori_argo as $item)
                        <li class="portfolio-item {{ $item->nama_kategori }} apps isotope-item">
                            <div class="item-inner">
                                <img src="{{ url('/storage/images/foto_produk/'.$item->foto_produk1) }}"  width="300px" height="300px" alt="">
                                <h5 class="center">{{ $item->nama_produk1 }}</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{ url('umkmview') }}/{{ $item->id_anggota }}"><button class="btn-sm btn-warning">Lihat Selengkapnya</button></a>
                                </div>
                            </div>
                        </li><!--/.portfolio-item-->
                        <li class="portfolio-item {{ $item->nama_kategori }} apps isotope-item">
                            <div class="item-inner">
                                <img src="{{ url('/storage/images/foto_produk/'.$item->foto_produk2) }}"  width="300px" height="300px" alt="">
                                <h5 class="center">{{ $item->nama_produk2 }}</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{ url('umkmview') }}/{{ $item->id_anggota }}"><button class="btn-sm btn-warning">Lihat Selengkapnya</button></a>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item {{ $item->nama_kategori }} apps isotope-item">
                            <div class="item-inner">
                                <img src="{{ url('/storage/images/foto_produk/'.$item->foto_produk3) }}"  width="300px" height="300px" alt="">
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
                    {{$kategori_argo->links()}}
                </div>
            </div>
        </section>
</div>
</div>    
<!--/#bottom-->    
        @endsection