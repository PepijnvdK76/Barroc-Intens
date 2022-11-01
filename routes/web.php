<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\PagesController;

use \App\Models\Company;
use App\Http\Controllers\CompaniesController;
use \App\Http\Controllers\FinanceController;
use \App\Http\Controllers\NotesController;
use \App\Http\Controllers\Maintenance_appointmentsController;
use App\Http\Controllers\Appointment_reviewContoller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FilterController;


use App\Http\Controllers\ProductsController;


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
Route::get('/maintenance', [PagesController::class, 'maintenance']);

Route::get('/bonen', [PagesController::class, 'bonen'])
    ->name('bonen');
Route::get('/machines', [PagesController::class, 'machines'])
    ->name('machines');

Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::get('/offerte', [PagesController::class, 'offerte'])->name('offerte');

Route::get('/dashboard', [PagesController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');
Route::get('/createCustomer', [PagesController::class, 'createCustomer'])
    ->name('createCustomer');

Route::get('/klantDashboard', [PagesController::class, 'klantDashboard'])
    ->middleware(['user-role'])
    ->name('klantDashboard');




Route::get('/sales', [PagesController::class, 'sales']);

Route::resource('finance', FinanceController::class);
Route::get('/finance', [PagesController::class, 'finance'])->name('finance.index');

Route::resource('sales', NotesController::class);
Route::get('/inkoop', [PagesController::class, 'inkoop'])->name('inkoop');

Route::resource('inkoop', ProductsController::class);

Route::resource('company', CompaniesController::class);

Route::resource('maintenance', Maintenance_appointmentsController::class);

Route::resource('filter', FilterController::class);

Route::resource('review', Appointment_reviewContoller::class);
Route::resource('order', OrderController::class);


require __DIR__.'/auth.php';
