<?php

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


Route::get('/','PagesController@home')->name('home');

Route::get('/about','PagesController@about')->name('about');

Route::get('/contact','PagesController@contact')->name('contact');

Auth::routes();

Route::prefix('management')->namespace('admin')->group(function(){
	Route::get('/','dashbaordController@dashboard')->name('admin.dashbaord');
	Route::get('/categories','categoriesController@cat')->name('admin.categories');
	Route::prefix('category')->group(function(){
		Route::post('/add','categoriesController@add')->name('admin.adcat');
		Route::get('/delete/{id}','categoriesController@destroy')->name('admin.delcat');
		Route::get('/edit/{id}','categoriesController@edit')->name('admin.editcat');
		Route::post('/update/{id}','categoriesController@update')->name('admin.updatecat');
	});
	Route::resource('/products','productsController');
});

//Route::get('/home', [HomeController::class, 'index'])->name('home');
