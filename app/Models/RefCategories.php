<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefCategories
 * @package App\Models
 * @version May 23, 2019, 8:19 pm UTC
 *
 * @property string name
 */
class RefCategories extends Model
{
    use SoftDeletes;

    public $table = 'ref_categoties';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'user_id',
        'referral_visits',
        'referrral_count',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id' => 'integer',
        'referral_visits' => 'integer',
        'referrral_count' => 'integer',
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
