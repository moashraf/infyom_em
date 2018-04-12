<?php

use Illuminate\Database\Seeder;
 use App\Models\stings;

class siteStingsSeed extends Seeder
{


public function run() {
 

$add=new stings;
$add->key='Web site name';
$add->value=" high Touch ";
 $add->save();


$add=new stings;
$add->key='first phone';
 $add->value="01123175215";
$add->save();

$add=new stings;
$add->key='second phone';
 $add->value="01123175888";
$add->save();

$add=new stings;
$add->key='Mail';
 $add->value="contact@highTouch.com";
$add->save();

$add=new stings;
$add->key='facebook';
 $add->value="https://www.facebook.com/";
$add->save();

$add=new stings;
$add->key='instagram';
 $add->value="https://www.facebook.com/";
$add->save();

$add=new stings;
$add->key='twitter';
 $add->value="https://www.facebook.com/";
$add->save();

$add=new stings;
$add->key='youtube';
 $add->value="https://www.facebook.com/";
$add->save();



$add=new stings;
$add->key='About Us';
 $add->value="  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.

";
$add->save();

$add=new stings;
$add->key='sub titles';
 $add->value="  Get In Touch";
$add->save();


$add=new stings;
$add->key='Location';
 $add->value="  ش النقطة متفرع من شارع مؤسسة الذكاه . القاهره";
$add->save();

$add=new stings;
$add->key='working time';
 $add->value="  
المواعيد من 09:00 ص الي 05:00 م كل يوم ماعدا الجمعة  ";
$add->save();



    }



}
