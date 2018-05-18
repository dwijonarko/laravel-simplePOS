<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenjualansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->integer('pelanggan_id')->unsigned();
            $table->integer('pegawai_id')->unsigned();
            $table->integer('total');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans');
            $table->foreign('pegawai_id')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penjualans');
    }
}
