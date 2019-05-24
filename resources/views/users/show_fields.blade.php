<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $user->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{!! $user->password !!}</p>
</div>

<!-- Reffered By Field -->
<div class="form-group">
    {!! Form::label('reffered_by', 'Reffered By:') !!}
    <p>{!! $user->reffered_by !!}</p>
</div>

<!-- No Of Refs Field -->
<div class="form-group">
    {!! Form::label('no_of_refs', 'No Of Refs:') !!}
    <p>{!! $user->no_of_refs !!}</p>
</div>

<!-- Ref Level Id Field -->
<div class="form-group">
    {!! Form::label('ref_level_id', 'Ref Level Id:') !!}
    <p>{!! $user->ref_level_id !!}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role Id:') !!}
    <p>{!! $user->role_id !!}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{!! $user->remember_token !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $user->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $user->updated_at !!}</p>
</div>

