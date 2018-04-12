<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Certificates
 * @package App\Models
 * @version April 10, 2018, 1:48 pm UTC
 *
 * @property string title
 * @property string lang
 */
class Certificates extends Model
{
    use SoftDeletes;

    public $table = 'certificates';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'photo' => 'required|mimes:jpeg,jpg,png,gif',
        'title' => 'required|min:3' 
    ];

    
}
