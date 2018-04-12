<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class gallery_categoriesAR
 * @package App\Models
 * @version April 12, 2018, 7:39 am UTC
 *
 * @property string title
 * @property string body
 */
class gallery_categoriesAR extends Model
{
    use SoftDeletes;

    public $table = 'gallery_categories_a_rs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:3' ,
        'body' => 'required'
    ];

    
}
