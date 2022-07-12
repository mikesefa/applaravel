<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','IGLESIA LVQD')</title>
    <style>
        .active{
            color:white;
            text-decoration: none;
            background-color: black;
            padding: 3px;
            border-radius: 5px;
        }
        .centrar {
            text-align: center;
        }
    </style>
</head>
<body>

    @include('recursos.nav')

    @yield('content')
    <hr>


</body>
</html>
