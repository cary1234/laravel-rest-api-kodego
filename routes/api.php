<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//Use this code instead of copying the one in the video
Route::resource('customers', CustomerController::class)->except(['create', 'edit']);
//Route::resource('customers', 'App\Http\Controllers\CustomerController', ['except' => ['create', 'edit']]);


//for attendance table
Route::resource('attendances', AttendanceController::class)->except(['create', 'edit']);


Route::get('/search/', PostsController::class . '@search')->name('search');




Route::get('/login/', PostsController::class . '@login')->name('login');
