<?php

namespace App\Repositories;

use App\Models\RefLevel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RefLevelRepository
 * @package App\Repositories
 * @version May 23, 2019, 8:17 pm UTC
 *
 * @method RefLevel findWithoutFail($id, $columns = ['*'])
 * @method RefLevel find($id, $columns = ['*'])
 * @method RefLevel first($columns = ['*'])
*/
class RefLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'reward',
        'congrat_message',
        'target_no_refferrals',
        'point_per_refferrals'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RefLevel::class;
    }
}
