<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// HomeRoute
Route::get('/home', [HomeController::class,"index"] );
Route::post('/home',[HomeController::class,"userdata"] );

// AdminRoute
Route::get('/admin', [AdminController::class,"index"]);
Route::get('/{name}/{id}', function ($name,$id) {
    return "<h2>Name is ".$name." ID is".$id."</h2>";
});

Route::get('/about',[HomeController::class,"about"]);
Route::get('/contact',[HomeController::class,"contact"]);
