<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Reffered By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reffered_by', 'Reffered By:') !!}
    {!! Form::number('reffered_by', null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Refs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_refs', 'No Of Refs:') !!}
    {!! Form::number('no_of_refs', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_level_id', 'Ref Level Id:') !!}
    {!! Form::number('ref_level_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
