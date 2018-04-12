<?php

namespace App\Repositories;

use App\Models\Services;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServicesRepository
 * @package App\Repositories
 * @version April 10, 2018, 1:54 pm UTC
 *
 * @method Services findWithoutFail($id, $columns = ['*'])
 * @method Services find($id, $columns = ['*'])
 * @method Services first($columns = ['*'])
*/
class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'link',
        'lang',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Services::class;
    }
}
