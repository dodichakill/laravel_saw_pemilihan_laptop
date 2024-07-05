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
        Schema::create('tb_nilai', function (Blueprint $table) {
            $table->string('id')->primary()->autoIncrement();
            $table->string('id_alt')->nullable();
            $table->integer('harga');
            $table->integer('skor_prosesor');
            $table->integer('ram');
            $table->integer('penyimpanan');
            $table->integer('ukuran_layar');
            $table->integer('daya_baterai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_nilai');
    }
};
