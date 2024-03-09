<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index() {

        $expenses = Expense::paginate(20);
        return view('expense.index', compact('expenses'));
    }
}
