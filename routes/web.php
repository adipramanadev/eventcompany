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

Route::get('/', function () {
    return view('welcome');
});


//prefix group
Route::group(['prefix'=>'admin'], function(){
    //category Route
    Route::get('coba',function(){
        return '<h1>Hello World</h1>';
    });
});

//helo world route
Route::get('hello',function(){
    return '<h1>Hello World</h1>';
});
