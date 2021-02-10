<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Borramos los datos de la tabla
       App\Marca::truncate();
       DB::table('marcas')->delete();


       /* CREAR MENUS HIJOS SEGUNDO   */
       DB::table('marcas')->insert([
           'tipo_idEquipo' => 1,
           'marc_equipoNombre' => 'Laptop',
           'marc_nombre' => 'Lenovo',
           'marc_estado' => 1,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ]);
    }
}
