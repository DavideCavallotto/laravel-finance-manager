<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index() {

        $incomes = Income::paginate(20);
        return view('income.index', compact('incomes'));
    }
}
