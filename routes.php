<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 //Route::get('/', function () {
//    $people = ['Hala','Sunny','Emma'];
   // return View::make();
//    return view('welcome',compact('people')); //return to view/welcome.blade.php

//});


Route::get('/','PageController@home');
Route::get('about','PageController@about');
Route::get('test','PageController@test');
Route::get('phone','PageController@phone');
Route::get('phone/{phone}','PageController@show');
Route::get('testform','PageController@form');
Route::get('phone/{phone}/reserve', ('ReserveController@store'));


