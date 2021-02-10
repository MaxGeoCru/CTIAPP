<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Borramos los datos de la tabla
         App\User::truncate();
         DB::table('users')->delete();


         /* CARGA INCIAL DE DATOS  */

       DB::table('users')->insert([
        'name' => 'administrador',
        'email' => 'admin@gmail.com',
        'email_verified_at' => NULL,
        'password' => Hash::make('admin123'),
        'rol_id' => '1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()

    ]);
    }
}
