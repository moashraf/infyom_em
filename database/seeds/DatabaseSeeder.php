<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  $this->call(certificateARsarseeder::class);
       $this->call(certificatesSeeder::class);
        $this->call(galleryalbumsarsseeder::class);
        $this->call(galleryalbumsHideseeder::class);
        $this->call(gallerycategoriesARsarseeder::class);
        $this->call(gallerycategoriesseeder::class);
        $this->call(servicesaRsarseeder::class);
        $this->call(servicesesarseeder::class);
        $this->call(siteStingsSeed::class);
        $this->call(siteStingsSeedAR::class);
        $this->call(slidersARsarseeder::class);
          $this->call(sliderseeder::class);
          */
      
        $this->call(UsersSeeder::class); 

    }
}
