<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
    return [
        'tiempo_viaje_vuelo' => $faker->randomNumber(),
        'aerolinea_vuelo' => 'LAN',
    ];
});
