
<?php

use Illuminate\Database\Seeder;
 use App\Models\settingsAR;

class siteStingsSeedAR extends Seeder
{


public function run() {
 

$add=new settingsAR;
$add->key='Web site name';
$add->value="   هاي تاتش ";
 $add->save();


$add=new settingsAR;
$add->key='first phone';
 $add->value="01123175215";
$add->save();

$add=new settingsAR;
$add->key='second phone';
 $add->value="01123175215";
$add->save();

$add=new settingsAR;
$add->key='Mail';
 $add->value="contact@highTouch.com/";
$add->save();

$add=new settingsAR;
$add->key='facebook';
 $add->value="https://www.facebook.com/";
$add->save();

$add=new settingsAR;
$add->key='instagram';
 $add->value="https://www.facebook.com/";
$add->save();

$add=new settingsAR;
$add->key='twitter';
 $add->value="https://www.facebook.com/";
$add->save();

$add=new settingsAR;
$add->key='youtube';
 $add->value="https://www.facebook.com/";
$add->save();



$add=new settingsAR;
$add->key='About Us';
 $add->value=" متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة . مصنع بسكويت سوري متخصص في تصنيع البسكويت السادة والويفر والمغطس والسندوتش عالي الجودة .

 ";
$add->save();

$add=new settingsAR;
$add->key='sub titles';
 $add->value="  في تصنيع  ";
$add->save();


$add=new settingsAR;
$add->key='Location';
 $add->value="  ش النقطة متفرع من شارع مؤسسة الذكاه . القاهره";
$add->save();

$add=new settingsAR;
$add->key='working time';
 $add->value="  
المواعيد من 09:00 ص الي 05:00 م كل يوم ماعدا الجمعة  ";
$add->save();



    }



}
