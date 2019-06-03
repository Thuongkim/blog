<div class="table-responsive">
    <table class="table" id="tasks-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>Instruction</th>
        <th>Reward Points</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $tasks)
            <tr>
                <td>{!! $tasks->user_id !!}</td>
            <td>{!! $tasks->title !!}</td>
            <td>{!! $tasks->instruction !!}</td>
            <td>{!! $tasks->reward_points !!}</td>
                <td>
                    {!! Form::open(['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tasks.show', [$tasks->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tasks.edit', [$tasks->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
