<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FinalizacionUtil;

class FinalizacionUtilController extends Controller
{
    public function index()
{
    //traer todos los registros
    $finalizacion = FinalizacionUtil::all();
    return $finalizacion;
}

public function store(Request $request)
{
    //traer todos los registros
    $finalizacion = new FinalizacionUtil();
    $finalizacion->avances = $request->avances;
    $finalizacion->fecha_avance = $request->fecha_avance;
    $finalizacion->precio = $request->precio;
    $finalizacion->proyecto_id = $request->proyecto_id;
    $finalizacion->save();

    return response()->json([
        "status" => 1,
        "msg" => "¡Registro de finalizacion exitoso!",
    ]);
}

public function update(Request $request, $id)
    {
        $finalizacion = FinalizacionUtil::findOrFail($request->id);
        $finalizacion->avances = $request->avances;
        $finalizacion->fecha_avance = $request->fecha_avance;
        $finalizacion->precio = $request->precio;
        $finalizacion->proyecto_id = $request->proyecto_id;
        $finalizacion->save();
        return $finalizacion;
    }

public function destroy(Request $request,$id)
    {
        $finalizacion = FinalizacionUtil::destroy($request->id);
        return $finalizacion;
    }
}
