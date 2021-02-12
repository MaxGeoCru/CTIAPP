<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MenusTableDataSeeder::class);
        $this->call(PermisosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(TipoEquipoTableSeeder::class);
        $this->call(EquiposTableSeeder::class);
        $this->call(ProyectosTableSeeder::class);
        $this->call(AreasTableSeeder::class);

    }
}
