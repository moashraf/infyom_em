<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class stings
 * @package App\Models
 * @version April 10, 2018, 1:42 pm UTC
 *
 * @property string key
 * @property string value
 * @property string lang
 */
class stings extends Model
{
    use SoftDeletes;

    public $table = 'stings';
    

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
        'value' => 'string|min:3' 
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      //  'key' => 'required',
        'value' => 'required' 
    ];

    
}
