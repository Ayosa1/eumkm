@extends('layout.app')

@section('content')

<script src="{{ url('/js/tentang.js') }}"></script>

<div id="content-wrapper">

    
    <section id="portfolio" class="white" style="padding-top: 100px; padding-bottom:0;">
        <div class="container">
            @foreach ($detail_umkm as $nama)
            <h2 class="center" style="padding-bottom:30px ">{{$nama->nama_umkm}}</h2>
            @endforeach
            <div class="row" style="margin-left: 0; margin-right:0;">
                @foreach ($detail_umkm as $gambar)
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="{{ url('/storage/images/foto_produk/'.$gambar->foto_produk1) }}" width="400px" height="300px"  />
                        </div>
                        <div class="content">
                            <h2 class="post-title">{{ $gambar->nama_produk1 }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="{{ url('/storage/images/foto_produk/'.$gambar->foto_produk2) }}" width="400px" height="300px"  />
                        </div>
                        <div class="content">
                            <h2 class="post-title">{{ $gambar->nama_produk2 }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <div class="post-img-content">
                            <img src="{{ url('/storage/images/foto_produk/'.$gambar->foto_produk3) }}" width="400px" height="300px"  />
                        </div>
                        <div class="content">
                            <h2 class="post-title">{{ $gambar->nama_produk3 }}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="portfolio" class="white" style="padding-top: 0; padding-bottom: 0;">
        <div class="container">
                @foreach ($detail_umkm as $ket)
                    <div class="center">
                        <h5 class="post-title">Owner : {{ $ket->nama_pemilik }}</h5>
                        <h5 class="post-title">Alamat: {{ $ket->alamat }}</h5>
                        <p>Untuk Pemesanan Produk di anda akan menghubungi penjual via Whatsapp</p>
                        {{-- <p >Jika anda sudah Deal dengan Penjual silahkan untuk transfer di rekening di bawah ini</p> --}}
                        {{-- <b><p>Nama Bank</p> </b>
                        <b><p>Nomor rekening</p></b> --}}
                       
                        <a target="_blank" href="{{ $ket->whatsapp }}"><button class="btn btn-warning">chat dan pesan</button></a>
                    </div>
                @endforeach
        </div>
    </section>
    <section id="portfolio" class="white" style="padding-top: 0">
        <div class="container">
            <h2 class="center">Social Media</h2>
            <hr>
        </div>
        @foreach ($detail_umkm as $item)
        <div class="row center" style="margin-left: 0; margin-right:0;">
            <div class="col-sm-6 fade-up">
                <a href="{{ url('https://'.$item->facebook) }}" target="_blank">
                    <img src="/images/social/fb.png"  width="150px"  alt="">
                </a>
            </div>
            <div class="col-sm-6 fade-up">
                <a href="{{ url('https://'.$item->instagram) }}" target="_blank">
                    <img src="/images/social/ig.png"  width="150px"  alt="">
                </a>
            </div>
            {{-- <div class="col-sm-4 fade-up">
                <a href="{{ url('https://'.$item->whatsapp) }}" target="_blank">
                    <img src="/images/social/wa.png"  width="150px"  alt="">
                </a>
            </div> --}}
        </div>
        @endforeach
    </section>
</div>
</div>    
<!--/#bottom-->    

@endsection