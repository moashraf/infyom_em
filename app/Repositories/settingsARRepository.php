<?php

namespace App\Repositories;

use App\Models\settingsAR;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class settingsARRepository
 * @package App\Repositories
 * @version April 12, 2018, 7:46 am UTC
 *
 * @method settingsAR findWithoutFail($id, $columns = ['*'])
 * @method settingsAR find($id, $columns = ['*'])
 * @method settingsAR first($columns = ['*'])
*/
class settingsARRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key',
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return settingsAR::class;
    }
}
