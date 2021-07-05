<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Contacto - Ministerio Arrepentimiento y Santidad</title>
</head>
<body>
    <p>Mensaje de contáctenos:</p>
    <br>
    <p><strong>Nombres: </strong> {{$contacto->name}}</p>
    <p><strong>Apellidos: </strong> {{$contacto->lastname}}</p>
    <p><strong>Email: </strong> {{$contacto->email}}</p>
    <p><strong>Celular: </strong> {{$contacto->phone}}</p>
    <p><strong>Mensaje: </strong> {{$contacto->message}}</p>
    <br>
    <p>Bendecido día.</p>
</body>
</html>