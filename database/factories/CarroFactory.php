<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Carro::class, function (Faker $faker) {
    $marcas = ['Lada', 'Nissan', 'Audi', 'Mercedes Benz', 'Moschovish', 'Plimo', 'Toyota', 'Chevrolet', 'Geely'];
    $transmisiones = ['Automático', 'Mecánico', 'Semiautomático'];
    $estados = ['Disponible', 'Rentado', 'Taller', 'Roto', 'Baja'];

    $tipos_id = \App\Models\Tipo::all()->pluck('id')->toArray();

    $chapa = $faker->unique()->regexify('[A-Z]{3}-\d{5}');
    return [
        'chapa' =>$chapa,
        'marca' => $faker->randomElement($marcas),
        'moderno' => $faker->boolean,
        'plazas' => $faker->numberBetween(2,8),
        'transmision' => $faker->randomElement($transmisiones),
        'estado' => $faker->randomElement($estados),

        'tipo_id' => $faker->randomElement($tipos_id)
    ];
});
