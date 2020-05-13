<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'nombre' => 'Programación para Internet - 2020A - D12',
            'user_id' => 1,
            'tipo_evento' => 'Asignatura',
            'fecha_inicio' => '2020-02-01',
            'fecha_fin' => '2020-05-30',
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Programación para Internet - 2020A - D13',
            'user_id' => 1,
            'tipo_evento' => 'Asignatura',
            'fecha_inicio' => '2020-02-01',
            'fecha_fin' => '2020-05-30',
        ]);
    }
}
