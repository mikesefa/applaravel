@extends('layout')

@section('title', 'PROYECTOS')

@section('content')

    <div class="container text-dark bg-white shadow pb-5">

        <div class="d-flex justify-content-between align-items-center my-4">
            <h1 class="display-4 mx-auto">@lang('Portfolio')</h1>
            @auth
                <a class="btn btn-primary bg-success" href="{{ route('projects.create') }}">Crear Nuevo Proyecto</a>
            @endauth
        </div>
    
        <div class="d-flex flex-wrap justify-content-between align-items-start">

            @forelse ($projects as $project)
                <div class="card my-4" style="width: 18rem;">
                    @if ($project->image)
                        <div class="card-imagen mx-auto">
                            <img class="card-img-top img-fluid" src="/storage/{{ $project->image }}"
                                alt="{{ $project->title }}">
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                        </h5>
                        <p class="card-text text-truncate">{{ $project->description }}</p>
                        <h6 class="card-subtitle">{{ $project->created_at->format('d/m/Y') }}</h6>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-primary">Ver Mas...</a>
                    </div>
                </div>
            @empty
                <li class="list-group-item text-center border-0 mb-2 shadow-sm">No hay proyectos para mostrar</li>
            @endforelse
        </div>
    </div>
@endsection
