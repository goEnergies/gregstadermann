<?php

use Faker\Generator as Faker;


$factory->define(App\Site::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address'=>$faker->streetAddress,
		'created_at'=>$faker->dateTime(),
		'updated_at'=>$faker->dateTime(),
		//'client_id'=>1,
		//'tank_id'=>1,
 		//'tank_id' => App\Tank::pluck('id')->random(),
		//'deleted_at'=>$faker->dateTime(),


    ];
});
