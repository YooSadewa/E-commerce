<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama_barang')->unique();
            $table->string('harga_barang');
            $table->integer('stok');
            $table->text('deskripsi_barang');
            $table->enum('kategori',['keyboard','mouse','audio','gear']);
            $table->binary('foto_utama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
