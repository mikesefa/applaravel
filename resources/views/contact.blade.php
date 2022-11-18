@extends('layout')

@section('title', 'CONTACT')

@section('content')

    <div class="container mt-3">

        <div class="row">

            <div class="text-primary col-12 col-lg-7">

                <h1 class="ml-5 display-5 text-primary">Contacto</h1>

                <div class="col-12 col-lg-8 border">
                    <img class="img-fluid" src="/img/contactme.svg" alt="Nosotros">
                </div>

            </div>


            <div class="col-12 col-lg-5 mx-auto">

                <h3 class="text-center text-dark mb-3"><b>Escribir Mensaje</b></h3>

                <form class="shadow bg-white rounded py-5 px-4 my-3" method="POST" action={{ route('contact') }}>
                    @csrf

                    <div class="form-group my-2">

                        {{-- <label for="name"></label> --}}
                        <input
                            class="form-control text-center shadow border-0 @error('name') is-invalid @else border-0 @enderror"
                            name="name" id="name" placeholder="Ingresa tu Nombre..." value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group my-2">
                        <input
                            class="form-control text-center shadow border-0 @error('email') is-invalid @else border-0 @enderror"
                            type="email" name="email" placeholder="ingresa tu Email@example.com"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group my-2">
                        <input
                            class="form-control text-center shadow border-0 @error('subject') is-invalid @else border-0 @enderror"
                            name="subject" placeholder="asunto.." value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group my-2">
                        <textarea class="form-control text-center shadow border @error('content') is-invalid @else border-0 @enderror"
                            name="content" placeholder="escribir mensaje" value="{{ old('content') }}"></textarea>
                        @error('content')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit"
                            class="col-12 col-sm-10 col-lg-6 btn btn-primary d-block mx-auto SHADOW">Enviar</button>
                    </div>


                </form>

            </div>
        </div>



    </div>
@endsection
{{-- las etiquetas del fomularios deben ser todas con la propiedad name='' para validarla,

old('name') nos retorna lo escrito --}}
