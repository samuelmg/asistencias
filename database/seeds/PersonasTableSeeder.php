<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Persona::class, 20)->create()->each(function ($persona) {
            $persona->eventos()->attach(1);
        });

        factory(App\Persona::class, 20)->create()->each(function ($persona) {
            $persona->eventos()->attach(2);
        });
    }
}
