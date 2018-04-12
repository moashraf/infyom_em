<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class slidersAR
 * @package App\Models
 * @version April 12, 2018, 7:43 am UTC
 *
 * @property string title
 * @property string body
 * @property string photo
 */
class slidersAR extends Model
{
    use SoftDeletes;

    public $table = 'sliders_a_rs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
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
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:3',
        'body' => 'required|min:3',
        'photo' => 'required|mimes:jpeg,jpg,png,gif'
    ];

    
}
