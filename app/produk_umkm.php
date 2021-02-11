<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk_umkm extends Model
{
    protected $table = 'produk_umkm';

    public function anggota_umkm()
    {
        return $this->belongsTo(anggota_umkm::class,'id_anggota');
    }

    public function kategori_umkm()
    {
        return $this->belongsTo(kategori_umkm::class,'id_kategori');
    }
}
