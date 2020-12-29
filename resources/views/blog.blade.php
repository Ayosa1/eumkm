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
                                <h2 class="main-title">Blog eumkm</h2>
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
                            <div class="input-group">
                                <input type="text" class="form-control" autocomplete="off" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-outlined" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div><!--/.search-->

                    <div class="widget categories">
                        <h3 class="widget-title">Blog Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="arrow">
                                    <li><a href="#">Kuliner</a></li>
                                    <li><a href="#">Fasion</a></li>
                                    <li><a href="#">Cindera Mata</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="arrow">
                                    <li><a href="#">Otomotif</a></li>
                                    <li><a href="#">Kosmetik</a></li>
                                    <li><a href="#">Agro Bisnis</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.categories-->
                    <div class="widget tags">
                        <h3 class="widget-title">Post Tags</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Kuliner</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Fasion</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Cindera Mata</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Kosmetik</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Agro Bisnis</a></li>
                            <li><a class="btn btn-xs btn-warning btn-outlined" href="#">Otomotif</a></li>
                        </ul>
                    </div><!--/.tags-->

                </aside>
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="blog">
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                <img class="img-responsive img-blog" src="http://placehold.it/800x600" alt="" />
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-warning" href="blog-item.html" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="blog-item.html"><h3 class="main-title">Civility vicinity graceful is it at.</h3></a>
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#"> Danny Jones</a></span>
                                    <span><i class="fa fa-folder"></i> <a href="#"> Style</a></span>
                                    <span><i class="fa fa-clock-o"></i> April 5th, 2014</span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><span class="counter">14</span> Comments</a></span>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                <div class="read-more-wrapper">
                                    <a class="btn btn-outlined btn-warning" href="blog-item.html">Read More</a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                <img class="img-responsive img-blog" src="http://placehold.it/800x600" alt="" />
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-warning" href="blog-item.html" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="blog-item.html"><h3 class="main-title">Civility vicinity graceful is it at.</h3></a>
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#"> Danny Jones</a></span>
                                    <span><i class="fa fa-folder"></i> <a href="#"> Style</a></span>
                                    <span><i class="fa fa-clock-o"></i> April 5th, 2014</span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><span class="counter">14</span> Comments</a></span>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                <div class="read-more-wrapper">
                                    <a class="btn btn-outlined btn-warning" href="blog-item.html">Read More</a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                <img class="img-responsive img-blog" src="http://placehold.it/800x600" alt="" />
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-warning" href="blog-item.html" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="blog-item.html"><h3 class="main-title">Civility vicinity graceful is it at.</h3></a>
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#"> Danny Jones</a></span>
                                    <span><i class="fa fa-folder"></i> <a href="#"> Style</a></span>
                                    <span><i class="fa fa-clock-o"></i> April 5th, 2014</span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><span class="counter">14</span> Comments</a></span>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                <div class="read-more-wrapper">
                                    <a class="btn btn-outlined btn-warning" href="blog-item.html">Read More</a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                <img class="img-responsive img-blog" src="http://placehold.it/800x600" alt="" />
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-warning" href="blog-item.html" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="blog-item.html"><h3 class="main-title">Civility vicinity graceful is it at.</h3></a>
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#"> Danny Jones</a></span>
                                    <span><i class="fa fa-folder"></i> <a href="#"> Style</a></span>
                                    <span><i class="fa fa-clock-o"></i> April 5th, 2014</span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><span class="counter">14</span> Comments</a></span>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                <div class="read-more-wrapper">
                                    <a class="btn btn-outlined btn-warning" href="blog-item.html">Read More</a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        <ul class="pagination pagination-lg">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul><!--/.pagination-->
                    </div>
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
</div>
</div>    
<!--/#bottom-->    
@endsection