<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Borramos los datos de la tabla
       App\Area::truncate();
       DB::table('areas')->delete();


        /* NEW ROW  */
       DB::table('areas')->insert([
           'area_nombre' => 'Administracion',
           'area_estado' => 'ACTIVO',
           'usua_id' => 1,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ]);

       /* NEW ROW  */
       DB::table('areas')->insert([
        'area_nombre' => 'Contabilidad',
        'area_estado' => 'ACTIVO',
        'usua_id' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);
    }
}
