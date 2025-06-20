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
        Schema::create('notulen', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('id_bagian')->nullable();
            $table->dateTime('tgl')->nullable();
            $table->text('tahunajaran')->nullable();
            $table->longText('agenda')->nullable();
            $table->longText('kesimpulan')->nullable();
            $table->integer('id_guru')->nullable();
            $table->enum('status', ['draft', 'final'])->nullable();
            $table->longText('tempat')->nullable();
            $table->enum('jenis_undangan', ['umum', 'khusus'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notulen');
    }
};
