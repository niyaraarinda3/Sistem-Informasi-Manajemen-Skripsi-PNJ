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
        Schema::create('skripsi', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('nip_dospem');
            $table->foreign('nip_dospem')->references('nip')->on('dosen');
            $table->string('judul');
            $table->text('file_skripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skripsi');
    }
};
