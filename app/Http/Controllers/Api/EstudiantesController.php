<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiantes;

class EstudiantesController extends Controller
{
    public function index()
{
    //traer todos los registros
    $estudiantes = Estudiantes::all();
    return $estudiantes;
}

public function store(Request $request)
{
    //traer todos los registros
    $estudiantes = new Estudiantes();
    $estudiantes->nom_estudiante = $request->nom_estudiante;
    $estudiantes->ape_estudiante = $request->ape_estudiante;
    $estudiantes->direccion = $request->direccion;
    $estudiantes->telefono = $request->telefono;
    $estudiantes->tipo_de_doc = $request->tipo_de_doc;
    $estudiantes->num_documento = $request->num_documento;
    $estudiantes->save();

    return response()->json([
        "status" => 1,
        "msg" => "¡Registro de estudiante exitoso!",
    ]);
}

public function update(Request $request, $id)
    {
        $estudiantes = Estudiantes::findOrFail($request->id);
        $estudiantes->nom_estudiante = $request->nom_estudiante;
        $estudiantes->ape_estudiante = $request->ape_estudiante;
        $estudiantes->direccion = $request->direccion;
        $estudiantes->telefono = $request->telefono;
        $estudiantes->tipo_de_doc = $request->tipo_de_doc;
        $estudiantes->num_documento = $request->num_documento;
        $estudiantes->save();
        return $estudiantes;
    }

public function destroy(Request $request, $id)
    {
        $estudiantes = Estudiantes::destroy($request->id);
        return $estudiantes;
    }
}
