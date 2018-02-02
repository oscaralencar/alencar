@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    <h1>Cliente</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Editar cliente</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{ Form::model($client, ['route' => ['admin.clients.update', $client->id],  'method' => 'put', 'id' => 'formulario']) }}
                    @include('admin.clients._fields')
                    {{ Form::submit('Atualizar', ['class' => 'btn btn-info']) }}
                    <a href="{{ route('admin.clients.destroy', ['id' => $client->id]) }}" class="btn btn-danger btn-excluir">Excluir</a>
                    {{ Form::close() }}
                    <form id="form-excluir" action="{{ route('admin.clients.destroy', ['id' => $client->id]) }}" method="post" style="display: none;">
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