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
        'time_opens_at' => $faker->dateTimeThisMonth(),
        'time_closes_at' => $faker->dateTimeThisMonth(),
        'created_at'=>$faker->dateTimeBetween('-89 days', '-10 days'),
        'updated_at'=>$faker->dateTimeBetween('-9 days', 'now'),
    ];
}
//ranging from today ending in 2 years
//$faker->dateTimeBetween('+0 days', '+2 years')

//ranging from next week ending in 1 month
//$faker->dateTimeBetween('+1 week', '+1 month')

//ranging from next sunday to next wednesday (if today is wednesday)
//$faker->dateTimeBetween('next sunday', 'next wednesday')
);
