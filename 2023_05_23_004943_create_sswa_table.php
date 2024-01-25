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
        Schema::create('sswa', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->enum('Kelas',['X','XI','XII']);
            $table->enum('Jurusan',['RPL','ORACLE','TKJ','AXIO','PM','ATPH','KIMIA','TEI']);
            $table->enum('Jenis_kelamin',['L','P']);
            $table->text('Alasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sswa');
    }
};
