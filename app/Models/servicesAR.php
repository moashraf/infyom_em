<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class servicesAR
 * @package App\Models
 * @version April 12, 2018, 7:42 am UTC
 *
 * @property string title
 * @property string body
 * @property string link
 * @property string photo
 */
class servicesAR extends Model
{
    use SoftDeletes;

    public $table = 'services_a_rs';
    

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
        'body' => 'required|min:3',
        'link' => 'required|url|min:3',
        'photo' => 'required|mimes:jpeg,jpg,png,gif'
    ];

    
}
