<?php

namespace App\Repositories;

use App\Models\TaskUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TaskUserRepository
 * @package App\Repositories
 * @version May 26, 2019, 8:25 am UTC
 *
 * @method TaskUser findWithoutFail($id, $columns = ['*'])
 * @method TaskUser find($id, $columns = ['*'])
 * @method TaskUser first($columns = ['*'])
*/
class TaskUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'task_id',
        'reward_points',
        'proof',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TaskUser::class;
    }
}
