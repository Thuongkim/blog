<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskUserRequest;
use App\Http\Requests\UpdateTaskUserRequest;
use App\Repositories\TaskUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TaskUserController extends AppBaseController
{
    /** @var  TaskUserRepository */
    private $taskUserRepository;

    public function __construct(TaskUserRepository $taskUserRepo)
    {
        $this->taskUserRepository = $taskUserRepo;
    }

    /**
     * Display a listing of the TaskUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->taskUserRepository->pushCriteria(new RequestCriteria($request));
        $taskUsers = $this->taskUserRepository->all();

        return view('task_users.index')
            ->with('taskUsers', $taskUsers);
    }

    /**
     * Show the form for creating a new TaskUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('task_users.create');
    }

    /**
     * Store a newly created TaskUser in storage.
     *
     * @param CreateTaskUserRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskUserRequest $request)
    {
        $input = $request->all();

        $taskUser = $this->taskUserRepository->create($input);

        Flash::success('Task User saved successfully.');

        return redirect(route('taskUsers.index'));
    }

    /**
     * Display the specified TaskUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $taskUser = $this->taskUserRepository->findWithoutFail($id);

        if (empty($taskUser)) {
            Flash::error('Task User not found');

            return redirect(route('taskUsers.index'));
        }

        return view('task_users.show')->with('taskUser', $taskUser);
    }

    /**
     * Show the form for editing the specified TaskUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $taskUser = $this->taskUserRepository->findWithoutFail($id);

        if (empty($taskUser)) {
            Flash::error('Task User not found');

            return redirect(route('taskUsers.index'));
        }

        return view('task_users.edit')->with('taskUser', $taskUser);
    }

    /**
     * Update the specified TaskUser in storage.
     *
     * @param  int              $id
     * @param UpdateTaskUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskUserRequest $request)
    {
        $taskUser = $this->taskUserRepository->findWithoutFail($id);

        if (empty($taskUser)) {
            Flash::error('Task User not found');

            return redirect(route('taskUsers.index'));
        }

        $taskUser = $this->taskUserRepository->update($request->all(), $id);

        Flash::success('Task User updated successfully.');

        return redirect(route('taskUsers.index'));
    }

    /**
     * Remove the specified TaskUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $taskUser = $this->taskUserRepository->findWithoutFail($id);

        if (empty($taskUser)) {
            Flash::error('Task User not found');

            return redirect(route('taskUsers.index'));
        }

        $this->taskUserRepository->delete($id);

        Flash::success('Task User deleted successfully.');

        return redirect(route('taskUsers.index'));
    }
}
