<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class sliders
 * @package App\Models
 * @version April 10, 2018, 1:29 pm UTC
 *
 * @property string title
 * @property string body
 * @property string photo
 * @property string lang
 */
class sliders extends Model
{
    use SoftDeletes;

    public $table = 'sliders';
    

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
