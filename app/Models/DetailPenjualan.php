<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetailPenjualan
 * @package App\Models
 * @version May 23, 2018, 2:08 am UTC
 *
 * @property integer barang_id
 * @property integer penjualan_id
 * @property integer qty
 * @property integer subtotal
 */
class DetailPenjualan extends Model
{
    use SoftDeletes;

    public $table = 'detail_penjualans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'barang_id',
        'penjualan_id',
        'qty',
        'subtotal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'barang_id' => 'integer',
        'penjualan_id' => 'integer',
        'qty' => 'integer',
        'subtotal' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function penjualan()
    {
        return $this->belongsTo('\App\Models\Penjualan');
    }

    public function barang($id)
    {
        return \App\Models\Barang::where('id',$id)->first();
    }


}
