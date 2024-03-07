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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_destinasi');
            $table->string('kota_destinasi');
            $table->string('provinsi_destinasi');
            $table->string('kategori_destinasi');
            $table->string('harga_destinasi');
            $table->string('deskripsi_destinasi');
            $table->string('gambar_destinasi');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
