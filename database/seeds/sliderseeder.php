<?php

use Illuminate\Database\Seeder;

class sliderseeder extends Seeder
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
                App\Models\sliders::create([
        
                    'title' => $faker->name ,
                    'body' => $faker->text ,
                    'photo' => '6429046134.jpg'  ,
 
         
        
                     ]);    }  
    }
}
