<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
       App\Equipo::truncate();
       DB::table('equipos')->delete();


       /* CREAR MENUS HIJOS SEGUNDO   */
       DB::table('equipos')->insert([
           'tipo_idEquipo' => 1,
           'equi_nombreTipoEquipo' => 'Laptop',
           'marc_id' => '1',
           'equi_marcaNombre' => 'Lenovo',
           'equi_serie' => 'ABC00000',
           'equi_modelo' => 'L575',
           'equi_color' => 'NEGRO',
           'equi_estado' => 'ACTIVO',
           'equi_comentarios' => null,
           'equi_estadoAsigando' => null,
           'equi_asiganadoActualA' => null,
           'equi_ubicacionActual' => null,
           'usua_id' => 1,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ]);
    }
}
