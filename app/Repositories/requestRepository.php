<?php

namespace App\Repositories;

use App\Models\request;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class requestRepository
 * @package App\Repositories
 * @version April 10, 2018, 3:00 pm UTC
 *
 * @method request findWithoutFail($id, $columns = ['*'])
 * @method request find($id, $columns = ['*'])
 * @method request first($columns = ['*'])
*/
class requestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'message',
        'tel'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return request::class;
    }
}
