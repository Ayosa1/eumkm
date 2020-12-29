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
                                <h2 class="main-title">Gabung</h2>
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
    <section id="about-us" style="padding-top: 0 !important; padding-bottom: 0 !important;" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="center gap fade-down section-heading">
                    <h2 class="tentang-title">Syarat-syarat Gabung</h2>
                </div><br>
            </div>
            <div class="row">
               <div class="col-sm-3 fade-down">
                <img src="/images/product/a.jpg" width="200px" height="150px" alt="">
                <p style="margin-top: 50px" class="content-tengah">Mempunyai alamat usaha</p>
               </div>
               <div class="col-sm-3 fade-down">
                <img src="/images/product/b.png" width="200px" height="150px" alt="">
                <p style="margin-top: 50px" class="content-tengah">Memberikan data usaha berupa
                    <ul>
                        <li>foto produk minimal 3</li>
                        <li>foto KTP</li>
                        <li>alamat email</li>
                    </ul></p>
               </div>
               <div class="col-sm-3 fade-down">
                <img src="/images/product/c.png" width="200px" height="150px" alt="">
                <p style="margin-top: 50px" class="content-tengah">Mempunyai acount mendia sosial khusus penjualan produk berupa
                    <ul>
                        <li>Nomor whatsapp</li>
                        <li>Akun Instagram</li>
                        <li>Akun Facebook</li>    
                    </ul></p>
               </div>
               <div class="col-sm-3 fade-down">
                <img src="/images/product/d.jpg" width="200px" height="150px" alt="">
                <p style="margin-top: 50px" class="content-tengah" >Memiliki Usaha Mikro Tetap</p>
               </div>
            </div>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>
    <section id="about-us" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 fade-up">
                    <h3>Contact Information</h3>
                    <p><span class="icon icon-home"></span>Kota Yogyakarta, Daerah Istimewa Yogyakarta<br/>
                        <span class="icon icon-phone"></span>+36 65984 405<br/>
                        <span class="icon icon-mobile"></span>+36 65984 405<br/>
                        <span class="icon icon-envelop"></span> <a href="#">umkm@gmail.com</a> <br/>
                        <span class="icon icon-twitter"></span> <a href="#">umkm@gmail.com</a> <br/>
                    </p>
                </div><!-- col -->

                <div class="col-md-8 fade-up">
                    <h3>Isi form berikut jika ingin bergabung</h3>
                    <br>
                    <br>
                    <div id="message"></div>
                    <form method="post" action="sendemail.php" id="contactform">
                        <input type="text" name="name" id="website" placeholder="nama UMKM" />
                        <input type="text" name="name" id="website" placeholder="nama Pemilik" />
                        <input type="text" name="email" id="website" placeholder="Email UMKM" />
                        <input type="text" name="website" id="website" placeholder="alamat" />
                        <input type="text" name="website" id="website" placeholder="Nomor HP" />
                        <select class="input_select" name="carlist" form="carform">
                            <option value="volvo">Kuliner</option>
                            <option value="saab">Otomotif</option>
                            <option value="opel">Cindera mata</option>
                            <option value="audi">Fasion</option>
                          </select>
                        <input type="text" name="website" id="website" placeholder="Produk UMKM" />
                        <span style="font-size: 18px">Gambar UMKM</span><br>
                        <input type="file" name="myImage" accept="image/x-png,image/gif,image/jpeg" /><br>
                        <input class="btn btn-outlined btn-warning" type="submit" name="submit" value="Submit" />
                    </form>
                </div><!-- col -->
            </div>

            <div class="gap"></div>
            <div class="row">
                
            </div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>
</div>
</div>    
<!--/#bottom-->    
        @endsection