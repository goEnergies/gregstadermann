<?php

use Faker\Generator as Faker;


$factory->define(App\Tank::class, function (Faker $faker) {
    return [
        'name' => 'Tank'.$faker->word,
        'site_id' => $faker->numberBetween(1, 50),
        'product_id' => $faker->numberBetween(1, 50),
        'volume_max' => $faker->numberBetween(10000, 30000),
        'volume_current' => $faker->numberBetween(1, 10000),
        'volume_capacity_limit' => $faker->numberBetween(80, 95),
        'pump'=> $faker->boolean,
		'created_at'=>$faker->dateTimeThisMonth(),
		'updated_at'=>$faker->dateTimeThisMonth(),


    ];
});
