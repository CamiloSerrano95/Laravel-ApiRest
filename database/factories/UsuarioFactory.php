<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'last_name'  => $faker->lastName,
        'address'    => $faker->address,
        'state'      => $faker->state,
        'back_months'=> $faker->randomNumber(1)

    ];
});
