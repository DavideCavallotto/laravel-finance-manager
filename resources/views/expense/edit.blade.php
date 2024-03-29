@extends('layouts.app')

@section('content')
<div class="container py-3">

    <h3>Inserisci transazione in uscita</h3>

    <form class="row" action="{{route('expenses.update', $expense)}}" method="POST">
       @csrf
       @method('PUT')
        <div class="mb-3 col-6">
            <label for="category" class="form-label">Categoria</label>
            <select class="form-select" id="category" name="category" aria-label="Seleziona una categoria" required>

                @if($expense->category)
                <option value="{{ $expense->category }}" selected>{{ $expense->category }}</option>

                @else
                <option value="" disabled selected>Seleziona una categoria</option>

                @endif

                <option value="Abbonamenti">Abbonamenti</option>
                <option value="Bollette">Bollette</option>
                <option value="Affitto">Affitto</option>
                <option value="Acquisto di beni">Acquisto di beni</option>
                <option value="Donazioni">Donazioni</option>
            </select>
        </div>   
    
        <div class="mb-3 col-6">
            <label for="amount" class="form-label">Importo</label>
            <input type="number" class="form-control" id="amount" name="amount" placeholder="Inserisci l'importo" required min="-999999" max="0" step="0.01" value="{{$expense->amount}}">
        </div>
    
        <div class="mb-3 col-12">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci una descrizione">{{$expense->description}}</textarea>
        </div>
    
        <div>
            <button type="submit" class="btn btn-primary">Modifica</button>

        </div>
    
    </form>
</div>

@endsection