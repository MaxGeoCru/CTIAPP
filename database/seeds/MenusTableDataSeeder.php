<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MenusTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        App\Menu::truncate();
        DB::table('menus')->delete();


        /* CREAR MENUS HIJOS SEGUNDO   */
        DB::table('menus')->insert([
            'menu_nombre' => 'Equipos',
            'menu_descripcion' => 'Equipos',
            'menu_padre' => '1',
            'menu_icono' => 'fa fa-fw fa-desktop',
            'menu_espadre' => '0',
            'menu_nombreformulario' => 'equipos',
            'usua_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

         /* NEW ROW  */
         DB::table('menus')->insert([
            'menu_nombre' => 'Marca Equipo',
            'menu_descripcion' => 'Marcas de equipos',
            'menu_padre' => '1',
            'menu_icono' => 'fa fa-fw fa-rocket',
            'menu_espadre' => '0',
            'menu_nombreformulario' => 'marcas',
            'usua_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /* NEW ROW  */
        DB::table('menus')->insert([
            'menu_nombre' => 'Areas',
            'menu_descripcion' => 'Areas o unidades funcionales',
            'menu_padre' => '1',
            'menu_icono' => 'fa fa-fw fa-book',
            'menu_espadre' => '0',
            'menu_nombreformulario' => 'areas',
            'usua_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /* NEW ROW  */
        DB::table('menus')->insert([
            'menu_nombre' => 'Proyectos',
            'menu_descripcion' => 'Proyectos',
            'menu_padre' => '1',
            'menu_icono' => 'fa fa-fw fa-truck',
            'menu_espadre' => '0',
            'menu_nombreformulario' => 'proyectos',
            'usua_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
