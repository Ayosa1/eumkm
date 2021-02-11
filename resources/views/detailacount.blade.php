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
                        <div class="card">
                            <div class="card-body">
                                <h3 class="gabung_title">Data Saya</h3>
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td width= "10" >:</td>
                                        <td align="left" >{{ $getuser->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $getuser->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Hobi</td>
                                        <td>:</td>
                                        <td>{{ $getuser->hobi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $getuser->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{ $getuser->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                        <td>:</td>
                                        <td>{{ $getuser->instagram }}</td>
                                    </tr>
                                </table>
                            </tbody>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <div class="row">
                    <div class="col-md-8 mt-5 fade-up">
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
                    </div>
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