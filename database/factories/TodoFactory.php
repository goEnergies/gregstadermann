<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
         'text' => $faker->sentence,
         'client_name' => $faker->company,
         'site_name' => $faker->company,
         'tank_name' => $faker->word,
         'finished' => $faker->boolean,
         'created_at'=>$faker->dateTimeBetween('-89 days', '-10 days'),
         'updated_at'=>$faker->dateTimeBetween('-9 days', 'now'),

    ];
});
