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
        Schema::table('validasi', function (Blueprint $table) {
            //
           $table->string('pengiriman')->nullable()->after('status'); 
            $table->string('alamat')->nullable()->after('pengiriman');
            $table->string('email')->nullable()->after('alamat');
            $table->string('telepon')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('validasi', function (Blueprint $table) {
            //
        });
    }
};
