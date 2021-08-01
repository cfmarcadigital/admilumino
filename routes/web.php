<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [AdminController::class, 'index'])->name('index');
	Route::get('charts', [AdminController::class, 'charts'])->name('charts');
	Route::get('elements', [AdminController::class, 'elements'])->name('elements');
	Route::get('login', [AdminController::class, 'login'])->name('login');
	Route::get('panels', [AdminController::class, 'panels'])->name('panels');
	Route::get('widgets', [AdminController::class, 'widgets'])->name('widgets');
});
