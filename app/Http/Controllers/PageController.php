<?php

namespace App\Http\Controllers;
use DB;
use Log;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */
        $menu = DB::table('menus')->where('menu_nombreformulario', 'equipos')->first();
        $menupadre = DB::table('menus')->where('menu_id', $menu->menu_padre)->first();
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */

        //$areas = DB::table('areas')->get();
        //$empresas = DB::table('empresas')->get();
        return view('inicio',compact('menu','menupadre'));


    }

    public function equipos()
    {
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */
        $menu = DB::table('menus')->where('menu_nombreformulario', 'equipos')->first();
        $menupadre = DB::table('menus')->where('menu_id', $menu->menu_padre)->first();
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */

        //$areas = DB::table('areas')->get();
        $tipoEquipos = DB::table('tipo_equipos')->get();
        return view('equipos',compact('menu','menupadre','tipoEquipos'));


    }

    public function marcas()
    {
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */
        $menu = DB::table('menus')->where('menu_nombreformulario', 'marcas')->first();
        $menupadre = DB::table('menus')->where('menu_id', $menu->menu_padre)->first();
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */

        $tipoEquipos = DB::table('tipo_equipos')->get();
        return view('marcas',compact('menu','menupadre','tipoEquipos'));
    }


}
