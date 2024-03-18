@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Entate e Uscite Mensili</h1>

        <form action="{{ route('difference') }}" method="GET">
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <label for="month">Seleziona il mese:</label>
                    <select name="month" id="month" class="form-control text-center">
                        <option value="1">Gennaio</option>
                        <option value="2">Febbraio</option>
                        <option value="3">Marzo</option>
                        <option value="4">Aprile</option>
                        <option value="5">Maggio</option>
                        <option value="6">Giugno</option>
                        <option value="7">Luglio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Settembre</option>
                        <option value="10">Ottobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Dicembre</option>
                    </select>
                </div>                
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Visualizza</button>
                </div>
            </div>
        </form>

        @if(isset($monthlyData))
            <h2>Risultato per il mese selezionato:</h2>
            <table class="table text-center border border-2">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Totale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Entrate</td>
                        <td>{{ $monthlyData['totalIncome'] }} &euro;</td>
                    </tr>
                    <tr>
                        <td>Uscite</td>
                        <td>{{ $monthlyData['totalExpense'] }} &euro;</td>
                    </tr>
                    <tr>
                        <td>Disponibilità</td>
                        <td>{{ $monthlyData['difference'] }} &euro;</td>
                    </tr>
                </tbody>
            </table>
        @endif

    </div>
@endsection