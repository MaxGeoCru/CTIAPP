<?php

namespace App\Http\Controllers;
use DB;
use Log;
use App\Area;
use Carbon\Carbon;
use Illuminate\Http\Request;


class areaController extends Controller
{
    public function RegistrarArea(Request $request){


        $dataJQ = $request->all();
        $ResultadoTranssacion = false;
        Log::info($dataJQ);

        try {
                $ResultadoTranssacion = false;
                $nuevaArea = new Area();

              
                $nuevaArea->area_nombre = $dataJQ['area_nombre'];
                $nuevaArea->area_estado = 0;
                $nuevaArea->usua_id     = 1;
                $nuevaArea->created_at  =Carbon::now();
                $nuevaArea->updated_at  = Carbon::now();


                $affected = $nuevaArea->save();

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
