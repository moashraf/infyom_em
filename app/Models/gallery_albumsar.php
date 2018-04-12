<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class gallery_albumsar
 * @package App\Models
 * @version April 11, 2018, 6:55 pm UTC
 *
 * @property string title
 * @property string body
 * @property string photo
 * @property string cat_id
 */
class gallery_albumsar extends Model
{
    use SoftDeletes;

    public $table = 'gallery_albumsars';
    

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
        'cat_id' => 'string'
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

    
}
