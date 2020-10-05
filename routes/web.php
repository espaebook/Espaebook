<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	
Route::get('/', function () {
  return view('welcome');
});
 

Route::get('portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio-details');

Route::post('/contact', 'EmailController@contact')->name('contact');


Route::get('lang/{lang}', function($lang) {
  \Session::put('lang', $lang);
  return \Redirect::back();
})->middleware('web')->name('change_lang');