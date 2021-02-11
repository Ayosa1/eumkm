<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/tentang', function () {
    return view('tentang');
});

Route::group(['middleware' => ['auth','ceklevel:admin,umkm, user']], function(){
    Route::post('/detailacount','AuthController@updateuser')->middleware('auth');
    Route::get('/dataumkm','AuthController@user_produk')->middleware('auth');
    Route::get('/detailacount','AuthController@getuser')->name('detailacount')->middleware('auth');
    
});

Route::get('/blogdetail/{id}','BlogController@detail_blog');
Route::get('/login','AuthController@getlogin')->name('login');
Route::post('/login','AuthController@postlogin');
Route::get('/register','AuthController@getregister')->name('register')->middleware('guest');
Route::post('/register','AuthController@postregister')->middleware('guest');
Route::get('/','AdvProdukController@produk_adv')->name('welcome');
Route::get('/produk','DetailProdukController@index');
Route::get('/blog','BlogController@blog_umkm');
Route::get('/blogkuliner','BlogController@blog_kuliner');
Route::get('/blogfashion','BlogController@blog_fashion');
Route::get('/blogcinmata','BlogController@blog_cinmata');
Route::get('/blogseni','BlogController@blog_seni');
Route::get('/blogkosmetik','BlogController@blog_kosmetik');
Route::get('/blogargo','BlogController@blog_argo');
Route::get('/kategorikuliner','kategoriProdukController@Kategori_kuliner');
Route::get('/kategoriagro','kategoriProdukController@Kategori_agro');
Route::get('/kategoriseni','kategoriProdukController@Kategori_seni');
Route::get('/kategorifashion','kategoriProdukController@Kategori_fashion');
Route::get('/kategoricinmata','kategoriProdukController@Kategori_cinmata');
Route::get('/kategorikosmetik','kategoriProdukController@Kategori_kosmetik');
Route::get('/kategorikuliner/cari','kategoriProdukController@carikuliner');
Route::get('/kategorifashion/cari','kategoriProdukController@carifashion');
Route::get('/kategoricindera/cari','kategoriProdukController@caricindera');
Route::get('/kategorikosmetik/cari','kategoriProdukController@carikosmetik');
Route::get('/kategoriagro/cari','kategoriProdukController@cariagro');
Route::get('/kategoriseni/cari','kategoriProdukController@cariseni');
Route::get('/mitrakuliner','kategorimitraController@Kategori_kuliner');
Route::get('/mitrafashion','kategorimitraController@Kategori_fashion');
Route::get('/mitracinmata','kategorimitraController@Kategori_cinmata');
Route::get('/mitrakosmetik','kategorimitraController@Kategori_kosmetik');
Route::get('/mitraargo','kategorimitraController@Kategori_argo');
Route::get('/mitraseni','kategorimitraController@Kategori_seni');
Route::get('/umkmview/{id}','ProdukController@detail_umkm');
Route::get('/produk/{id}','DetailProdukController@detail_umkm');
// Route::get('/umkmview/{id}','detailumkmController@detail_produk');
Route::get('/logout','AuthController@logout')->name('logout');

