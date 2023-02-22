
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Dudas y preguntas - Concurso de dibujo</title>
</head>
<body>

    <ul>
        <li>Nombre: {{ $info->nombrePregunta }}</li>
        <li>correo: {{ $info->correoPregunta }}</li>
        <li><b> Mensaje: {{ $info->mensajePregunta }} </b></li>
    </ul>

</body>
</html>