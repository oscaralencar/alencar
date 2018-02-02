<div class="form-group">
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null, ['class' => 'form-control'] ) }}
</div>
<div class="form-group">
    {{ Form::label('url', 'Url') }}
    {{ Form::text('url', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('image', 'Imagem') }}
    {{ Form::text('image', null, ['class' => 'form-control']) }}
</div>

{{ Form::token() }}