@extends('adminlte::page')

@section('title', 'Tipos de Projeto')

@section('content_header')
    <h1>
        Tipos de Projeto
        <a class="btn btn-primary btn-sm" href="{{ route('admin.types.create') }}"> Criar</a>
    </h1>
@stop

@section('content')

<div class="row">
    <div class="col-xs-12">

        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-striped">
                    <tbody><tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Tipo</th>

                        <th></th>
                    </tr>

                    @foreach($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->label }}</td>
                            <td><a href="{{route('admin.types.edit', $type->id)}}">Editar</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
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