<?php

namespace App\Repositories;

use App\Models\Barang;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BarangRepository
 * @package App\Repositories
 * @version May 11, 2018, 2:20 am UTC
 *
 * @method Barang findWithoutFail($id, $columns = ['*'])
 * @method Barang find($id, $columns = ['*'])
 * @method Barang first($columns = ['*'])
*/
class BarangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode',
        'nama',
        'keterangan',
        'stock',
        'harga',
        'kategori_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Barang::class;
    }
}
