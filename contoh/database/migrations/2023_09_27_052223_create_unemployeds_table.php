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
        Schema::create('unemployeds', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jenkel', ['Pria', 'Wanita']);
            $table->bigInteger('notelp');
            $table->string('email');
            $table->string('alamat');
            $table->integer('kodepos');
            $table->string('kota');
            $table->string('foto')->nullable(); // Kolom foto
            $table->date('tanggal_lahir')->nullable(); // Kolom tanggal_lahir
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unemployeds');
    }
};
