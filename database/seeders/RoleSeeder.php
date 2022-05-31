<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('employee_roles')->insert([
            'title' => 'Gerente',
        ]);

        DB::table('employee_roles')->insert([
            'title' => 'Cabeleireiro',
        ]);

        DB::table('employee_roles')->insert([
            'title' => 'Serviços Gerais',
        ]);
    }
}
