<?php

use Illuminate\Database\Seeder;

class certificatesSeeder extends Seeder
{


public function run() {



    $faker = Faker\Factory::create();
for($i = 0; $i < 10; $i++) {
        App\Models\Certificates::create([

            'title' => $faker->name ,
            'photo' => '6429046134.jpg' ,
 

             ]);    } 


    }



}
