@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>
        Clientes
        <a class="btn btn-primary btn-sm" href="{{ route('admin.clients.create') }}"> Criar</a>
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
                        <th>Url</th>
                        <th>Imagem</th>

                        <th></th>
                    </tr>

                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->url }}</td>
                            <td>{{ $client->image }}</td>
                            <td><a href="{{route('admin.clients.edit', $client->id)}}">Editar</a></td>
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