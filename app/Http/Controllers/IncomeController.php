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
    // Il $income funziona perchè è uguale al parametro aggiunto nella rotta show
    public function show(Income $income) {
        
        return view('income.show', compact('income'));
    }

    public function create() {

        return view('income.create');
    }

    public function store(Request $request) {

        $data = $request->all();

        // Salviamo i dati del form nel db 
        
        // $new_income = new Income();
        // $new_income->category = $data['category'];
        // $new_income->amount = $data['amount'];
        // $new_income->description = $data['description'];
        // $new_income->save();

        // Li possiamo salvare anche con il metodo sotto solo se nel form i campi 'name' 
        // corrispondono ai nomi delle colonne. questo metodo porterà ad un'assegnazione
        // di massa che restituirà un errore, per risolverlo andremo ad aggiungere il fillable 
        // nel model corrispettivo con i campi che vogliamo salvare  

        $new_income = Income::create($data);
        
        return redirect()->route('incomes.show', $new_income->id);
    }

    public function edit(Income $income) {
        return view('income.edit', compact('income'));
    }

    public function update(Request $request, Income $income) {
        $data = $request->all();
        $income->update($data);

        return redirect()->route('incomes.show', $income);
    }
}
