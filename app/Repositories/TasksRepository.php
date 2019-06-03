<?php

namespace App\Repositories;

use App\Models\Tasks;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TasksRepository
 * @package App\Repositories
 * @version May 26, 2019, 8:22 am UTC
 *
 * @method Tasks findWithoutFail($id, $columns = ['*'])
 * @method Tasks find($id, $columns = ['*'])
 * @method Tasks first($columns = ['*'])
*/
class TasksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'title',
        'instruction',
        'reward_points'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tasks::class;
    }
}
