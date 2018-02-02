@extends('adminlte::page')

@section('title', 'Tipos de Projeto')

@section('content_header')
    <h1>Tipos de Projeto</h1>
@stop

@section('content')

    @include ('layouts.errors')

    <div class="row">

        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Criar novo tipo de projeto</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{ Form::open(['route' => ['admin.types.store']]) }}

                    @include('admin.types._fields')

                    {{ Form::submit('Criar', ['class' => 'btn btn-success']) }}

                    {{ Form::close() }}
                </div>
                <!-- /.box-body -->
            </div>

        </div>
    </div>{{--/row--}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop