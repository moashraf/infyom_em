<?php

use Illuminate\Database\Seeder;

class servicesaRsarseeder extends Seeder
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
                App\Models\Services::create([
        
                    'title' => $faker->name ,
                    'body' => $faker->text ,
                    'photo' => '6429046134.jpg'  ,
                    'link' =>'https://www.google.com.eg' ,

         
        
                     ]);    }  

    }
}
