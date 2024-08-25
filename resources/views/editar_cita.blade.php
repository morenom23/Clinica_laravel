<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar consulta</title>
    <link rel="stylesheet" href="{{ asset('Consultas/Css/formularios.css') }}">
</head>

<body>

    <div class="nav">
        <h1>EDITAR CONSULTAS</h1>
        <p>Clinica <br>
            <span>Web</span>
            <img src="{{ asset('http://127.0.0.1:8000/imagenes/logo_clinica.png') }}" alt="">
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

                <th>Acción</th>
                <th>Registros</th>

            </tr>

            <form action="{{ route('consulta.update', ['id' => $consultas->id]) }}" method="POST"
                class="form_consulta">


                <td>
                    @csrf
                    @method('put')
                    <input type="text" name="nombre" value="{{ $consultas->nombre }}">
                </td>
                <td><input type="number" name="cedula" value="{{ $consultas->cedula }}"></td>
                <td><input type="text" name="telefono" value="{{ $consultas->telefono }}"></td>
                <td><input type="email" name="correo" value="{{ $consultas->correo }}"></td>
                <td><input type="text" name="tipo_consulta" value="{{ $consultas->tipo_consulta }}"></td>
                <td><input type="date" name="fecha_consulta" value="{{ $consultas->fecha_consulta }}"></td>
                <td><input type="text" name="medico_asignado" value="{{ $consultas->medico_asignado }}"></td>
                <td><input type="text" value="{{ $consultas->updated_at }}"></td>
                <td><input type="submit" value="Actualizar"></td>
                <td><a href="{{ route('consulta.edit', ['id' => $consultas->id]) }}" target="blank">Ver registro</a>
                </td>
            </form>

        </table>

    </div>



    <center>
        <form action="{{ route('consulta.delete', ['id' => $consultas->id]) }}" method="POST"
            class="eliminar-registro">
            @csrf
            @method('delete')
            {{-- <label for="">Eliminar registro</label> --}}
            <input type="submit" value="Eliminar" class="boton-eliminar">
        </form>
    </center>
</body>

</html>
