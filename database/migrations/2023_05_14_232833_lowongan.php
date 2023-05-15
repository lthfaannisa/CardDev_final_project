<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string("nama_instansi");
            $table->string("foto_instansi");
            $table->string("posisi");
            $table->string("website_instansi");
            $table->string("email_instansi");
            $table->string("lokasi_instansi");
            $table->string("bidang_minat");
            $table->string("persyaratan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};