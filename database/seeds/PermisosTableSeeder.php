<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Borramos los datos de la tabla
         App\Permiso::truncate();
         DB::table('permisos')->delete();

        /* NEW ROW  */
        DB::table('permisos')->insert([
            'menu_id' => 1,
            'rol_id' => 1,
            'rol_nombre' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /* NEW ROW  */
        DB::table('permisos')->insert([
            'menu_id' => 2,
            'rol_id' => 1,
            'rol_nombre' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

          /* NEW ROW  */
          DB::table('permisos')->insert([
            'menu_id' => 3,
            'rol_id' => 1,
            'rol_nombre' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

          /* NEW ROW  */
          DB::table('permisos')->insert([
            'menu_id' => 4,
            'rol_id' => 1,
            'rol_nombre' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
