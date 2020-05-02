<?php

use Faker\Generator as Faker;
use App\Product;
use App\Category;
$factory->define(Product::class, function (Faker $faker) {


	// $filepath = public_path('uploads/product_images');
    $cats = Category::pluck('id')->toArray();



    return [
	'category_id' => $faker->randomElement($cats),
	'purchase_price' => mt_rand(50,100),
	'sale_price' => mt_rand(100,200),
	'stock' => mt_rand(0,100),
	// 'image' => $faker->image($dir= $filepath, $width = '200', $height ='100' , null, false) 

];
});
