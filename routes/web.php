<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [App\Http\Controllers\PagesRouteController::class, 'welcome'])->name('welcome');
Route::get('/factsAboutSlovakia', [App\Http\Controllers\PagesRouteController::class, 'facts'])->name('factsAboutSlovakia');
Route::get('/touristMapSlovakia', [App\Http\Controllers\PagesRouteController::class, 'map'])->name('touristMapSlovakia');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//do vnutra ma pusti len vtedy, ak je konkretny clovek prihlaseny
//protect route from an unauthorized access
Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::get('user/{user}/delete', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
});

Route::resource('caves', \App\Http\Controllers\CaveController::class);
Route::get('caves/{caves}/delete', [\App\Http\Controllers\CaveController::class, 'destroy'])->name('caves.delete');

Route::resource('sightseeings', \App\Http\Controllers\SightseeingController::class);
Route::get('sightseeings/{sightseeings}/delete', [\App\Http\Controllers\SightseeingController::class, 'destroy'])->name('sightseeings.delete');

Route::resource('articles', \App\Http\Controllers\ArticlesController::class);
Route::get('/article', [App\Http\Controllers\PagesRouteController::class, 'articles'])->name('article');
