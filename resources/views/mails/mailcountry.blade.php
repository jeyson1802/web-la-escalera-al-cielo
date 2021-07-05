<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro - Ministerio Arrepentimiento y Santidad</title>
</head>
<body>
    <p>Amado supervisor, hemos registrado un nuevo hermano del país asignado:</p>
    <br>
    <p><strong>Nombres: </strong> {{$person->name}}</p>
    <p><strong>Email: </strong> {{$person->email}}</p>
    <p><strong>Celular: </strong> {{$person->phone}}</p>
    <p><strong>Ciudad: </strong> {{$person->city}}</p>
    <p><strong>Dirección: </strong> {{$person->address}}</p>
    <p><strong>Cómo conoció el Ministerio: </strong> {{$person->answer}}</p>
    <p><strong>Fecha de Nacimiento: </strong> {{$person->date_birth}}</p>
    <p><strong>País: </strong> {{$person->country->name}}</p>
    <br>
    <p>Bendecido día.</p>
</body>
</html>