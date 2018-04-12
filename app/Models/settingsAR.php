<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class settingsAR
 * @package App\Models
 * @version April 12, 2018, 7:46 am UTC
 *
 * @property string key
 * @property string value
 */
class settingsAR extends Model
{
    use SoftDeletes;

    public $table = 'settings_a_rs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'key',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'key' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       // 'key' => 'required',
        'value' => 'required|min:3'
    ];

    
}
