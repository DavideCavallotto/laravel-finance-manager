<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Http\Request;

class TotalAmountController extends Controller


{

    // public function calcSum() {

       

    //     $totalIncome = Income::sum('amount');
    //     $totalExpense = Expense::sum('amount');
        
    //     $difference = $totalExpense + $totalIncome;

    //     return view('total.difference', compact('totalIncome', 'totalExpense', 'difference'));
    // }

    public function monthlyData(Request $request)
    {
        $month = $request->input('month');        

        $monthlyIncomes = Income::whereMonth('created_at', $month)->sum('amount');

        $monthlyExpenses = Expense::whereMonth('created_at', $month)->sum('amount');

        $difference = $monthlyIncomes + $monthlyExpenses;

        $monthlyData = [
            'totalIncome' => $monthlyIncomes,
            'totalExpense' => $monthlyExpenses,
            'difference' => $difference,
        ];

        return view('total.difference', compact('monthlyData'));
    }


    
}
