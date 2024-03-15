<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('incomes', [IncomeController::class, 'index'])->name('incomes');
Route::get('expenses', [ExpenseController::class, 'index'])->name('expenses');

Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::get('/incomes/{income}', [IncomeController::class, 'show'])->name('incomes.show');
Route::get('/expenses/{expense}', [expenseController::class, 'show'])->name('expenses.show');


// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::get('/home', function () {
//     return view('home');
// });

