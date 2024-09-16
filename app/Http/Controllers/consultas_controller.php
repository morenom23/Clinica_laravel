<?php

namespace App\Http\Controllers;

use App\Models\consultas;
//use App\Models\estudiantes;
use App\Resources\consultas\Manager;
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
        return view('editar_cita')
            ->with('consultas', $consultas);
    }

    public function delete($id)
    {

        if ($this->manager->eliminarConsulta($id)) {
            Alert::success("La consulta fue eliminada exitosamente");
            return redirect()->route("consulta.index");
        } else {
            Alert::error("La consulta no pudo ser eliminada");
            return redirect()->back();
        }
    }

    public function index() //listo
    {
        return view("clinica.listado_citas")
            ->with("consultas", $this->manager->listarConsultas());
    }

    public function create()
    {
        return view('agendar_cita');
    }

    public function store(Request $request)
    {

        if ($this->manager->crearConsulta($request)) {
            Alert::success("Se generó la cita exitosamente");
        
        } else {
            Alert::error("No se pudo crear la cita");

        }
        return redirect()->back();
        
    }
}
