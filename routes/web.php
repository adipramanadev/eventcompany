<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TiketController;
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
    Route::get('category',[CategoryController::class,'index'])->name('category.index');
    Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('category',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

    //events Route
    Route::get('events',[EventController::class,'index'])->name('events.index');
    Route::get('events/create',[EventController::class,'create'])->name('events.create');
    Route::post('events',[EventController::class,'store'])->name('events.store');
    Route::get('events/edit/{id}',[EventController::class,'edit'])->name('events.edit');
    Route::put('events/update/{id}',[EventController::class,'update'])->name('events.update');
    Route::delete('events/delete/{id}',[EventController::class,'destroy'])->name('events.destroy');

    //tiket route
    Route::get('tiket',[TiketController::class,'index'])->name('ticket.index');
    Route::get('tiket/create',[TiketController::class,'create'])->name('ticket.create');
    Route::post('tiket',[TiketController::class,'store'])->name('ticket.store');
    Route::get('tiket/edit/{id}',[TiketController::class,'edit'])->name('ticket.edit');
    Route::put('tiket/update/{id}',[TiketController::class,'update'])->name('ticket.update');
    Route::delete('tiket/delete/{id}',[TiketController::class,'destroy'])->name('ticket.destroy');

});

//helo world route
Route::get('hello',function(){
    return '<h1>Hello World</h1>';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
