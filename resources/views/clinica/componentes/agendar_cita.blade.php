<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendar cita</title>
</head>

<body>

    <form action="{{ route('consultas.store') }}" method="POST">

        @csrf

        <label for="">nombre</label>
        <input type="text" placeholder="Ingrese el nombre" name="nombre">

        <label for="">cedula</label>
        <input type="number" placeholder="Ingrese su documento" name="cedula">

        <label for="">telefono</label>
        <input type="text" placeholder="Ingrese su telefono" name="telefono">

        <label for="">correo</label>
        <input type="email" placeholder="Ingrese su email" name="correo">

        <label for="">tipo consulta</label>
        <input type="text" placeholder="seleccione la consulta" name="tipo_consulta">

        <label for="">seleccione fecha</label>
        <input type="date" name="fecha">

        <input type="submit" value="Agendar">


    </form>

</body>

</html>
