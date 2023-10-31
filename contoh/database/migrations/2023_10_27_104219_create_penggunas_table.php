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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna');
            $table->foreignId('id_datadiri')->references('id')->on('unemployeds');
            $table->foreignId('id_pendidikan')->references('id')->on('riwayat_pendidikan');
            $table->foreignId('id_portofolio')->references('id')->on('portofolio');
            $table->foreignId('users_id')->references('id_users')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
