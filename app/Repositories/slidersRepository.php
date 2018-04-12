<?php

namespace App\Repositories;

use App\Models\sliders;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class slidersRepository
 * @package App\Repositories
 * @version April 10, 2018, 1:29 pm UTC
 *
 * @method sliders findWithoutFail($id, $columns = ['*'])
 * @method sliders find($id, $columns = ['*'])
 * @method sliders first($columns = ['*'])
*/
class slidersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'photo',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return sliders::class;
    }
}
