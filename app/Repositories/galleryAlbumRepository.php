<?php

namespace App\Repositories;

use App\Models\galleryAlbum;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class galleryAlbumRepository
 * @package App\Repositories
 * @version April 10, 2018, 2:00 pm UTC
 *
 * @method galleryAlbum findWithoutFail($id, $columns = ['*'])
 * @method galleryAlbum find($id, $columns = ['*'])
 * @method galleryAlbum first($columns = ['*'])
*/
class galleryAlbumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'photo',
        'lang',
        'cat_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return galleryAlbum::class;
    }
}
