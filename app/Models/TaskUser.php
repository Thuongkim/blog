<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TaskUser
 * @package App\Models
 * @version May 26, 2019, 8:25 am UTC
 *
 * @property integer user_id
 * @property integer task_id
 * @property integer reward_points
 * @property string proof
 * @property integer status
 */
class TaskUser extends Model
{
    use SoftDeletes;

    public $table = 'task_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'task_id',
        'reward_points',
        'proof',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'task_id' => 'integer',
        'reward_points' => 'integer',
        'proof' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'task_id' => 'required',
        'reward_points' => 'required',
        'status' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'deleted_at' => 'required'
    ];

    
}
