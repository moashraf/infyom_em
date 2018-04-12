<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Services
 * @package App\Models
 * @version April 10, 2018, 1:54 pm UTC
 *
 * @property string title
 * @property string body
 * @property string link
 * @property string lang
 * @property string photo
 */
class Services extends Model
{
    use SoftDeletes;

    public $table = 'services';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'link',
         'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'link' => 'string',
         'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:3' ,
        'body' => 'required|min:3' ,
        'link' => 'required|url|min:3',
         'photo' => 'required|mimes:jpeg,jpg,png,gif'
    ];

    
}
