@extends('adminlte::page')

@section('title', 'Projetos')

@section('content_header')
    <h1>Projetos</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Editar projeto</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{ Form::model($project, ['route' => ['admin.projects.update', $project->id],  'method' => 'put', 'id' => 'formulario']) }}
                    @include('admin.projects._fields')
                    {{ Form::submit('Atualizar', ['class' => 'btn btn-info']) }}
                    <a href="{{ route('admin.projects.destroy', ['id' => $project->id]) }}" class="btn btn-danger btn-excluir">Excluir</a>
                    {{ Form::close() }}
                    <form id="form-excluir" action="{{ route('admin.projects.destroy', ['id' => $project->id]) }}" method="post" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
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
    <script>
        $('.btn-excluir').click( function (e) {
            e.preventDefault();
            var x = confirm("Deseja excluir este projeto?");
            if (x != true) { return; }
            $('#form-excluir').submit();
        });
    </script>
@stop