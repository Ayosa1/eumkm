<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogUmkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_umkm', function (Blueprint $table) {
            $table->id('id_blog');
            $table->unsignedBigInteger('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota_umkm');
            $table->string('judul_blog');
            $table->string('deskripsi_awal');
            $table->string('deskripsi_lanjutan');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategori_umkm');
            $table->date('tanggal_terbit');
            $table->text('foto_blog');
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
        Schema::dropIfExists('blog_umkm');
    }
}
