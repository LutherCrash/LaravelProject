<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recursos;

class RecursosController extends Controller
{
    public function index()
{
    //traer todos los registros
    $recursos = Recursos::all();
    return $recursos;
}

public function store(Request $request)
{
    //traer todos los registros
    $recursos = new Recursos();
    $recursos->nombre_recurso = $request->nombre_recurso;
    $recursos->tipo = $request->tipo;
    $recursos->save();

    return response()->json([
        "status" => 1,
        "msg" => "¡Registro de recurso exitoso!",
    ]);
}

public function update(Request $request, $id)
    {
        $recursos = Recursos::findOrFail($request->id);
        $recursos->nombre_recurso = $request->nombre_recurso;
        $recursos->tipo = $request->tipo;
        $recursos->save();
        return $recursos;
    }

public function destroy(Request $request,$id)
    {
        $recursos = Recursos::destroy($request->id);
        return $recursos;
    }
}
