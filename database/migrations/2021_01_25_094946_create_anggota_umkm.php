<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaUmkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_umkm', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->string('nama_umkm');
            $table->string('nama_pemilik');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('nomor_hp')->unique();
            $table->text('deskripsi_awal');
            $table->text('deskripsi');
            $table->text('foto_logo_umkm');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategori_umkm');
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id_produk')->on('produk_umkm');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_umkm');
    }
}
