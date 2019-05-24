<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Reward Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reward', 'Reward:') !!}
    {!! Form::text('reward', null, ['class' => 'form-control']) !!}
</div>

<!-- Congrat Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('congrat_message', 'Congrat Message:') !!}
    {!! Form::text('congrat_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Target No Refferrals Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target_no_refferrals', 'Target No Refferrals:') !!}
    {!! Form::text('target_no_refferrals', null, ['class' => 'form-control']) !!}
</div>

<!-- Point Per Refferrals Field -->
<div class="form-group col-sm-6">
    {!! Form::label('point_per_refferrals', 'Point Per Refferrals:') !!}
    {!! Form::text('point_per_refferrals', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('refLevels.index') !!}" class="btn btn-default">Cancel</a>
</div>
