<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pelanggan
 * @package App\Models
 * @version May 15, 2018, 8:48 pm UTC
 *
 * @property string nama
 * @property string alamat
 * @property string telp
 * @property string email
 */
class Pelanggan extends Model
{
    use SoftDeletes;

    public $table = 'pelanggans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'alamat',
        'telp',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'alamat' => 'string',
        'telp' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|min:3',
        'telp' => 'required|min:5|max:20',
        'email' => 'required|min:5|email'
    ];

    public function penjualan(){
        return $this->hasMany('\App\Models\Penjualan');
    }   
}
