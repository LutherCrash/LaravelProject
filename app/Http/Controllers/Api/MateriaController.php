<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Materia;
class MateriaController extends Controller
{
    
public function index()
{
    //traer todos los registros
    $materia = Materia::all();
    return $materia;
}

public function store(Request $request)
{
    //traer todos los registros
    $materia = new Materia();
    $materia->nombre = $request->nombre;
    $materia->descripcion = $request->descripcion;
    $materia->save();

    return response()->json([
        "status" => 1,
        "msg" => "¡Registro de materia exitoso!",
    ]);
}

public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($request->id);
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;
        $materia->save();
        return $materia;
    }

public function destroy(Request $request,$id)
    {
        $materia = Materia::destroy($request->id);
        return $materia;
    }
}