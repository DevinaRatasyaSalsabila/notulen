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
        Schema::create('peserta_notulen', function (Blueprint $table) {
            $table->id();
            $table->integer('id_notulen')->nullable();
            $table->text('nama_peserta')->nullable();
            $table->text('jabatan')->nullable();
            $table->text('jabatan_rapat')->nullable();
            $table->text('ttd')->nullable();
            $table->string('urutan', 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_notulen');
    }
};
