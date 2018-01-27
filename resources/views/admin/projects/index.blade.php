@extends('adminlte::page')

@section('title', 'Projetos')

@section('content_header')
    <h1>Projetos</h1>
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
                        <th>Cliente</th>
                        <th></th>
                    </tr>

                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->type->name }}</td>
                            <td>{{ $project->client->name }}</td>
                            <td><a href="{{route('admin.projects.edit', $project->id)}}">Editar</a></td>
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