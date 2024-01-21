<?php

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
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // Add other admin routes here
});
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/', function () {
//    return view('welcome');
//});
use App\Http\Controllers\SocialController;
Route::get('/singup', [HomeController::class, 'index'])->name('home');

Route::get('/login/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('/login/{provider}/callback', [SocialController::class, 'handleProviderCallback']);
use App\Http\Controllers\AdminController;
Route::get('/signup}', [SocialController::class, 'redirectToProvider']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Add more routes as needed
});
