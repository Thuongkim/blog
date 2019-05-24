<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefLevel
 * @package App\Models
 * @version May 23, 2019, 8:17 pm UTC
 *
 * @property string name
 * @property string description
 * @property string reward
 * @property string congrat_message
 * @property string target_no_refferrals
 * @property string point_per_refferrals
 */
class RefLevel extends Model
{
    use SoftDeletes;

    public $table = 'ref_levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'reward',
        'congrat_message',
        'target_no_refferrals',
        'point_per_refferrals'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'reward' => 'string',
        'congrat_message' => 'string',
        'target_no_refferrals' => 'string',
        'point_per_refferrals' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
