<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'LARAVEL')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>
    <div id="app" class="d-flex flex-column bg-light justify-content-between">

        <header>
            @include('recursos.nav')
        </header>

        <main>
            @include('recursos.session-status')
            @yield('content')

        </main>

        {{-- @include('recursos.session-status') --}}
        <footer class="bg-dark text-center text-light py-3 shadow fixed-bottom">
            {{ config('app.name') }} | copiright @ {{ date('Y') }}
        </footer>
    </div>
</body>

</html>
