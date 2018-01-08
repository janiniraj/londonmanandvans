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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PageController@home')->name('frontend.home');

/*Route::get('/about', function () {
    return view('frontend/about');
})->name('frontend.about');

Route::get('/pricing', function () {
    return view('frontend/pricing');
})->name('frontend.pricing');

Route::get('/contact', function () {
    return view('frontend/contact');
})->name('frontend.contact');

//Route::get('/test', 'TestController@index')->name('frontend.test');*/

Route::get('/{slug}', 'PageController@index')->name('frontend.page');
