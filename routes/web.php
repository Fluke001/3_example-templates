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

// Route::get('/', function () {
//     return view('welcome');
// });






//Start Promote อาจารย์เดียร์//
Route::view('/', 'promotepage.home')->name('home');

// Route::view('/house-blend', 'promotepage.house-blend')->name('house-blend');
Route::get('menu',  [App\Http\Controllers\menuController::class, 'index'])->name('promotepage.menu');
Route::get('bamboo',  [App\Http\Controllers\bambooController::class, 'index'])->name('promotepage.bamboo');
Route::get('book',  [App\Http\Controllers\bookController::class, 'index'])->name('promotepage.book');



Auth::routes();


//End Promote อาจารย์เดียร์//

//Start Admin//

Route::get('/admin/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');

Route::get('/admin/about',  [App\Http\Controllers\AboutController::class, 'index'])->name('adminpage.adminabout');
Route::get('/admin/about/add',  [App\Http\Controllers\AboutController::class, 'fromadd'])->name('adminpage.adminaboutform');

Route::get('/admin/foodInformation',  [App\Http\Controllers\FoodinformationController::class, 'index'])->name('adminpage.adminfoodInformation');

Route::get('/admin/newsandevents',  [App\Http\Controllers\NewsandeventsController::class, 'index'])->name('adminpage.adminnewsandevents');

//End Admin//
