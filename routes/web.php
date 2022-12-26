<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/about',[HomeController::class,'about'])->name('about');

Route::get('/actualite',[HomeController::class,'actualite'])->name('actualite');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/galerie',[HomeController::class,'galerie'])->name('galerie');

Route::get('/realisation',[HomeController::class,'realisation'])->name('realisation');
