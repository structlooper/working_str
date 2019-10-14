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


Route::get('/', 'IndexController@index')->name('index');
Route::get('/donate','IndexController@donate');
Route::get('/contactUs','IndexController@contact')->name('contact_us');

// about_us......
Route::get('/aboutus/history','AboutController@history');
Route::get('/aboutus/fields','AboutController@fields');
Route::get('/aboutus/team','AboutController@team');
Route::get('/aboutus/resources','AboutController@resources');

//  Events.......
Route::get('/events/pursuning_events','EventsController@current');
Route::get('/events/upcoming_events','EventsController@upcoming');
Route::get('/events/history_events','EventsController@history');

// our works.......
Route::get('/our_works/overview','OurWorkController@overview');
Route::get('/our_works/education','OurWorkController@education');
Route::get('/our_works/health','OurWorkController@health');
Route::get('/our_works/women_enpowerment','OurWorkController@women');

Route::get('home', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
