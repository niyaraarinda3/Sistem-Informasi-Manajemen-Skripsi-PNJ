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
        Schema::create('pengajuan_sempro', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('judul');
            $table->string('sub_judul')->nullable();
            $table->string('anggota')->nullable();
            $table->dateTime('jadwal_sempro')->nullable();
            $table->string('ruang')->nullable();
            $table->string('status')->nullable();
            $table->float('nilai_pembimbing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_sempro');
    }
};
