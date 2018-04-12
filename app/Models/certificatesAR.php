<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class certificatesAR
 * @package App\Models
 * @version April 11, 2018, 6:51 pm UTC
 *
 * @property string title
 * @property string photo
 */
class certificatesAR extends Model
{
    use SoftDeletes;

    public $table = 'certificates_a_rs';
    

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
        'title' => 'string|min:3' ,
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'photo' => 'required|mimes:jpeg,jpg,png,gif'
    ];

    
}
