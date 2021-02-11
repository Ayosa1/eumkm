<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota_umkm extends Model
{
    protected $table = 'anggota_umkm';
    protected $guarded = [
        'id'
    ];

    public function anggotakeproduk()
    {
        return $this->hasMany(produk_umkm::class,'id_anggota');
    }

    public function anggota_umkm()
    {
        return $this->belongsTo(anggota_umkm::class,'id_anggota');
    }

}
