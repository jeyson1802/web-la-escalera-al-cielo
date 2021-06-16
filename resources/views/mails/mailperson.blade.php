<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro - Ministerio Arrepentimiento y Santidad</title>
</head>
<body>
    <p>Hola {{ $person->name }}</p>
    <p>Ahora que hemos recibido tu registro queremos ponernos en acuerdo contigo, como dice su en su palabra:
        <br> 
       Otra vez os digo, que si dos de vosotros se pusieren de acuerdo en la tierra acerca de cualquiera cosa que pidieren,
       les será hecho por mi Padre que está en los cielos. Mateo 18:19 </p>
    <br>
    <img src="{{ $message->embed(public_path() . '/images/ministry-1@1.5x.jpg') }}" />
    <br>
    <p>Bendecido día.</p>
</body>
</html>