@extends('layout.app')

@section('content')
<script src="js/tentang.js"></script>

<div id="content-wrapper">
    <section id="blog" class="white">
        <div class="container">
        <div class="gap"></div>
            <div class="row">
                @foreach ($blog_detail as $item) 
                <div class="col-sm-12">
                    <h1>{{$item->judul_blog}}</h1>
                </div>
            </div><!--/.row-->
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img class="border-radius" src="{{ asset('/storage/images/foto_blog/'.$item->foto_blog) }}" width="500px" height="400px" alt="">
                    <div style="display: flex;" >
                        <p style="padding: 10px;"><i class="fas fa-store"></i> {{$item->nama_umkm}}</p>
                        <p style="padding: 10px;"><i class="fas fa-user"></i> {{$item->nama_pemilik}}</p>
                        <p style="padding: 10px;"><i class="fas fa-calendar-day"></i> {{$item->tanggal_terbit}}</p>
                        <p style="padding: 10px;"><i class="fas fa-align-justify"></i> {{$item->nama_kategori}}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 border-radius" style="background-color: white">
                    <p style="padding: 20px">{{$item->deskripsi_awal}}</p>
                    <p style="padding: 20px">{{$item->deskripsi_lanjutan}}</p>
                </div>
            </div>
        </div>
    </section><!--/#blog-->
    @endforeach
</div>
</div>    
<!--/#bottom-->    
@endsection