<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Borramos los datos de la tabla
       App\Proyecto::truncate();
       DB::table('proyectos')->delete();

      /* NEW ROW  */
      DB::table('proyectos')->insert([
          'proy_nombre' => 'Toquepala',
          'proy_estado' => 'ACTIVO',
          'proy_comentarios' => null,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

       /* NEW ROW  */
       DB::table('proyectos')->insert([
        'proy_nombre' => 'Tantahuatay',
        'proy_estado' => 'INACTIVO',
        'proy_comentarios' => null,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);
    }
}
