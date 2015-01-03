<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/* default route 
Route::get('/', function()
{
	return View::make('angular');
});
*/
Route::get('/', 'PagesController@showHome');
Route::get('/about', 'PagesController@showAbout');
Route::get('/blog', 'PagesController@showBlog');
Route::get('/boozetique', 'PagesController@showBoozetique');
Route::get('/contact', 'PagesController@showContact');
Route::post('/contact_request', 'PagesController@getContactUsForm');
Route::get('/events', 'PagesController@showEvents');
Route::get('/gallery', 'PagesController@showGallery');
Route::get('/map', 'PagesController@showMap');
Route::get('/press', 'PagesController@showPress');
Route::get('/services', 'PagesController@showServices');


#Route::pattern('folder', '[A-Za-z]{1-20}');
Route::get('/api/get-pics/', function(){
    
    
    $images = glob(public_path().'/img/*.{jpg,png,jpeg,gif}', GLOB_BRACE);
    
    $imgArray = array();
    
    //var_dump($images);
    
    foreach($images as $image){
        array_push($imgArray, basename($image));
    }
    
   return Response::json($imgArray);
    
});

/* default route
App::missing(function($exception)
{
    return View::make('angular');
});
 * 
 */