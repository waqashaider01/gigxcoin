<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/','home1.index')->name("home1.index");
Route::view('home1','home1.index')->name("home1.index");
Route::view('home2','home2.index_two')->name("home2.index_two");

Route::view('home3','home3.index_two')->name("home3.index_two");

Route::view('home4','home4.index_two')->name("home4.index_two");


Route::view('home5','home5.index_two')->name("home5.index_two");





