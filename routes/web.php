<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\SosialMediaController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;



use App\Http\Controllers\SiteController;

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

//Route::get('//', function () {
//    return view('welcome');
//});
Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/shop',[SiteController::class,'shop'])->name('shop');
Route::get('/shop/{title}',[SiteController::class,'shopcategory'])->name('shopcategory');
Route::get('/product/{id}',[SiteController::class,'productdetail'])->name('productdetail');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/contact',[SiteController::class,'contact'])->name('contact');
Route::post('/contact',[SiteController::class,'contactstore'])->name('contactstore');
Route::get('/page/{slug}',[SiteController::class,'page'])->name('page');


Route::get('/admin/login',[LoginController::class,'index'])->name('admin.login');
Route::post('/admin/login',[LoginController::class,'login'])->name('admin.login');



//admin
Route::group(['prefix' => 'admin','middleware'=>'admincheck'],function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.home');

    Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');


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
    Route::resource('category',CategoryController::class)->except('show');
    Route::resource('product',ProductController::class)->except('show');
    Route::resource('productimage',ProductImageController::class)->except('show');
    Route::resource('sosialmedia',SosialMediaController::class)->except('show');


    Route::group(['prefix'=>'contactform'],function (){
        Route::get('/',[ContactFormController::class,'index'])->name('contactform.index');
        Route::delete('/delete/{contactform}',[ContactFormController::class,'destroy'])->name('contactform.destroy');
    });


});
