<?php

use Faker\Generator as Faker;


$factory->define(App\Tank::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'max_volume'=>$faker->numberBetween(6000, 10000),
        'current_volume'=>$faker->numberBetween(1, 10000),
		'created_at'=>$faker->dateTime(),
		'updated_at'=>$faker->dateTime(),


    ];
});
