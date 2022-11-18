@extends('layout')

@section('title', 'proyecto' /* | $project->title */)

@section('content')
    <div class="container">
        <div class="row">

            <div class="bg-withe p-5 shadow rounded text-dark mb-5 text-center">
                <div class="row">
                    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                        @if ($project->image)
                            <img class="card-img-top p70 mx-auto" src="/storage/{{ $project->image }}"
                                alt="{{ $project->title }}">
                        @endif
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2 class="h3 mb-5"><b>Titulo : </b>{{ $project->title }}</h2>

                        <p class="mb-5 h4"><strong>Descripcion : </strong>{{ $project->description }}</p>
                        <p class="mb-5 h4"><strong>Url : </strong><a href="#" target="">{{ $project->url }}</a>
                        </p>
                        <p class="h4"><strong>Modificado el : </strong>{{ $project->updated_at }}</p>

                        <div class="btn-group btn-group-sm mt-5 d-flex col-12 col-lg-12">
                            @auth
                                <a class="btn btn-success mx-2" href="{{ route('projects.edit', $project) }}">Editar</a>
                                <form id="delete-project" class="d-none" method="POST"
                                    action="{{ route('projects.destroy', $project) }}">
                                    @csrf @method('DELETE')
                                </form>
                                <button onclick="document.getElementById('delete-project').submit()"
                                    class=" btn btn-danger mx-2 rounded">Eliminar</button>
                            @endauth
                            <a class="btn btn-success rounded" href="{{ route('projects.index', $project) }}">Volver</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
