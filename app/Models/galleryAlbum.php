<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class galleryAlbum
 * @package App\Models
 * @version April 10, 2018, 2:00 pm UTC
 *
 * @property string title
 * @property string body
 * @property string photo
 * @property string lang
 * @property integer cat_id
 */
class galleryAlbum extends Model
{
    use SoftDeletes;

    public $table = 'gallery_albums';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'photo',
        'cat_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'photo' => 'string',
         'cat_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:3' ,
        'body' => 'required|min:3' ,
        'photo' => 'required|mimes:jpeg,jpg,png,gif',
         'cat_id' => 'required'
    ];

         public function get_projects_cat()
{
     return $this->hasOne('App\Models\GalleryCategory','id','cat_id');
}



    
}
