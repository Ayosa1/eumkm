@extends('auth.app')

@section('konten')
<script>
    $( ".selector" ).datepicker({
  dateFormat: "yyyy/mm/dd"
}); 
</script>
<div id="content-wrapper">   
    <section id="about-us">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            @if ($user_produk->isEmpty())
                            <div class="center">
                                <h2>Maaf anda belum punya data UMKM sebagai member dari E-UMKM</h2>
                                <h5>Apakah Anda ingin bergabung menjadi member sebagai Mitra UMKM?</h5>
                                <h5>Klik link di bawah ini jika anda ingin bergabung..</h5>
                                <a href="{{ url('/gabung') }}"><button class="btn btn-warning mt-3">Bergabung</button></a>
                            </div>    
                            @endif
                            @foreach ($user_produk as $item)
                            <div class="card p-3">
                                <div class="card-body">
                                    <a href="{{route('adminhome')}}"><button class="btn btn-warning mb-3 " style="color: white; font-family:Arial, Helvetica, sans-serif;">Dashboard Transaksi</button></a>
                                    <h3 class="gabung_title">Data Mitra UMKM</h3>
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td>Nama UMKM</td>
                                            <td width= "10" >:</td>
                                            <td align="left" >{{ $item->nama_umkm }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pemilik</td>
                                            <td>:</td>
                                            <td>{{ $item->nama_pemilik }}</td>
                                        </tr>
                                        <tr>
                                            <td>email</td>
                                            <td>:</td>
                                            <td>{{ $item->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{ $item->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor HP</td>
                                            <td>:</td>
                                            <td>{{ $item->nomor_hp }}</td>
                                        </tr>
                                        <tr>
                                            <td>Index Produk</td>
                                            <td>:</td>
                                            <td>{{ $item->nama_index_produk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kategori UMKM</td>
                                            <td>:</td>
                                            <td>{{ $item->nama_kategori }}</td>
                                        </tr>
                                        <tr>
                                            <td>Username UMKM</td>
                                            <td>:</td>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                    </table>
                                    </tbody>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    {{-- <div class="col-md-8 mt-5 fade-up">
                        <h3 class="gabung_title">Update Biodata</h3>
                        <br>
                        <br>
                        <div id="message"></div>
                        <form method="POST" action="{{url('detailacount')}}" id="contactform">
                            @csrf
                            <span class="span_acount">Nama</span>
                            <input type="text" name="name" value="{{$getuser->name}}" id="website"  />
                            <span class="span_acount">Email</span>
                            <input type="text" name="email" value="{{$getuser->email}}" id="website" />
                            <span class="span_acount">Password</span>
                            <input type="text" name="password" value="" id="website" />
                            <span class="span_acount">Alamat</span>
                            <input type="text" name="alamat" value="{{$getuser->alamat}}" id="website" />
                            <span class="span_acount">Hobi</span>
                            <input type="text" name="hobi" value="{{$getuser->hobi}}" id="website" />
                            <span class="span_acount">Tanggal Lahir</span>
                            <input type="date" name="tanggal_lahir" value="{{$getuser->tanggal_lahir}}" id="website" />
                            <span class="span_acount">Instagram</span>
                            <input type="text" name="instagram" value="{{$getuser->instagram}}" id="website"/>
                            <span>Pastikan anda sudah benar mengisi data diri anda</span><br><br>
                            <button class="btn btn-outlined btn-warning" type="submit" >Simpan</button>
                        </form>
                    </div> --}}
                    <div class="col-md-4 fade-up">
                        {{-- <h3>Contact Information</h3>
                        <p><span class="icon icon-home"></span>Kota Yogyakarta, Daerah Istimewa Yogyakarta<br/>
                            <span class="icon icon-phone"></span>+36 65984 405<br/>
                            <span class="icon icon-mobile"></span>+36 65984 405<br/>
                            <span class="icon icon-envelop"></span> <a href="#">umkm@gmail.com</a> <br/>
                            <span class="icon icon-twitter"></span> <a href="#">umkm@gmail.com</a> <br/>
                        </p> --}}
                    </div><!-- col -->
        
                    <!-- col -->
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