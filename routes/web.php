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
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');

Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
// --Nei controller rispettivi nella funzione show andremo ad aggiungere come parametri($income e $expense)
Route::get('/incomes/{income}', [IncomeController::class, 'show'])->name('incomes.show');
Route::get('/expenses/{expense}', [expenseController::class, 'show'])->name('expenses.show');
// --
Route::post('incomes', [IncomeController::class, 'store'])->name('incomes.store');
Route::post('expenses', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('/incomes/{income}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');
Route::get('/expenses/{expense}/edit', [expenseController::class, 'edit'])->name('expenses.edit');
Route::put('/incomes/{income}', [IncomeController::class, 'update'])->name('incomes.update');
Route::put('/expenses/{expense}', [expenseController::class, 'update'])->name('expenses.update');
Route::delete('/incomes/{income}', [IncomeController::class, 'destroy'])->name('incomes.destroy');
Route::delete('/expenses/{expense}', [expenseController::class, 'destroy'])->name('expenses.destroy');




// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::get('/home', function () {
//     return view('home');
// });

