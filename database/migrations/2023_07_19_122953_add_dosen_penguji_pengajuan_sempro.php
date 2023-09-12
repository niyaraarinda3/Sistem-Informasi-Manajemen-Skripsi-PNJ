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
        Schema::table('pengajuan_sempro', function (Blueprint $table) {
            $table->string('dosen_penguji1')->nullable();
            $table->string('dosen_penguji2')->nullable();
            $table->string('dosen_penguji3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuan_sempro', function (Blueprint $table) {
            //
        });
    }
};
