<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukUmkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_umkm', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_index_produk');
            $table->string('nama_produk1');
            $table->string('deskripsi_produk1');
            $table->text('foto_produk1');
            $table->string('nama_produk2');
            $table->string('deskripsi_produk2');
            $table->text('foto_produk2');
            $table->string('nama_produk3');
            $table->string('deskripsi_produk3');
            $table->text('foto_produk3');
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
        Schema::dropIfExists('produk_umkm');
    }
}
