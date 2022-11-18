@extends('layout')

@section('title', 'editar proyectos')

@section('content')

    @include('recursos.validation-errors')

    @include('recursos.session-status')

    <div class="container">



        <div class="row text-center">

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">


                <form class="py-3 px-4 shadow rounded text-dark border-0" method="POST" enctype="multipart/form-data"
                    action="{{ route('projects.update', $project) }}">
                    @csrf @method('PATCH')

                    <h1>Editar Proyecto</h1>

                    <div class="form-group my-2 text-center">
                        <label for=""><strong>Titulo del proyecto</strong> <br>
                            <input class="form-control bg-light text-center shadow-sm border" type="text" name="title"
                                value="{{ $project->title }}">
                        </label>
                    </div>
                    <div class="form-group my-2 text-center">
                        <label for="formFile" class="form-label"><strong>Imagen</strong></label>
                        <input name="image" class="form-control" type="file" id="formFile">
                        </label>
                    </div>

                    <div class="form-group my-2 text-center">
                        <label><strong>Descripcion del proyecto</strong> <br>
                            <textarea class="form-control bg-light text-center shadow-sm border" type="text" name="description" value="">{{ $project->description }}</textarea>
                        </label>
                    </div>

                    <div class="form-group  my-2 text-center">
                        <label for=""><strong>Url del proyecto</strong><br>
                            <input class="form-control bg-light text-center shadow-sm border" type="text" name="url"
                                value="{{ $project->url }}">
                        </label>
                    </div>
                    <div class="container mx-auto">
                        <button class="btn btn-success">ACTUALIZAR</button>
                        <a class=" btn btn-primary text-color-light" href="{{ route('projects.index') }}">VOLVER</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
