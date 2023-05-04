<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\SosialMediaController;

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

Route::get('//', function () {
    return view('welcome');
});
//Route::get('/',[SiteController::class,'home'])->name('home');




Route::group(['prefix' => 'admin'],function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.home');


    Route::group(['prefix'=>'menu'],function (){
        Route::get('/',[MenuController::class,'index'])->name('menu.index');
        Route::get('/create',[MenuController::class,'create'])->name('menu.create');
        Route::post('/store',[MenuController::class,'store'])->name('menu.store');
        Route::get('/edit/{id}',[MenuController::class,'edit'])->name('menu.edit');
        Route::put('/update/{id}',[MenuController::class,'update'])->name('menu.update');
        Route::delete('/delete/{id}',[MenuController::class,'delete'])->name('menu.delete');
    });

    Route::resource('page',PageController::class)->except('show');

    Route::resource('contact',ContactController::class)->except('show');

    Route::group(['prefix'=>'contactform'],function (){
        Route::get('/',[ContactFormController::class,'index'])->name('contactform.index');
        Route::delete('/delete/{id}',[ContactFormController::class,'delete'])->name('contactform.destroy');
    });

    Route::resource('sosialmedia',SosialMediaController::class)->except('show');

});
