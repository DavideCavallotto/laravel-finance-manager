<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index() {

        $incomes = Income::orderBy('created_at', 'desc')->paginate(20);
        return view('income.index', compact('incomes'));
    }

    public function show(Income $income) {
        
        return view('income.show', compact('income'));
    }

    public function create() {

        return view('income.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        $new_income = new Income();
        $new_income->category = $data['category'];
        $new_income->amount = $data['amount'];
        $new_income->description = $data['description'];

        $new_income->save();
        
        return redirect()->route('incomes.show', $new_income->id);
    }
}
