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
                                <h2 class="main-title">Kontak</h2>
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

<div id="content-wrapper" style="margin-top: -30px">
    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
               <div class="gap"></div>
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Team Kami</h2>
                    <hr>
                </div>
                <div class="gap"></div>

                <div id="meet-the-team" class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="http://placehold.it/400x400" alt="">
                            <div class="team-content fade-up">
                                <h5>Haryo<small class="role muted">Founder</small></h5>
                                <p>-.</p>
                                <a class="btn btn-social btn-facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" style="width: 400px; height:400px;" src="{{url('storage/images/foto_logo/rifki.jpg')}}" alt="">
                            <div class="team-content fade-up">
                                <h5>Rifky Dermawan<small style="color: black;" class="role muted">Chief Executive Officer</small></h5>
                                <p>Tindakan tepat berasal dari pengalaman, dan pengalaman berasal dari keputusan bodoh</p>
                                <a class="btn btn-social btn-facebook" target="_blank" href="https://web.facebook.com/rifky.dermawan.58"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" target="_blank" href="https://www.instagram.com/rifkydwn/"><i class="fa fa-instagram"></i></a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="{{url('storage/images/foto_logo/adi.jpg')}}" style="width: 400px; height:400px;" alt="">
                            <div class="team-content fade-up">
                                <h5>Adi Yoga Prakasa<small class="role muted">Chief Technology Officer</small></h5>
                                <p>Kerja Keras Tidak akan sia-sia.</p>
                                <a class="btn btn-social btn-facebook" target="_blank" href="https://web.facebook.com/prakasa.yoga"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" target="_blank" href="https://www.instagram.com/a_yosa/"><i class="fa fa-instagram"></i></a> 
                            </div>
                        </div>
                    </div>
                </div><!--/#meet-the-team-->
                <div class="gap"></div>
                <div class="gap"></div>
            </div>
        </section>
    </div>
</div>

</div>    
<!--/#bottom-->    
        @endsection