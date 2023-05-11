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

use App\Http\Controllers\portfolioController;
use App\Http\Controllers\contactController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/portfolio', [portfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/create', [portfolioController::class, 'create'])->name('portfolio.create');
Route::post('/portfolio', [portfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/{project}', [portfolioController::class, 'show'])->name('portfolio.show');

Route::post('contact', [contactController::class, 'store']);

//Route::resource('portfolio', portfolioController::class);
