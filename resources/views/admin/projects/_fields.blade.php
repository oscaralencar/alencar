<div class="form-group">
    {{ Form::label('title', 'Título') }}
    {{ Form::text('title', null, ['class' => 'form-control'] ) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descrição') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('image', 'Imagem (600x600px') }}
    {{ Form::file('image', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('url_web', 'Url') }}
    {{ Form::text('url_web', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('url_android', 'Url Android') }}
    {{ Form::text('url_android', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('url_ios', 'Url iOS') }}
    {{ Form::text('url_ios', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('technology', 'Tecnologia') }}
    {{ Form::text('technology', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('client_id', 'Cliente*', ['class' => 'text-danger']) }}
    {!!
        Form::select('client_id', $clients->all(),
        $client_id = isset($projeto->client->id) ? $projeto->client->id : null,
        ['placeholder' => 'Selecione um cliente', 'class' => 'form-control'])
    !!}
</div>
<div class="form-group">
    {{ Form::label('type_id', 'Tipo do projeto*', ['class' => 'text-danger']) }}
    {!!
        Form::select('type_id', $types->all(),
        $client_id = isset($projeto->type->id) ? $projeto->type->id : null,
        ['placeholder' => 'Selecione um tipo de projeto', 'class' => 'form-control'])
    !!}
</div>

{{ Form::token() }}