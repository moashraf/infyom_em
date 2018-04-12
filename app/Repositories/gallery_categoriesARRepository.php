<?php

namespace App\Repositories;

use App\Models\gallery_categoriesAR;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class gallery_categoriesARRepository
 * @package App\Repositories
 * @version April 12, 2018, 7:39 am UTC
 *
 * @method gallery_categoriesAR findWithoutFail($id, $columns = ['*'])
 * @method gallery_categoriesAR find($id, $columns = ['*'])
 * @method gallery_categoriesAR first($columns = ['*'])
*/
class gallery_categoriesARRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return gallery_categoriesAR::class;
    }
}
