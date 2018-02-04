@extends('layouts.site.app')
@section('title', 'Contato :: Oscar Alencar - Desenvolvimento web e mobile')

@section('content')
    <!-- content section -->
    <section class="works content-geral">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>Contato</h2>
                    <h3>Então, vamos trabalhar juntos?</h3>
                </div>
                <div class="col-xs-12 col-md-6">
                    <p>Deixe seu recado no formulário abaixo! Ou pelo e-mail: <a href="mailto:oscar@alencar.in">oscar@alencar.in</a></p>
                    {{ Form: }}
                </div>
                <div class="col-xs-12 col-md-6"></div>
            </div>
        </div>
    </section><!-- end of content -->
@endsection