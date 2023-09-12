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
        Schema::create('pengajuan_dospem', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_judul_id');
            $table->foreign('pengajuan_judul_id')->references('id')->on('pengajuan_judul');
            $table->string('nip_dospem');
            $table->foreign('nip_dospem')->references('nip')->on('dosen');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_dospem');
    }
};
