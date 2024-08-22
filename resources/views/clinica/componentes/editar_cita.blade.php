<form action="{{ route('clinica.update', ['id' => $clinica->id]) }}" method="POST">

    @csrf
    @method('put')
    <td><input type="text" name="nombre" value="{{ $consultas->nombre }}"></td>
    <td><input type="number" name="cedula" value="{{ $consultas->cedula }}"></td>
    <td><input type="text" name="telefono" value="{{ $consultas->telefono }}"></td>
    <td><input type="email" name="correo" value="{{ $consultas->correo }}"></td>
    <td><input type="text" name="tipo_consulta" value="{{ $consultas->tipo_consulta }}"></td>
    <td><input type="date" name="fecha_consulta" value="{{ $consultas->fecha_consulta }}"></td>
    <td><input type="text" name="medico_asignado" value="{{ $consultas->medico_asignado }}"></td>
    <td><input type="text" value="{{ $consultas->updated_at }}"></td>
    <td><input type="submit" value="Actualizar"></td>
    <td><a href="{{ route('consultas.edit', ['id' => $consultas->id]) }}" target="blank">Ver registro</a></td>
</form>

<form action="{{ route('consultas.update', ['id' => $consultas->id]) }}" method="POST">
    @csrf
    @method('delete')
    <label for="">Eliminar registro</label>
    <input type="submit" value="Eliminar">
</form>
