<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TipoEquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Borramos los datos de la tabla
       App\Tipo_equipo::truncate();
       DB::table('tipo_equipos')->delete();

      /* NEW ROW  */
      DB::table('tipo_equipos')->insert([
          'tipo_nombreEquipo' => 'Laptop',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      /* NEW ROW  */
      DB::table('tipo_equipos')->insert([
            'tipo_nombreEquipo' => 'Celular',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
      ]);
    }
}
