<?php

use Illuminate\Http\Request;
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

Route::get('/home', function () {
    //dd(parameter twy ko san chin yin "dd" ko thone tl)
    // dd("aung ko ko khant");
    //return ("retrun pyan pay tl ko lo chin dae nY yr ko")
    return view("Home");
});

Route::post('/home', function (Request $req) {
    // return "work";
    // dd($req->name." " .$req->age);
    return "<h2>Name is $req->name . Age is $req->age</h2>";
});

Route::get('/admin', function () {
    return view("admin.index");
});

Route::get('/{name}/{id}', function ($name,$id) {
    return "<h2>Name is ".$name." ID is".$id."</h2>";
});