Route::get('/gabung', function () {
    return view('gabung');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::group(['middleware' => ['auth','ceklevel:admin,umkm,smauii,okeoc']], function(){
    Route::get('admin/home/', 'homeadminController@adminhome')->name('adminhome')->Middleware('auth');
});

Route::group(['middleware' => ['auth','ceklevel:admin,umkm']], function(){
    Route::prefix('admin/transaksi')->group(function(){
        Route::get('index', 'TransaksiController@datapembeli')->name('transaksiadmin');
        Route::get('create', 'TransaksiController@createtransaksi')->name('createtransaksi');
        Route::post('store', 'TransaksiController@store');
        Route::get('edit/{id}', 'TransaksiController@edit');
        Route::patch('update/{id}', 'TransaksiController@update');
        Route::delete('{id}', 'TransaksiController@delete');
        });

        Route::get('/gabung/formgabung1','FormgabungController@GetProduk')->name('form1')->middleware('auth');
    Route::post('/gabung/formgabung1','FormgabungController@PostProduk1')->middleware('auth');
    Route::get('/gabung/formgabung2','FormgabungController@GetUmkm')->name('form2')->middleware('auth');
    Route::get('/gabung/successgabung','FormgabungController@sukses')->name('sukses')->middleware('auth');
    Route::post('/gabung/formgabung2','FormgabungController@PostUmkm1')->middleware('auth');
});

Route::group(['middleware' => ['auth','ceklevel:admin,smauii']], function(){
    Route::prefix('admin/kasirsmauii')->group(function(){
        Route::get('index', 'TransaksiController@transaksiperbulan')->name('transaksiperbulan');
        Route::get('margine_perbulan', 'TransaksiController@margineperbulan')->name('marginebulanan');
       Route::get('transaksirange', 'TransaksiController@transaksirange')->name('requesttransaksi');
       Route::get('marginerange', 'TransaksiController@marginerange')->name('requestmargine');
       Route::post('rangetanggal', 'TransaksiController@rangetanggal');
       Route::post('rangemargine', 'TransaksiController@rangemargine');
       });

});

Route::group(['middleware' => ['auth','ceklevel:admin,okeoc']], function(){
    Route::prefix('admin/kasirokeoc')->group(function(){
        Route::get('index', 'KasirokocController@transaksiperbulan')->name('transaksiperbulanokoc');
        Route::get('transaksirange', 'KasirokocController@transaksirange')->name('requesttransaksiokoc');
        Route::get('marginerange', 'KasirokocController@marginerange')->name('requestmargineokoc');
        Route::get('margine_perbulan', 'KasirokocController@margineperbulan')->name('marginebulananokoc');
        Route::post('rangetanggal', 'KasirokocController@rangetanggal');
        Route::post('rangemargine', 'KasirokocController@rangemargine');
        });
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
    Route::prefix('admin/anggota')->group(function(){
    Route::get('index', 'AnggotaController@index')->name('anggotaadmin');
    Route::get('edit/{id}', 'AnggotaController@edit');
    Route::get('detail/{id}', 'AnggotaController@detail');
    Route::patch('update/{id}', 'AnggotaController@update');
    Route::delete('{id}', 'AnggotaController@destroy');
});

Route::prefix('admin/sdm')->group(function(){
    Route::get('index', 'SDMController@index')->name('sdmadmin');
    Route::get('create', 'SDMController@create')->name('sdmcreate');
    Route::post('store', 'SDMController@store');
    Route::get('edit/{id}', 'SDMController@edit');
    Route::get('detail/{id}', 'SDMController@detail');
    Route::patch('update/{id}', 'SDMController@update');
    Route::delete('{id}', 'SDMController@destroy');
});
Route::prefix('admin/inputmember')->group(function(){
    Route::get('inputproduk1', 'AnggotaProdukController@GetProduk')->name('input1');
    Route::get('inputmember2', 'AnggotaProdukController@GetUmkm')->name('input2');
    Route::post('formgabung1','AnggotaProdukController@PostProduk1');
    Route::get('edit/{id}', 'AnggotaController@edit');
    Route::get('detail/{id}', 'AnggotaController@detail');
    Route::patch('update/{id}', 'AnggotaController@update');
    Route::delete('{id}', 'AnggotaController@delete');
});

Route::prefix('admin/user')->group(function(){
    Route::get('staff1', 'UserAdminController@indexStaff1')->name('smauii');
    Route::get('smauiicreate', 'UserAdminController@smauiicreate')->name('smauiicreate');
    Route::post('storestaff1', 'UserAdminController@staff1store');
    Route::get('staff1edit/{id}', 'UserAdminController@staff1edit');
    Route::patch('staff1update/{id}', 'UserAdminController@updatestaff1');
    Route::delete('staff1delete/{id}', 'UserAdminController@smauiidelete');

    Route::get('staff2', 'UserAdminController@indexStaff2')->name('okeoc');
    Route::get('okeoccreate', 'UserAdminController@okoccreate')->name('okoccreate');
    Route::post('storestaff2', 'UserAdminController@staff2store');
    Route::get('staff2edit/{id}', 'UserAdminController@staff2edit');
    Route::patch('staff2update/{id}', 'UserAdminController@updatestaff2');
    Route::delete('staff2delete/{id}', 'UserAdminController@okeocdelete');

    Route::get('umkmuser', 'UserAdminController@indexusers')->name('useradmin');
    Route::get('usercreate', 'UserAdminController@usercreate')->name('usercreate');
    Route::post('userstore', 'UserAdminController@userstore');
    Route::get('useredit/{id}', 'UserAdminController@useredit');
    Route::patch('userupdate/{id}', 'UserAdminController@updateuser');
    Route::delete('userdelete/{id}', 'UserAdminController@userdelete');
});

    Route::prefix('admin/kategori')->group(function(){
    Route::get('index', 'KategoriAdminController@index')->name('adminkategori');
    Route::get('create', 'KategoriAdminController@create')->name('kategoricreate');
    Route::post('store', 'KategoriAdminController@store');
    Route::get('edit/{id}', 'KategoriAdminController@edit');
    Route::patch('update/{id}', 'KategoriAdminController@update');
    Route::delete('{id}', 'KategoriAdminController@delete');
    });

    Route::prefix('admin/blog')->group(function(){
    Route::get('index', 'BlogController@blog_admin')->name('blogadmin');
    Route::get('create', 'BlogController@create')->name('createblog');
    Route::post('store', 'BlogController@store');
    Route::get('edit/{id}', 'BlogController@edit');
    Route::patch('update/{id}', 'BlogController@update');
    Route::delete('{id}', 'BlogController@delete');
    });

    
    Route::prefix('admin/produk')->group(function(){
        Route::get('indexproduk', 'ProdukController@indexproduk')->name('produkadmin');
        Route::get('edit/{id}', 'ProdukController@edit');
        Route::get('detail/{id}', 'ProdukUmkmController@detail');
        Route::patch('update/{id}', 'ProdukController@update');
        Route::delete('{id}', 'ProdukController@destroy');
        });
});
Route::get('admin/login','AdminauthController@adminlogin')->name('adminlogin')->middleware('guest');
Route::post('admin/login','AdminauthController@postlogin');
Route::get('admin/logout','AdminauthController@logout')->name('adminlogout');



