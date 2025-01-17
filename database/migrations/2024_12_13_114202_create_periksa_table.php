<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->integer('id_daftar_poli')->unsigned();
            $table->date('tgl_periksa');
            $table->text('catatan');
            $table->integer('biaya_periksa');

            $table->foreign('id_daftar_poli')
                ->references('id')
                ->on('daftar_poli')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periksa');
    }
}