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
        Schema::create('riwayatkerja', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('jabatan');
            $table->year('tahun_mbekerja');
            $table->year('tahun_sbekerja');
            $table->string('bulan_mbekerja');
            $table->string('bulan_sbekerja');
            // Tambahkan kolom lain sesuai kebutuhan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayatkerja');
    }
};
