<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;

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
Route::get('/index', [PagesController::class, 'index'])
    ->name('index');
Route::get('/bonen', [PagesController::class, 'bonen'])
    ->name('bonen');

Route::get('/offerte', [PagesController::class, 'offerte']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/finance', [PagesController::class, 'finance']);

Route::get('/sales', [PagesController::class, 'sales']);


require __DIR__.'/auth.php';
