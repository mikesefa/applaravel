@extends('layout')

@section('title', 'crear proyectos')

@section('content')

    @include('recursos.validation-errors')

    @include('recursos.session-status')

    <div class="container">

        <div class="row">

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">


                <form class="bg-white py-1 px-4 shadow rounded text-dark border-0" method="POST" enctype="multipart/form-data"
                    action="{{ route('projects.store') }}">
                    @csrf

                    <div class="d-flex justify-content-between align-item-center">
                        <h1 class="display- mx-auto">Nuevo Proyecto</h1>
                        <hr>
                    </div>

                    <div class="form-group my-2 text-center">
                        <label class="" for="title">Titulo del proyecto</label>
                        <input class="form-control bg-light text-center shadow-sm border" id="title" type="text"
                            name="title">
                    </div>

                    <div class="form-group my-2 text-center">
                        <label>
                            Descripcion del proyecto</label>
                        <textarea class="form-control bg-light text-center shadow-sm border" type="text" name="description">{{-- {{ old('description', $project->description) }} --}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>

                    <div class="form-group my-2 text-center">
                        <label for="url">Url del proyecto</label>
                        <input class="form-control bg-light text-center shadow-sm border" type="text" name="url">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary btn-lg bg-success">Crear</button>

                        <a class="btn btn-primary btn-lg bg-danger my-3" href="{{ route('projects.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
