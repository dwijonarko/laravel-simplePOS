<?php

namespace App\Repositories;

use App\Models\Pelanggan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PelangganRepository
 * @package App\Repositories
 * @version May 15, 2018, 8:48 pm UTC
 *
 * @method Pelanggan findWithoutFail($id, $columns = ['*'])
 * @method Pelanggan find($id, $columns = ['*'])
 * @method Pelanggan first($columns = ['*'])
*/
class PelangganRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'alamat',
        'telp',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pelanggan::class;
    }
}
