<?php

namespace App\Http\Controllers;
use DB;
use Log;
use App\Equipo;
use Carbon\Carbon;
use Illuminate\Http\Request;


class equipoController extends Controller
{
    public function RegistrarEquipo(Request $request){


        $dataJQ = $request->all();
        $ResultadoTranssacion = false;
        Log::info($dataJQ);

        try {
                $ResultadoTranssacion = false;
                $nuevoEquipo = new Equipo();

              
                $nuevoEquipo->tipo_idEquipo         = $dataJQ['tipo_idEquipo'];
                $nuevoEquipo->equi_nombreTipoEquipo = $dataJQ['equi_nombreTipoEquipo'];
                $nuevoEquipo->marc_id               = $dataJQ['marc_id'];
                $nuevoEquipo->equi_marcaNombre      = $dataJQ['equi_marcaNombre'];
                $nuevoEquipo->equi_serie            = $dataJQ['equi_serie'];
                $nuevoEquipo->equi_modelo           = $dataJQ['equi_modelo'];
                $nuevoEquipo->equi_color            = $dataJQ['equi_color'];
                $nuevoEquipo->equi_estado           = $dataJQ['equi_estado'];
                $nuevoEquipo->equi_comentarios      = $dataJQ['equi_comentarios'];
                $nuevoEquipo->equi_estadoAsigando   = null;
                $nuevoEquipo->equi_asiganadoActualA = null;
                $nuevoEquipo->equi_ubicacionActual  = null;
                $nuevoEquipo->usua_id               = 1;
                $nuevoEquipo->created_at            =Carbon::now();
                $nuevoEquipo->updated_at            = Carbon::now();


                $affected = $nuevoEquipo->save();

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
