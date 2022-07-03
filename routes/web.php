<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;

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

//home
Route::get('/', HomeController::class) ->name('site.home');

//blog
Route::get('blog', BlogController::class)->name('site.blog');


//sobre
Route::view('sobre','site.sobre.index')->name('site.about');


//categorias
Route::controller(CategoryController::class)->group(function()
{
    Route::get('produtos','index')->name('site.products');
    Route::get('produtos/{slug}', 'show')->name('site.products.show');
}
);


Route::controller(ContactController::class)->group(function()
{

    Route::get('contato','index')->name('site.contact');

    Route::post('contato','create')->name('site.contact.form');

});

