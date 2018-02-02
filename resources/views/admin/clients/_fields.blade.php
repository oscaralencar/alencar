<div class="form-group">
    {{ Form::label('name', 'Título') }}
    {{ Form::text('name', null, ['class' => 'form-control'] ) }}
</div>
<div class="form-group">
    {{ Form::label('label', 'Label') }}
    {{ Form::text('label', null, ['class' => 'form-control']) }}
</div>

{{ Form::token() }}