<div class="table-responsive">
    <table class="table" id="taskUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Task Id</th>
        <th>Reward Points</th>
        <th>Proof</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($taskUsers as $taskUser)
            <tr>
                <td>{!! $taskUser->user_id !!}</td>
            <td>{!! $taskUser->task_id !!}</td>
            <td>{!! $taskUser->reward_points !!}</td>
            <td>{!! $taskUser->proof !!}</td>
            <td>{!! $taskUser->status !!}</td>
                <td>
                    {!! Form::open(['route' => ['taskUsers.destroy', $taskUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('taskUsers.show', [$taskUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('taskUsers.edit', [$taskUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
