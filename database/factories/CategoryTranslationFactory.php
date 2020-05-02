<?php

use Faker\Generator as Faker;
use App\CategoryTranslation;
use App\Category;

$factory->define(CategoryTranslation::class, function (Faker $faker) {


    return [
	// 'name' => $faker->name,


	// 'category_id' => factory('App\Category')->create()->id,

 //    'locale' =>	$faker->randomElement(['ar' ,'en']),

    ];
});
