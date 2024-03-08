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
        Schema::create('minjam', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('status');
            $table->string('peminjam');
            $table->integer('jml_pinjam');
            $table->unsignedBigInteger('id_buku');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_buku')->references('id')->on('buku')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minjams');
    }
};
