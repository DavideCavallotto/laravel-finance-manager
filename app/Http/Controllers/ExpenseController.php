<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index() {

        $expenses = Expense::orderBy('created_at', 'desc')->paginate(20);
        
        return view('expense.index', compact('expenses'));
    }

    public function show(Expense $expense) {

   
        return view('expense.show', compact('expense'));
    }

    public function create() {

        return view('expense.create');
    }

    public function store(Request $request) {

        $data = $request->all();

        $new_expense = new Expense();
        $new_expense->category = $data['category'];
        $new_expense->amount = $data['amount'];
        $new_expense->description = $data['description'];

        $new_expense->save();
        
        return redirect()->route('expenses.show', $new_expense->id);
        
    }
}
