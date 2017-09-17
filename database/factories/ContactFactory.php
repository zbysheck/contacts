<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    echo "lala";
    return [
        'name' => $faker->firstName(),
        'surname' => $faker->lastName,
        'mail' => $faker->unique()->safeEmail,
        'phone' => $faker->randomNumber(9, true),
        'birth' => $faker->date(),

    ];
});
