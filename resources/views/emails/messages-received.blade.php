
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .contenedor{
            margin: auto;
            border: 2px solid black;
            display: inline-block;
        }
    </style>
    <title>MENSAJE RECIBIDO</title>
</head>
<body>

    <div class="contenedor">
     <h1>Mensajes recibidos</h1>

        <p>mensaje recibido de : {{ $msg['name'] }}<br>
        asunto : {{ $msg['subject'] }}<br>
        correo destinatario : {{ $msg['email'] }}<br>
    </p>


    </div>
</body>
</html>
