<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\product\ProductController;
use App\Http\Controllers\Admin\categories\CategoriesController;
use App\Http\Controllers\Admin\testimonial\TestimonialController;

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

Route::prefix('admin')->name('admin.')->group(function (){
    //Dashboard Route
   Route::resource('dashboard', DashboardController::class);
    //Product Route
   Route::resource('product', ProductController::class)->except('show');
    //Category Route
   Route::resource('categorie', CategoriesController::class)->except('show');
    //Testimonial Route
   Route::resource('testimonial', TestimonialController::class);


});