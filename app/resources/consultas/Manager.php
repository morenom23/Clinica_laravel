<?php

namespace App\resources\consultas;

use App\Models\consultas;

class Manager
{
    public function listarConsultas()
    {
        return consultas::all(); //obteniendo los registros de la base de datos
    }

    public function actualizarConsultas($request, $id)
    {
        return consultas::where("id", $id)->update([
            "nombre" => $request->nombre,
            "cedula" => $request->cedula,
            "telefono" => $request->telefono,
            "correo" => $request->correo,
            "tipo_consulta" => $request->tipo_consulta,
            "fecha_consulta" => $request->fecha_consulta,
            "medico_asignado" => $request->medico_asignado
        ]);
    }

    public function eliminarConsulta($id)
    {
        $consultas = consultas::find($id);
        return $consultas->delete();
    }

    public function buscarConsulta($id)
    {
        return consultas::find($id);
    }

    public function crearConsulta($request)
    {
        return consultas::create([
            "nombre" => $request->nombre,
            "cedula" => $request->cedula,
            "telefono" => $request->telefono,
            "correo" => $request->correo,
            "tipo_consulta" => $request->tipo_consulta,
            "fecha_consulta" => $request->fecha_consulta,
            "medico_asignado" => $request->medico_asignado
            
        ]);
    }
}
