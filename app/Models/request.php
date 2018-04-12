<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class request
 * @package App\Models
 * @version April 10, 2018, 3:00 pm UTC
 *
 * @property string name
 * @property string email
 * @property string message
 * @property string tel
 */
class request extends Model
{
    use SoftDeletes;

    public $table = 'requests';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'message',
        'tel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'message' => 'string',
        'tel' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'min:5',
        'email' => 'min:5',
        'message' => 'min:5',
        'tel' => 'min:5'
    ];

    
}
