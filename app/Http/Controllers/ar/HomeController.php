<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\slidersAR;
 use App\Models\certificatesAR;
 use App\Models\servicesAR;
 use App\Models\gallery_albumsar;
 use App\Models\gallery_categoriesAR;

class HomeControllerAR extends Controller
{
   
   function __construct() { 
   	  App()->setLocale('ar');

    }

    public function index()
    {     
        $sliders =   slidersAR::take(8)->get();
       $Certificates =   certificatesAR::take(20)->get();
       $Services =   servicesAR::take(20)->get();
       $galleryAlbum =   gallery_albumsar::take(50)->get();
       $GalleryCategory =   gallery_categoriesAR::take(50)->get();
       

         return view('main.homepage')->with('GalleryCategory', $GalleryCategory )->with('galleryAlbum', $galleryAlbum )->with('Certificates', $Certificates )->with('sliders', $sliders )->with('Services', $Services ) ;
     }
}
