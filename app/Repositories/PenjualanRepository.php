<?php

namespace App\Repositories;

use App\Models\Penjualan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PenjualanRepository
 * @package App\Repositories
 * @version May 16, 2018, 3:48 am UTC
 *
 * @method Penjualan findWithoutFail($id, $columns = ['*'])
 * @method Penjualan find($id, $columns = ['*'])
 * @method Penjualan first($columns = ['*'])
*/
class PenjualanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'pelanggan_id',
        'pegawai_id',
        'total'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Penjualan::class;
    }
}
