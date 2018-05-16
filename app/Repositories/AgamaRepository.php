<?php

namespace App\Repositories;

use App\Models\Agama;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgamaRepository
 * @package App\Repositories
 * @version May 15, 2018, 8:43 pm UTC
 *
 * @method Agama findWithoutFail($id, $columns = ['*'])
 * @method Agama find($id, $columns = ['*'])
 * @method Agama first($columns = ['*'])
*/
class AgamaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agama::class;
    }
}
