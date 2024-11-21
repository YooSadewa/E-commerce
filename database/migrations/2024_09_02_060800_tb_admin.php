<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('nama_admin');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('telp');
            $table->string('foto_admin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_admin');
    }
};
