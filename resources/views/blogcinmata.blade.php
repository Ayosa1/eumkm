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
                                <h2 class="main-title">Blog Cindera Mata</h2>
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
    <section id="blog" class="white">
        <div class="container">
        <div class="gap"></div>
            <div class="row">
                <aside class="col-sm-4 col-sm-push-8">
                    <div class="widget search">
                        <form role="form">
                            {{-- <div class="input-group">
                                <input type="text" class="form-control" autocomplete="off" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-outlined" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div> --}}
                        </form>
                    </div><!--/.search-->

                    <div class="widget categories">
                        <h3 class="widget-title">Blog Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="arrow">
                                    <li><a href="{{ url('/blog') }}">Semua</a></li>
                                    <li><a href="{{ url('/blogkuliner') }}">Kuliner</a></li>
                                    <li><a href="{{ url('/blogfashion') }}">Fashion</a></li>
                                    <li><a href="{{ url('/blogcinmata') }}">Cindera Mata</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="arrow">
                                    <li><a href="{{ url('/blogseni') }}">Seni Kerajinan</a></li>
                                    <li><a href="{{ url('/blogkosmetik') }}">Kosmetik</a></li>
                                    <li><a href="{{ url('/blogargo') }}">Agro Bisnis</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.categories-->
                    {{-- <div class="widget tags">
                        <h3 class="widget-title">Post Tags</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Kuliner</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Fasion</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Cindera Mata</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Kosmetik</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Agro Bisnis</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Otomotif</a></li>
                        </ul>
                    </div><!--/.tags--> --}}

                </aside>
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="blog">
                        @foreach ($blog_cinmata as $item)
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                <img  src="{{ url('/images/produkumkm/'.$item->foto_blog) }}" width="750px" height="500px" alt="" />
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-warning" href="blog-item.html" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="blog-item.html"><h3 class="main-title">{{$item->judul_blog}}</h3></a>
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#">{{$item->nama_umkm}}</a></span>
                                    <span><i class="fa fa-clock-o"></i>{{ $item->tanggal_terbit }}</span>
                                </div>
                                <p>{{$item->deskripsi_awal}}</p>
                                <div class="read-more-wrapper">
                                    <a class="btn btn-outlined btn-warning" href="{{ url('blogview') }}/{{ $item->id_blog }}">Read More</a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        @endforeach
                        {{ $blog_cinmata->links() }}
                    </div>
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
</div>
</div>    
<!--/#bottom-->    
@endsection