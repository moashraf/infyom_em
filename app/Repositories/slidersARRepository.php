<?php

namespace App\Repositories;

use App\Models\slidersAR;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class slidersARRepository
 * @package App\Repositories
 * @version April 12, 2018, 7:43 am UTC
 *
 * @method slidersAR findWithoutFail($id, $columns = ['*'])
 * @method slidersAR find($id, $columns = ['*'])
 * @method slidersAR first($columns = ['*'])
*/
class slidersARRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return slidersAR::class;
    }
}
