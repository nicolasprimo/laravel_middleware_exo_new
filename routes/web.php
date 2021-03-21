<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/article', [ArticleController::class, 'indexMembre'])->name('article')->middleware('isConnected');

Route::get('/article/{article}', [ArticleController::class, 'showMembre'])->name('article.showMembre')->middleware('isConnected');

Route::resource('/admin/article', ArticleController::class);
Route::resource('/admin/user', UserController::class)->middleware('Admin');
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('RoleVerification');
