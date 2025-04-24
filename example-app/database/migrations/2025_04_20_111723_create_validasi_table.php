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
        Schema::create('validasi', function (Blueprint $table) {
            $table->id();
            $table->string('user')->nullable();         // Nama user
            $table->string('product');                  // Nama produk
            $table->integer('yang_dibeli');             // Jumlah dibeli
            $table->string('foto');                     // URL gambar produk
            $table->bigInteger('harga');                // Harga produk
           
            $table->timestamps();                       // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi');
    }
};
