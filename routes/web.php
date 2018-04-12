<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
 | contains the "web" middleware group. Now create something great!
|
*/


Route::post('request_save', 'requestControllerUSER@store');

Route::get('/', 'HomeController@index');

/*--------------------------------------------------------------------------*/
 
Route::group([ 'prefix' => 'ar' ], function ()
{

Route::get('/', 'HomeControllerAR@index');


});
/*--------------------------------------------------------------------------*/

Auth::routes();
Route::group(['middleware' => 'auth' , 'prefix' => 'admin' ], function ()
{

 Route::resource('/', 'slidersController');
Route::resource('sliders', 'slidersController');
Route::resource('stings', 'stingsController');
Route::resource('certificates', 'CertificatesController');
 Route::resource('services', 'ServicesController');
Route::resource('galleryCategories', 'GalleryCategoryController');
Route::resource('galleryAlbums', 'galleryAlbumController');
Route::resource('requests', 'requestController');


/*--------------------------------------------------------------------------*/

Route::resource('certificatesARs', 'certificatesARController');

Route::resource('galleryAlbumsars', 'gallery_albumsarController');

Route::resource('galleryCategoriesARs', 'gallery_categoriesARController');

Route::resource('servicesARs', 'servicesARController');

Route::resource('slidersARs', 'slidersARController');

Route::resource('settingsARs', 'settingsARController');


});

