<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index() {

        $expenses = Expense::orderBy('created_at', 'desc')->paginate(10);
        
        return view('expense.index', compact('expenses'));
    }

    // Il $expense funziona perchè è uguale al parametro aggiunto nella rotta show
    public function show(Expense $expense) {

   
        return view('expense.show', compact('expense'));
    }

    public function create() {

        return view('expense.create');
    }

    public function store(Request $request) {

        $data = $request->all();

        // Salviamo i dati del form nel db 

        // $new_expense = new Expense();
        // $new_expense->category = $data['category'];
        // $new_expense->amount = $data['amount'];
        // $new_expense->description = $data['description'];
        // $new_expense->save();

        // Li possiamo salvare anche con il metodo sotto solo se nel form i campi 'name' 
        // corrispondono ai nomi delle colonne. questo metodo porterà ad un'assegnazione
        // di massa che restituirà un errore, per risolverlo andremo ad aggiungere il fillable 
        // nel model corrispettivo con i campi che vogliamo salvare

        $new_expense = Expense::create($data);
        
        return redirect()->route('expenses.show', $new_expense->id);
        
    }

    public function edit(Expense $expense) {
        return view('expense.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense) {
        $data = $request->all();
        $expense->update($data);

        return redirect()->route('expenses.show', $expense);
    }

    public function destroy(Expense $expense) {
        $expense->delete();

        return redirect()->route('expenses.index');
    }
}
