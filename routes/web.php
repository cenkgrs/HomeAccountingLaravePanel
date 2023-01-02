<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BudgetsController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\CardController;

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

// Auth Routes //
Route::match(['GET', 'POST'], 'login', [UserController::class, 'login'])->name('login');
Route::match(['GET', 'POST'], 'logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

    Route::match(['GET', 'POST'], '/categories', [CategoriesController::class, 'index'])->name('categories');
    Route::match(['GET', 'POST'], '/budgets', [BudgetsController::class, 'index'])->name('budgets');
    Route::match(['GET', 'POST'], '/expenses', [ExpensesController::class, 'index'])->name('expenses');
    Route::match(['GET', 'POST'], '/cards', [CardController::class, 'index'])->name('cards');

    Route::post('/get-expense', [ExpensesController::class, 'getExpense'])->name('getExpense');


});



