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
        Schema::create('penyerahan_alat', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('judul');
            $table->string('sub_judul')->nullable();
            $table->string('anggota')->nullable();
            $table->text('file_f13');
            $table->text('file_f14');
            $table->text('link_video');
            $table->text('sertifikat_pkkp');
            $table->text('sertifikat_toeic');
            $table->text('sertifikat_lomba');
            $table->text('sertifikat_kejuaraan')->nullable();
            $table->text('sertifikat_organisasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyerahan_alat');
    }
};
