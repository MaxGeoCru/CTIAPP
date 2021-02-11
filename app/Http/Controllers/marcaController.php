<?php

namespace App\Http\Controllers;
use DB;
use Log;
use App\Marca;
use Carbon\Carbon;
use Illuminate\Http\Request;

class marcaController extends Controller
{
    public function RegistrarMarca(Request $request){


        $dataJQ = $request->all();
        $ResultadoTranssacion = false;

        try {
                $ResultadoTranssacion = false;
                $nuevoMarca = new Marca();

                $nuevoMarca->tipo_idEquipo      = $dataJQ['tipo_idEquipo'];
                $nuevoMarca->marc_equipoNombre  = $dataJQ['marc_equipoNombre'];
                $nuevoMarca->marc_nombre        = $dataJQ['marc_nombre'];
                $nuevoMarca->marc_estado        = 1;
                $nuevoMarca->created_at         = Carbon::now();
                $nuevoMarca->updated_at         = Carbon::now();

                $affected = $nuevoMarca->save();

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

    public function ObtenerMarcaPorIdEquipo($tipo_idEquipo){

        $marcas = DB::table('marcas')->where('marc_id', $tipo_idEquipo)->get();
        return response()->json($marcas);

    }
}
