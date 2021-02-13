<?php

namespace App\Http\Controllers;
use DB;
use Log;
use App\Proyecto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class proyectoController extends Controller
{
    public function RegistrarProyecto(Request $request){


        $dataJQ = $request->all();
        $ResultadoTranssacion = false;
        Log::info($dataJQ);

        try {
                $ResultadoTranssacion = false;
                $nuevoProyecto = new Proyecto();

              
                $nuevoProyecto->proy_nombre         = $dataJQ['proy_nombre'];
                $nuevoProyecto->proy_estado = $dataJQ['proy_estado'];
                $nuevoProyecto->proy_comentarios = $dataJQ['proy_comentarios'];
                $nuevoProyecto->created_at            =Carbon::now();
                $nuevoProyecto->updated_at            = Carbon::now();


                $affected = $nuevoProyecto->save();

                if ($affected >= 1) {
                    $ResultadoTranssacion = true;
                }else{
                    $ResultadoTranssacion = false;
                }
                //Log::info($affected);

        } catch (Exception $e) {
            report($e);
            Log::info($e);
        }

            return response()->json($ResultadoTranssacion) ;

    }
}
