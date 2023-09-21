<?php

use App\Http\Controllers\Admin\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Admin\Category\CreateController as CategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as CategoryStoreController;
use App\Http\Controllers\Admin\Category\ShowController as CategoryShowController;
use App\Http\Controllers\Admin\Category\EditController as CategoryEditController;
use App\Http\Controllers\Admin\Main\IndexController as MainIndexController;
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



Route::group(['namespace'=>'Controllers\Main'],function(){
    Route::get('/',[IndexController::class, 'index']);
});

Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::group(['namespase'=>'Main'],function(){
        Route::get('/',[MainIndexController::class,'index']);
    });
    Route::group(['namespace'=>'Category','prefix'=>'categories'],function(){
        Route::get('/',[CategoryIndexController::class,'index'])->name('admin.category.index');
        Route::get('/create',[CategoryCreateController::class,'index'])->name('admin.category.create');
        Route::post('/',[CategoryStoreController::class,'index'])->name('admin.category.store');
        Route::get('/{category}',[CategoryShowController::class,'index'])->name('admin.category.show');
        Route::get('/{category}/edit',[CategoryEditController::class,'index'])->name('admin.category.edit');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
