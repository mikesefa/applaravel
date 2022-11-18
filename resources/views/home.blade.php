@extends('layout')

@section('title', 'HOME')


@section('content')

<div class="container shadow">
    <div class="{{-- container up --}}row mt-5">

        <div class="col-12 col-lg-6">
            <h1 class="display-5 text-dark text-center mb-4">Bienvenidos a mi Portafolio</h1>

            <p class="lead text-black text-center mb-4">

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo beatae facilis autem alias vitae,
                odit provident exercitationem fuga enim! Pariatur totam recusandae voluptates libero enim labore ullam,
                porro asperiores dicta!
            </p>
            <a href="{{ route('contact') }}" class="btn btn-primary mx-auto col-8 d-block mb-2">Contáctame</a>
            <a href="{{ route('projects.index') }}" class="btn btn-outline-primary mx-auto col-8 d-block">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="d-block mx-auto img-fluid" src="/img/home.svg" alt="Nosotros">
        </div>
    </div>
</div>
</div>

@endsection
