<?php

namespace App\Repositories;

use App\Models\certificatesAR;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class certificatesARRepository
 * @package App\Repositories
 * @version April 11, 2018, 6:51 pm UTC
 *
 * @method certificatesAR findWithoutFail($id, $columns = ['*'])
 * @method certificatesAR find($id, $columns = ['*'])
 * @method certificatesAR first($columns = ['*'])
*/
class certificatesARRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return certificatesAR::class;
    }
}
