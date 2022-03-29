<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index()
{
    //traer todos los registros
    $proyecto = Proyecto::all();
    return $proyecto;
}

public function store(Request $request)
{
    //traer todos los registros
    $proyecto = new Proyecto();
    $proyecto->nom_proyecto = $request->nom_proyecto;
    $proyecto->tiempo_inicio = $request->tiempo_inicio;
    $proyecto->tiempo_final = $request->tiempo_final;
    $proyecto->save();

    return response()->json([
        "status" => 1,
        "msg" => "¡Registro de proyecto exitoso!",
    ]);
}

public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($request->id);
        $proyecto->nom_proyecto = $request->nom_proyecto;
        $proyecto->tiempo_inicio = $request->tiempo_inicio;
        $proyecto->tiempo_final = $request->tiempo_final;
        $proyecto->save();
        return $proyecto;
    }

public function destroy(Request $request,$id)
    {
        $proyecto = Proyecto::destroy($request->id);
        return $proyecto;
    }
}
