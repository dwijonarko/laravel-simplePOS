<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $table = 'create_detail_penjualan_tabels';

    public function penjualan(){
        return $this->belongsTo('\App\Models\Penjualan');
    }

    public function barang($id)
    {
        // return $this->hasOne('\App\Models\Barang','barang_id');
        return \App\Models\Barang::find($id)->first();
    }

}
