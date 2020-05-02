<?php

use Illuminate\Database\Seeder;
use App\ProductTranslation;
use Faker\Factory as Faker;
use App\Product;
use App\Category;
class ProductTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     // factory(ProductTranslation::class, 5)->create(); 
        $faker = Faker::create();

    	     $locales = ['ar', 'en'];

        foreach ($locales as $index => $locale) {

            \App\ProductTranslation::create([

               'locale' => $locale,
               'name' => $faker->name,
				'description' => $faker->regexify('[A-Za-z0-9]{20}'),
               'product_id' => 1,
            ]);

            \App\ProductTranslation::create([

               'locale' => $locale,
               'name' => $faker->name,
				'description' => $faker->regexify('[A-Za-z0-9]{20}'),
               'product_id' => 2,
            ]);

        }//end of foreach


        
    }
}
