<?php

use Faker\Generator as Faker;
use App\ProductTranslation;
use App\Product;

$factory->define(ProductTranslation::class, function (Faker $faker) {



    return [

	// 'description' => $faker->regexify('[A-Za-z0-9]{20}'),
	// 'name' => $faker->name,


	// 'product_id' => factory('App\Product')->create()->id,

 	//    'locale' =>	$faker->randomElement(['ar' ,'en']),

    ];
});
