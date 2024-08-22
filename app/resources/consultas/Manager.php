<?php

namespace App\Resources\consultas;

use App\Models\consultas;

class Manager
{
    public function listarRegistros()
    {
        return consultas::all();//obteniendo los registros de la base de datos
    }

    public function actualizarConsultas($request, $id){
        return consultas::where("id", $id)->update([
            "nombre" => $request->nombre,
            "curso" => $request->curso,
            "telefono" => $request->telefono,
            "correo" => $request->correo
        ]);
    }

    public function eliminarConsulta($id){
        $consultas = consultas::find($id);
        return $consultas->delete();

    }

    public function buscarConsulta($id){
        return consultas::find($id);
    }

    public function crearConsulta($request){
        return consultas::create([
            'nombre' => $request->nombre,
            'curso' => $request->curso,
            'telefono' => $request->telefono,
            'correo' => $request->correo
        ]);
    }
}

