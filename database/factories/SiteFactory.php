<?php

use Faker\Generator as Faker;


$factory->define(App\Site::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'client_id' => $faker->numberBetween(1, 50),
        'contact_id' => $faker->numberBetween(1, 50),
        'street_address' => $faker->streetName,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode,
        'phone_number' => $faker->phoneNumber,
        'time_opens_at' => $faker->dateTime(),
        'time_closes_at' => $faker->dateTime(),
        'created_at'=>$faker->dateTime(),
        'updated_at'=>$faker->dateTime(),
    ];
}

);
