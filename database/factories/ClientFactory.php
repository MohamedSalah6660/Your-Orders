<?php

use Faker\Generator as Faker;
use App\Client;
$factory->define(Client::class, function (Faker $faker) {


    return [
        
	'name' => $faker->name,
	'phone' => $faker->phoneNumber,
	'address' => $faker->address,


    ];
});
