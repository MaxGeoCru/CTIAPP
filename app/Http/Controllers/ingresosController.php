<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\EnvioCorreo;
use App\Mail\MessageEmail;
use Illuminate\Support\Facades\Mail;
use Log;


class ingresosController extends Controller
{
    public function sendMail(Request $request)
   {
       try {
        $dataJQ = $request->all();
        $ingr_dynamics=$this->concatenar($dataJQ['ingr_dynamics']);
        $ingr_adryan=$this->concatenar($dataJQ['ingr_adryan']);
        $DestinatarioCorreo=$dataJQ['ingr_correo_ingresado'];

        $data = array(
            'ingr_email' => $dataJQ['ingr_email'],
            'ingr_nombre' => $dataJQ['ingr_nombre'],
            'ingr_segundonombre' => $dataJQ['ingr_segundonombre'],
            'ingr_apepat' => $dataJQ['ingr_apepat'],
            'ingr_apemat' => $dataJQ['ingr_apemat'],
            'ingr_dni' => $dataJQ['ingr_dni'],

            'ingr_compania' => $dataJQ['ingr_compania'],
            'ingr_fecha' => $dataJQ['ingr_fecha'],
            'ingr_area' => $dataJQ['ingr_area'],
            'ingr_puesto' => $dataJQ['ingr_puesto'],

            'ingr_ccorporativo' => $dataJQ['ingr_ccorporativo'],
            'ingr_anexo' => $dataJQ['ingr_anexo'],
            'ingr_carpetas' => $dataJQ['ingr_carpetas'],
            'ingr_remplazo' => $dataJQ['ingr_remplazo'],
            'ingr_heredar' => $dataJQ['ingr_heredar'],

            'ingr_dynamics' => $ingr_dynamics,
            'ingr_adryan' => $ingr_adryan,
            'ingr_mviaticos' => $dataJQ['ingr_mviaticos'],
            'ingr_mcapacitacion' => $dataJQ['ingr_mcapacitacion'],
            'ingr_mevaluacion' => $dataJQ['ingr_mevaluacion'],
            'ingr_mconformidades' => $dataJQ['ingr_mconformidades'],
            'ingr_rpts' => $dataJQ['ingr_rpts'],
            'ingr_compradora' => $dataJQ['ingr_compradora']
   
            

          );

//          Mail::to('kyscompani@gmail.com')->send(new EnvioCorreo($data));
            Mail::to($DestinatarioCorreo)->send(new MessageEmail($data));
        //  Log::info($data);
       } catch (Exception $e) {
          Log::info($e);
       }
    



        //$correo=new EnvioCorreo($ingr_email);
       // Mail::to('kyscompani@gmail.com')->send(new EnvioCorreo($data));
        //return "Mensaje enviado";

    }

    public function concatenar($data){
        $data=explode("*", $data);
        Log::info($data);
        Log::info(count($data));
        $resultado="";
        for($x=0;$x<=count($data)-2;$x++){
            if($x>=count($data)-2)
            $resultado=$resultado."".$data[$x];
            else
            $resultado=$resultado."".$data[$x].", ";

      }
        return $resultado;
    }
}
