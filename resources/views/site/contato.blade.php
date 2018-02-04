@extends('layouts.site.app')
@section('title', 'Contato :: Oscar Alencar - Desenvolvimento web e mobile')

@section('content')
    <!-- content section -->
    <section class="works content-geral">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center" style="margin-bottom: 20px">
                    <h2>Contato</h2>
                    <h3>Então, vamos trabalhar juntos?</h3>
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-3">

                    @include ('layouts.errors')

                    @if (session('email-sucesso'))
                        <div class="alert alert-success">
                            {{ session('email-sucesso') }}
                        </div>
                    @endif

                    @if (session('email-falha'))
                        <div class="alert alert-danger">
                            {{ session('email-falha') }}
                        </div>
                    @endif


                    <p class="text-center">Deixe seu recado no formulário abaixo! Ou pelo e-mail: <a href="mailto:oscar@alencar.in">oscar@alencar.in</a></p>
                    {{ Form::open(['route' => ['site.contato.enviar'], 'method' => 'post']) }}

                    <div class="form-group">
                        {{ Form::label('nome', 'Nome') }}
                        {{ Form::text('nome', null, ['class' => 'form-control'] ) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email*') }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('assunto', 'Assunto*') }}
                        {{ Form::textarea('assunto', null, ['class' => 'form-control']) }}
                    </div>

                    {{ Form::token() }}

                    {{ Form::submit('Enviar', ['class' => 'btn btn-primary btn-block btn-lg']) }}

                    {{ Form::close() }}
                </div>
                <div class="col-xs-12 col-md-6"></div>
            </div>
        </div>
    </section><!-- end of content -->
@endsection