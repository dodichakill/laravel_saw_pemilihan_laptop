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
        Schema::create('tb_alternatif', function (Blueprint $table) {
            $table->string('id_alternatif', 16)->primary();
            $table->string('nama_alternatif', 255);
            $table->integer('harga', 255);
            $table->integer('skor_prosesor', 255);
            $table->integer('ram', 255);
            $table->integer('penyimpanan', 255);
            $table->integer('layar', 255);
            $table->integer('baterai', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_alternatif');
    }
};
