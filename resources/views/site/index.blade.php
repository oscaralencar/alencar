@extends('layouts.site.app')
@section('title', 'Oscar Alencar - Desenvolvimento Web e Mobile')

@section('content')
<!-- portfolio section -->
<section class="works text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Meus últimos trabalhos</h2>
                <ul class="list-inline">
                    <li class="filter active" data-filter=".all">All</li>
                    @forelse($types as $type)
                        <li class="filter" data-filter=".{{ $type->name }}">{{ $type->label }}</li>
                    @empty
                    @endforelse
                    <!--
                    <li class="filter active" data-filter=".all">All</li>
                    <li class="filter" data-filter=".web-development">Web Development</li>
                    <li class="filter" data-filter=".web-design">Web Design</li>
                    <li class="filter" data-filter=".website-customization">Website Customisation</li>
                    -->
                </ul>
            </div>

            @forelse($projects as $project)

            <!-- single portfolio item -->
            <div class="col-md-4 col-sm-6 mix {{ $project->type->name }} all" data-myorder="2">
                <div class="single-work">
                    <img src="{!! '/storage/'.$project->image !!}">
                    <div class="overlay">
                        <h3>{{ $project->title }}</h3>
                        <a href="#" type="button" data-toggle="modal" data-target="#myModal{{$project->id}}"><i class="fa fa-search-plus"></i></a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal{{$project->id}}" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>{{ $project->title }}</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="modal-body col-md-8 col-md-offset-2">
                                            <img src="{!! '/storage/'.$project->image !!}">
                                            <ul class="list-inline">
                                                <li>Client: {{$project->client->name}}</li>
                                                <li>Technology: {{$project->technology}}</li>
                                            </ul>
                                            <p>{{$project->description}}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close <i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                    <p>"Não há projetos cadastrados</p>
            @endforelse

        </div>
    </div>
</section><!-- end of portfolios -->
@endsection
