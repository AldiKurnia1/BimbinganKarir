<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_poli', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_jadwal');
            $table->text('keluhan');
            $table->integer('no_antrian')->nullable(); // Jika no_antrian bisa kosong
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('id_pasien')->references('id')->on('pasien')->onDelete('cascade');
            $table->foreign('id_jadwal')->references('id')->on('jadwal_periksa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_poli');
    }
}
