<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i <1 ; $i++) { 
$add=new User;
 
$add->name="highTouch";
$add->email="highTouch@gmail.com";
$add->password= bcrypt("highTouch**2018");
 $add->save();
}
    }
}
