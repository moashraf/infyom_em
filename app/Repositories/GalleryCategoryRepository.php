<?php

namespace App\Repositories;

use App\Models\GalleryCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GalleryCategoryRepository
 * @package App\Repositories
 * @version April 10, 2018, 1:57 pm UTC
 *
 * @method GalleryCategory findWithoutFail($id, $columns = ['*'])
 * @method GalleryCategory find($id, $columns = ['*'])
 * @method GalleryCategory first($columns = ['*'])
*/
class GalleryCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GalleryCategory::class;
    }
}
