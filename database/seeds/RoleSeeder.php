<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('roles')->truncate();

        DB::table('roles')->insert([
            'nombre'=>'Administrador',
        ]);

        DB::table('roles')->insert([
            'nombre'=>'Empatronador',
        ]);
    }
}
