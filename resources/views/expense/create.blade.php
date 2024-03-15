@extends('layouts.app')

@section('content')
<div class="container py-3">

    <h3>Inserisci transazione in uscita</h3>

    <form class="row" action="">
       
        <div class="mb-3 col-6">
            <label for="category" class="form-label">Categoria</label>
            <select class="form-select" id="category" name="category" aria-label="Seleziona una categoria" required>
                <option value="" disabled selected>Seleziona una categoria</option>
                <option value="1">Abbonamenti</option>
                <option value="2">Bollette</option>
                <option value="3">Affitto</option>
                <option value="4">Acquisto di beni</option>
                <option value="5">Donazioni</option>
            </select>
        </div>   
    
        <div class="mb-3 col-6">
            <label for="amount" class="form-label">Importo</label>
            <input type="number" class="form-control" id="amount" name="amount" placeholder="Inserisci l'importo" required min="-999999" max="0" step="0.01">
        </div>
    
        <div class="mb-3 col-12">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci una descrizione"></textarea>
        </div>
    
        <div>
            <button type="submit" class="btn btn-primary">Registra</button>

        </div>
    
    </form>
</div>

@endsection