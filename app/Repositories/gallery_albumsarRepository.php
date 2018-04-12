<?php

namespace App\Repositories;

use App\Models\gallery_albumsar;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class gallery_albumsarRepository
 * @package App\Repositories
 * @version April 11, 2018, 6:55 pm UTC
 *
 * @method gallery_albumsar findWithoutFail($id, $columns = ['*'])
 * @method gallery_albumsar find($id, $columns = ['*'])
 * @method gallery_albumsar first($columns = ['*'])
*/
class gallery_albumsarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'photo',
        'cat_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return gallery_albumsar::class;
    }
}
