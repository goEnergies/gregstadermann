<?php

use Faker\Generator as Faker;
use Faker\Provider\Address;

$factory->define(App\Client::class, function (Faker $faker) {
    $company_name=$faker->company;

    return [
        'name' => $company_name,
        'legal_name' => $company_name,
        'tax_payer_id' => $faker->randomNumber(9),
		'description' => $faker->sentence(8),
        'street_address'=>$faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => Address::postcode(),
        'tax_exempt_federal'=> $faker->boolean(20),
        'tax_exempt_state'=> $faker->boolean(20),
        'tax_exempt_county'=> $faker->boolean(20),
		'created_at'=>$faker->dateTime(),
		'updated_at'=>$faker->dateTime(),
        //'site_id' => App\Site::pluck('id')->random(),


    ];
});
