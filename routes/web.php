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
})->name('home');
//Route::get('/sports-cars/all', function () {
  //  return view('sports-cars');
//})->name('sports-cars');

// when you use named routes, any time the url changes, you dont need to go back to all pages to rename the urls again.
// okay
//when using redirecting to views directly you can also use this
Route::view('/sports-cars/all','sports-cars')->name('sports-cars');

// question: so for all my sports cars i dont have to create nen views?
// also hoe do i remore the blue header. been trying 
// answer: when you're getting the data dynamically, yeah, but when they are static, you'll have to 
//