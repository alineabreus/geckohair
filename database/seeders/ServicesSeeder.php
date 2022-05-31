<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        'title' => 'Limpeza de pele',
    ]);

        DB::table('services')->insert([
            'title' => 'Hidratação facial',
        ]);

        DB::table('services')->insert([
            'title' => 'Esfoliação',
        ]);

        DB::table('services')->insert([
            'title' => 'Drenagem linfática',
        ]);

        DB::table('services')->insert([
            'title' => 'Maquiagem',
        ]);

        DB::table('services')->insert([
            'title' => 'Design de sobrancelhas',
        ]);

        DB::table('services')->insert([
            'title' => 'Massagem relaxante',
        ]);

        DB::table('services')->insert([
            'title' => 'Massagem terapêutica',
        ]);
    }
}
