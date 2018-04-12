<?php

namespace App\Repositories;

use App\Models\stings;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class stingsRepository
 * @package App\Repositories
 * @version April 10, 2018, 1:42 pm UTC
 *
 * @method stings findWithoutFail($id, $columns = ['*'])
 * @method stings find($id, $columns = ['*'])
 * @method stings first($columns = ['*'])
*/
class stingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key',
        'value',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return stings::class;
    }
}
