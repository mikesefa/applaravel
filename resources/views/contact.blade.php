@extends('layout')

@section('title','CONTACT')

@section('content')
<h1>@lang('Contact')</h1>
<hr>
<br><br>

<h3 class="centrar">Formulario Enviar Mensaje</h3>

<form class="centrar" method ="POST" action={{ route('contact')}}>
    @csrf
    <input name = "name" placeholder = "Ingresa tu Nombre ......." value="{{old('name')}}"><br>
    {!! $errors->first('name','<small>:message</small><br>')!!}
    <input type="email" name="email" placeholder = "ingresa tu Email@example.com" value="{{old('email')}}"><br>
    {!! $errors->first('email','<small>:message</small><br>')!!}
    <input name ="subject" placeholder="asunto ......" value="{{old('subject')}}"><br>
    {!! $errors->first('subject','<small>:message</small><br>')!!}
    <textarea name="content" placeholder="escribir mensaje" value="{{old('content')}}"></textarea><br>
    {!! $errors->first('content','<small>:message</small><br>')!!}
    <button>Enviar</button><br><br>
</form>
@endsection

{{-- las etiquetas del fomularios deben ser todas con la propiedad name='' para validarla,

old('name') nos retorna lo escrito
 --}}
