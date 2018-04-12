<?php

use Illuminate\Database\Seeder;

class gallerycategoriesARsarseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 5; $i++) {
                App\Models\gallery_categoriesAR::create([
        
                    'title' => $faker->name ,
                    'body' => $faker->text , 

         
        
                     ]);    } 

    }
}
