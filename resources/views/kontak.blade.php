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
                    <h2 class="main-title">Meet The Team</h2>
                    <hr>
                    <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                </div>
                <div class="gap"></div>

                <div id="meet-the-team" class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="http://placehold.it/400x400" alt="">
                            <div class="team-content fade-up">
                                <h5>John Smith<small class="role muted">Marketing Director</small></h5>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                                <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" style="width: 400px; height:400px;" src="{{url('storage/images/foto_logo/rifki.jpg')}}" alt="">
                            <div class="team-content fade-up">
                                <h5>Rifky Dermawan<small style="color: black;" class="role muted">Chief Executive Officer</small></h5>
                                <p>Tindakan tepat berasal dari pengalaman, dan pengalaman berasal dari keputusan bodoh</p>
                                <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="center team-member">
                            <img class="img-responsive img-thumbnail bounce-in" src="http://placehold.it/400x400" alt="">
                            <div class="team-content fade-up">
                                <h5>Steve Smith<small class="role muted">Sales Assistant</small></h5>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                                <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
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