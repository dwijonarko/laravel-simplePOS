<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreateDetailPenjualanTabelsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_detail_penjualan_tabels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penjualan_id')->unsigned();
            $table->integer('barang_id')->unsigned();
            $table->integer('qty');
            $table->integer('subtotal');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('penjualan_id')->references('id')->on('penjualans');
            $table->foreign('barang_id')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('create_detail_penjualan_tabels');
    }
}
