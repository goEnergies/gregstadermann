<?php

use Faker\Generator as Faker;


$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'description' => $faker->name,
        'address'=>$faker->streetAddress,
		'created_at'=>$faker->dateTime(),
		'updated_at'=>$faker->dateTime(),
//		'site_id'=>1,
		//'deleted_at'=>$faker->dateTime(),
 		'site_id' => App\Site::pluck('id')->random(),


    ];
});
