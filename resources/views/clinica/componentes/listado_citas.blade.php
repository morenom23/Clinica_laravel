<p>Ver el listado de las citas</p>

<table>
    <tr>
        <th>Nombre</th>
        <th>Cedula</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Tipo_consulta</th>
        <th>Fecha_consulta</th>
        <th>Medico_asignado</th>
        <th>Fecha creación</th>
        <th>Fecha actualización</th>
    </tr>

    @foreach ($consultas as $consultas)
        <tr>
            <form action="{{ route('consultas.update', ['id' => $consultas->id]) }}" method="POST">

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
                <td><input type="submit" value="Actualizar"></td>
                <td><a href="{{ route('consultas.edit', ['id' => $consultas->id]) }}" target="blank">Ver registro</a>
                </td>
            </form>
        </tr>
    @endforeach
</table>
