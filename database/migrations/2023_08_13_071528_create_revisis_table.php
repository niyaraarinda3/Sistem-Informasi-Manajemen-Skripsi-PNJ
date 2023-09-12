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
        Schema::create('revisi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_sidang_id')->nullable(); // Diubah menjadi nullable
            $table->foreign('hasil_sidang_id')->references('id')->on('hasil_sidang');
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('nip_penguji')->nullable();
            $table->string('judul')->nullable();
            $table->string('sub_judul')->nullable();
            $table->text('link_vidio')->nullable();
            $table->string('poin_revisi')->nullable();
            $table->string('feedback')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisis');
    }
};
