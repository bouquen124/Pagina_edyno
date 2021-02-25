<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Galeria;
use Faker\Generator as Faker;

$factory->define(Galeria::class, function (Faker $faker) {

    return [
        'titulo' => $faker->word,
        'descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
