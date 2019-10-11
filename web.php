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
    return view('index');
});
Route::get('sayhello', function (){
    return view('hello');
});
Route::get('home', function (){
    return view('welcome');
});
Route::get('contact','Contact@contact');
// Route::get('homes','Fomes@index');
// Route::get('fomes/{username}/','Fomes@fomes');
// Route::get('images/img1.jpg', function(){
//     return views('imag2');
// });