<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class plantillaControl extends Controller
{
    public static function ObtenerMenusPadres(){


        $menusPadres = DB::table('menus')->where('menu_espadre', '1')->where('menu_espadre', '1')->get();


        return ($menusPadres);

    }

    public static function ObtenerMenusHijos($Menu_Id){


        $menusHijos = DB::table('menus')->where('menu_padre', $Menu_Id)->get();

        return ($menusHijos);

    }

    public static function ObtenerUnicoMenu($Menu_NombreFormulario){

        $NombreFormulario = DB::table('menus')->where('menu_nombreformulario', $Menu_NombreFormulario)->first();
        return ($NombreFormulario);

    }

    public static function ObtenerUnicoMenuById($Menu_id){

        $NombreFormulario = DB::table('menus')->where('menu_id', $Menu_id)->first();
        return ($NombreFormulario);

    }

    public static function ObtenerMenusPermiso(){

        $rolId = auth()->user()->rol_id;
        $menusRol = DB::table('permisos')->where('rol_id', $rolId)->get();
        return ($menusRol);

    }
}
