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

    public function areas()
    {
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */
        $menu = DB::table('menus')->where('menu_nombreformulario', 'areas')->first();
        $menupadre = DB::table('menus')->where('menu_id', $menu->menu_padre)->first();
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */


        return view('areas',compact('menu','menupadre'));
    }


    public function proyectos()
    {
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */
        $menu = DB::table('menus')->where('menu_nombreformulario', 'proyectos')->first();
        $menupadre = DB::table('menus')->where('menu_id', $menu->menu_padre)->first();
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */


        return view('proyectos',compact('menu','menupadre'));
    }

    public function ingresos()
    {
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */
        $menu = DB::table('menus')->where('menu_nombreformulario', 'ingresos')->first();
        $menupadre = DB::table('menus')->where('menu_id', $menu->menu_padre)->first();
        /*SIEMPRE DEVOLVER PARA OBTENER DATOS ESPECIFICOS DEL MENU */


        return view('ingresos',compact('menu','menupadre'));
    }



}
