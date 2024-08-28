<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de citas</title>
    <link rel="icon" type="image/png" href="{{ asset('imagenes/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('Consultas/Css/formularios.css') }}">
</head>

<body>

</body>

</html>

<div class="nav">
    <h1>CONSULTAS GENERADAS</h1>
    <p>Clinica <br>
        <span>Web</span>
        <img src="{{ asset('imagenes/logo_clinica.png') }}" alt="">
    </p>
</div>



<div class="tabla_consultas">

    <table>
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Tipo <br> consulta</th>
            <th>Fecha <br> consulta</th>
            <th>Medico <br> asignado</th>
            <th>Fecha <br> creación</th>
            <th>Fecha <br> actualización</th>
            <th>Registros</th>

        </tr>

        @foreach ($consultas as $consultas)
            <tr class="">
                <form action="{{ route('consulta.update', ['id' => $consultas->id]) }}" method="POST"
                    class="tabla_consultas">

                    @csrf
                    @method('put')
                    <td><input type="text" name="nombre" value="{{ $consultas->nombre }}"></td>
                    <td><input type="number" name="cedula" value="{{ $consultas->cedula }}"></td>
                    <td><input type="text" name="telefono" value="{{ $consultas->telefono }}"></td>
                    <td><input type="email" name="correo" value="{{ $consultas->correo }}"></td>
                    <td><input type="text" name="tipo_consulta" value="{{ $consultas->tipo_consulta }}"></td>
                    <td><input type="date" name="fecha_consulta" value="{{ $consultas->fecha_consulta }}"></td>
                    <td><input type="text" name="medico_asignado" value="{{ $consultas->medico_asignado }}"></td>
                    <td><input type="text" value="{{ $consultas->created_at }}"></td>
                    <td><input type="text" value="{{ $consultas->updated_at }}"></td>
                    <td><a href="{{ route('consulta.edit', ['id' => $consultas->id]) }}" target="blank">Ver
                            registro</a>
                    </td>
                </form>
            </tr>
        @endforeach
    </table>

</div>
