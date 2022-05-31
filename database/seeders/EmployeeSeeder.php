<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => 'Aline Abreu',
            'phone' => '(82) 3221-1234',
            'mobile' => '(82) 99999-8888',
            'employee_role_id' => 1,
            'salary' => 'R$ 5.000',
            'user_id' => 1
        ]);

        DB::table('employees')->insert([
            'name' => 'Fulano de Tal',
            'phone' => '(82) 1124-1234',
            'mobile' => '(82) 98745-1234',
            'employee_role_id' => 2,
            'salary' => 'R$ 3.000',
            'user_id' => 5
        ]);

        DB::table('employees')->insert([
            'name' => 'Cicrano de Fulano',
            'phone' => '(82) 4544-3323',
            'mobile' => '(82) 99281-8938',
            'employee_role_id' => 3,
            'salary' => 'R$ 4.000',
            'user_id' => 6
        ]);

        DB::table('employees')->insert([
            'name' => 'Maria Dourada',
            'phone' => '(82) 8745-2542',
            'mobile' => '(82) 98754-7452',
            'employee_role_id' => 2,
            'salary' => 'R$ 2.500',
            'user_id' => 7
        ]);

        DB::table('employees')->insert([
            'name' => 'Helena Alves',
            'phone' => '(82) 3871-1234',
            'mobile' => '(82) 97745-9874',
            'employee_role_id' => 2,
            'salary' => 'R$ 2.800',
            'user_id' => 8
        ]);

    }
}
