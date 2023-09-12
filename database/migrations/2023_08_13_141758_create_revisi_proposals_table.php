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
        Schema::create('revisi_proposal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_sempro_id');
            $table->foreign('hasil_sempro_id')->references('id')->on('hasil_sempro');
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('nip_penguji')->nullable();
            $table->string('judul')->nullable();
            $table->string('sub_judul')->nullable();
            $table->string('poin_revisi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisi_proposal');
    }
};
