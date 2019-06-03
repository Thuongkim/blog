<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tasks->id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $tasks->user_id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $tasks->title !!}</p>
</div>

<!-- Instruction Field -->
<div class="form-group">
    {!! Form::label('instruction', 'Instruction:') !!}
    <p>{!! $tasks->instruction !!}</p>
</div>

<!-- Reward Points Field -->
<div class="form-group">
    {!! Form::label('reward_points', 'Reward Points:') !!}
    <p>{!! $tasks->reward_points !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tasks->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tasks->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $tasks->deleted_at !!}</p>
</div>

