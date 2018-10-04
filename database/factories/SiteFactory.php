<?php

use Faker\Generator as Faker;


$factory->define(App\Site::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address'=>$faker->streetAddress,
		'created_at'=>$faker->dateTime(),
		'updated_at'=>$faker->dateTime(),
		    ];
});
