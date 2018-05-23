<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Agama;
/**
 * Class Pegawai
 * @package App\Models
 * @version May 15, 2018, 8:56 pm UTC
 *
 * @property string nik
 * @property string nama
 * @property string tempat_lahir
 * @property date tanggal_lahir
 * @property string alamat
 * @property string email
 * @property string telp
 * @property string foto
 * @property integer agama_id
 */
class Pegawai extends Model
{
    use SoftDeletes;

    public $table = 'pegawais';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'email',
        'telp',
        'foto',
        'agama_id'
    ];
    // protected $dateFormat = 'Y-m-d';
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nik' => 'string',
        'nama' => 'string',
        'tempat_lahir' => 'string',
        'tanggal_lahir' => 'string',
        'alamat' => 'string',
        'email' => 'string',
        'telp' => 'string',
        'foto' => 'string',
        'agama_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nik' => 'required|min:3',
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'email' => 'required|min:3|email',
        'telp' => 'required|between:5,20',
        'foto' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'agama_id' => 'required'
    ];

    public function agama(){
        return $this->belongsTo('App\Models\Agama');
        // return $this->belongsTo('Agama');
    }

    public function penjualan()
    {
        return $this->hasMany('\App\Models\Penjualan');
    }  
    
}
