<?php

use Illuminate\Database\Seeder;

class certificateARsarseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
                App\Models\certificatesAR::create([
        
                    'title' => $faker->name ,
                    'photo' => '6429046134.jpg'  ,
         
        
                     ]);    } 

    }
}
