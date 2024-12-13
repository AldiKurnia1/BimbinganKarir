<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->string('alamat', 255)->nullable();
            $table->unsignedBigInteger('no_hp');
            $table->unsignedBigInteger('id_poli');
            $table->foreign('id_poli')->references('id')->on('poli')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}