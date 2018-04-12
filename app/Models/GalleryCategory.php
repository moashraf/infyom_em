<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GalleryCategory
 * @package App\Models
 * @version April 10, 2018, 1:57 pm UTC
 *
 * @property string title
 * @property string body
 * @property string lang
 */
class GalleryCategory extends Model
{
    use SoftDeletes;

    public $table = 'gallery_categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body' 
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string' 
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:3' ,
        'body' => 'required|min:3'  
    ];

    
}
