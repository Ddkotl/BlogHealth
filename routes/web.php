<?php

use App\Http\Controllers\Admin\Main\IndexAdminController;
use App\Http\Controllers\Main\IndexController;
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
Route::group(['namespase'=>'Main'],function(){
    Route::get('/',[IndexController::class, 'index']);
});

Route::group(['namespase'=>'Admin','prefix'=>'admin'],function(){
    Route::group(['namespase'=>'Main'],function(){
        Route::get('/',[IndexAdminController::class, 'index']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
