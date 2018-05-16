<?php

namespace App\Repositories;

use App\Models\Pegawai;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PegawaiRepository
 * @package App\Repositories
 * @version May 15, 2018, 8:56 pm UTC
 *
 * @method Pegawai findWithoutFail($id, $columns = ['*'])
 * @method Pegawai find($id, $columns = ['*'])
 * @method Pegawai first($columns = ['*'])
*/
class PegawaiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pegawai::class;
    }
}
