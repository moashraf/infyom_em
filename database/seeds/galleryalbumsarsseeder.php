<?php

use Illuminate\Database\Seeder;

class galleryalbumsarsseeder extends Seeder
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
                App\Models\gallery_albumsar::create([
        
                    'title' => $faker->name ,
                    'body' => $faker->text ,
                     'photo' => '6429046134.jpg'  ,
                    'cat_id' =>(rand(2,10)) ,

         
        
                     ]);    } 

    }
}
