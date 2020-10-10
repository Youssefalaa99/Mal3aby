<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{id}',function($id){
    return 'This is user '.$id;
});
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about'])->name('about')->middleware('auth');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact')->middleware('auth');
Route::get('/register',[PagesController::class, 'register']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2')->middleware('auth');
Route::get('/home3', [App\Http\Controllers\HomeController::class, 'index3'])->name('home3')->middleware('auth');
