<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agama
 * @package App\Models
 * @version May 15, 2018, 8:43 pm UTC
 *
 * @property string nama
 */
class Agama extends Model
{
    use SoftDeletes;

    public $table = 'agamas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    public function pegawai(){
        return $this->hasMany('App\Models\Pegawai');
    }

    
}
