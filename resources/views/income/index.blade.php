@extends('layouts.app')



@section('content')
    <div>
        <h1>Queste sono le mie entrate</h1>
        

        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Categoria</th>
                <th scope="col">Importo</th>
                <th scope="col">Descrizione</th>
                
              </tr>
            </thead>
            <tbody>
                @forelse ($incomes as $income)
                    
                <tr>
                  <td>{{$income->id}}</th>
                  <td>{{$income->category}}</td>
                  <td>{{$income->amount}} &euro;</td>
                  <td>{{$income->description}}</td>
                  
                </tr>
               
                @empty
                    <h2>Nessun Entrata</h2>    
                @endforelse
          </table>

    </div>
    
@endsection