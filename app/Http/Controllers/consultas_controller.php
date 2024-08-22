<?php

namespace App\Http\Controllers;

use App\Models\consultas;
//use App\Models\estudiantes;
use App\resources\consultas\Manager;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class consultas_controller extends Controller
{
    protected $manager;

    function __construct()
    {
        $this->manager = new Manager();
    }

    public function update(Request $request, $id)
    {

        if ($this->manager->actualizarConsultas($request, $id)) { //listo

            Alert::success("Se actualizó correctamente el registro"); //1: composer require realrashid/sweet-alert para enviar las alertas 2:in master layout @include('sweetalert::alert') 3:Alert::success('Success Title', 'Success Message');

        } else {
            Alert::error("No fue posible actualizar el registro");
        }
        return redirect()->back();
    }

    public function edit($id)
    {

        $consultas = consultas::find($id);
        return view('consultas.edit')
            ->with('consultas', $consultas);
    }

    public function delete($id)
    {

        if ($this->manager->eliminarConsulta($id)) {
            Alert::success("El estudiante fue eliminado exitosamente");
            return redirect()->route("consulta.index");
        } else {
            Alert::error("El registro no pudo ser eliminado");
            return redirect()->back();
        }
    }




    public function index() //listo
    {
        return view("consultas.index")
            ->with("consultas", $this->manager->listarRegistros());
    }

    public function create()
    {
        return view("consultas.create");
    }

    public function store(Request $request)
    {

        if ($this->manager->crearConsulta($request)) {
            Alert::success("Se creó el estudiante exitosamente");
        } else {
            Alert::error("No se pudo crear el estudiante");
        }
        return redirect()->back();
    }
}
