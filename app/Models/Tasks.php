<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tasks
 * @package App\Models
 * @version May 26, 2019, 8:22 am UTC
 *
 * @property integer user_id
 * @property string title
 * @property string instruction
 * @property integer reward_points
 */
class Tasks extends Model
{
    use SoftDeletes;

    public $table = 'tasks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'title',
        'instruction',
        'reward_points'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'title' => 'string',
        'instruction' => 'string',
        'reward_points' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'title' => 'required',
        'reward_points' => 'required',
        'created_at' => 'required'
    ];

    
}
