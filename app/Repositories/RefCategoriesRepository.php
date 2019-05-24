<?php

namespace App\Repositories;

use App\Models\RefCategories;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RefCategoriesRepository
 * @package App\Repositories
 * @version May 23, 2019, 8:19 pm UTC
 *
 * @method RefCategories findWithoutFail($id, $columns = ['*'])
 * @method RefCategories find($id, $columns = ['*'])
 * @method RefCategories first($columns = ['*'])
*/
class RefCategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
       'name',
        'user_id',
        'referral_visits',
        'referrral_count',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RefCategories::class;
    }
}
