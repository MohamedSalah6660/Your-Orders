<?php
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use App\CategoryTranslation;
class CategoryTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    // factory(CategoryTranslation::class, 1)->create(); 

        $locales = ['ar', 'en'];
        $faker = Faker::create();

        foreach ($locales as $index => $locale) {

            \App\CategoryTranslation::create([
               'locale' => $locale,
               'name' => $faker->name,

               'category_id' => 1,
            ]);

       	 \App\CategoryTranslation::create([
	       'locale' => $locale,
	       'name' => $faker->name,

	       'category_id' => 2,
            ]);

        }//end of foreach
    }
    
}
