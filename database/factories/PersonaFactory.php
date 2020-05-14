<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'apellido_paterno' => $faker->lastName,
        'apellido_materno' => $faker->lastName,
        'nombre' => $faker->firstName,
        'correo' => $faker->unique()->safeEmail,
        'codigo' => $faker->numberBetween(111111, 999999),
        'tipo' => 'Estudiante',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
