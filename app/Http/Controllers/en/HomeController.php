<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\sliders;
 use App\Models\Certificates;
 use App\Models\Services;
 use App\Models\galleryAlbum;
 use App\Models\GalleryCategory;

class HomeController extends Controller
{
   
   function __construct() { 
   	  App()->setLocale('en');

    }

    public function index()
    { 

  
    
        $sliders =   sliders::take(8)->get();
       $Certificates =   Certificates::take(15)->get();
       $Services =   Services::take(20)->get();
       $galleryAlbum =   galleryAlbum::take(50)->get();
       $GalleryCategory =   GalleryCategory::take(50)->get();
       

         return view('main.homepage')->with('GalleryCategory', $GalleryCategory )->with('galleryAlbum', $galleryAlbum )->with('Certificates', $Certificates )->with('sliders', $sliders )->with('Services', $Services ) ;
     }
}
