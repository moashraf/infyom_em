<?php

namespace App\Repositories;

use App\Models\servicesAR;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class servicesARRepository
 * @package App\Repositories
 * @version April 12, 2018, 7:42 am UTC
 *
 * @method servicesAR findWithoutFail($id, $columns = ['*'])
 * @method servicesAR find($id, $columns = ['*'])
 * @method servicesAR first($columns = ['*'])
*/
class servicesARRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'link',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return servicesAR::class;
    }
}
