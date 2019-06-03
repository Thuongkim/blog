<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $taskUser->id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $taskUser->user_id !!}</p>
</div>

<!-- Task Id Field -->
<div class="form-group">
    {!! Form::label('task_id', 'Task Id:') !!}
    <p>{!! $taskUser->task_id !!}</p>
</div>

<!-- Reward Points Field -->
<div class="form-group">
    {!! Form::label('reward_points', 'Reward Points:') !!}
    <p>{!! $taskUser->reward_points !!}</p>
</div>

<!-- Proof Field -->
<div class="form-group">
    {!! Form::label('proof', 'Proof:') !!}
    <p>{!! $taskUser->proof !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $taskUser->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $taskUser->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $taskUser->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $taskUser->deleted_at !!}</p>
</div>

