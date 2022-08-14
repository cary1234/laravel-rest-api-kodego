<?php

//all requirements will be log here
//composer require fruitcake/laravel-cors
//php artisan vendor:publish --tag="cors"




//Note: This project is based on tutorial in youtube playlist
//https://www.youtube.com/watch?v=j0YMHZExdYs&list=PLilopcxfR1tXp6qEKc-jF9AVyszrDX3Yv&index=2&ab_channel=CodeForYou

use Illuminate\Support\Facades\Route;

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
    return view('search');
});
