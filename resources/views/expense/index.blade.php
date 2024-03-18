@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Le tue transazioni in uscita</h1>  
        
        <a class="btn btn-primary my-4" href="{{ route('expenses.create') }}">Aggiungi Transazione</a>  
        
        <table class="table text-center border border-2">
            <thead>
                <tr>
                    <th scope="col">Categoria</th>
                    <th scope="col">Importo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Dettagli</th>   
                    <th scope="col">Modifica</th>  
                    <th scope="col">Elimina</th>                
                </tr>
            </thead>
            <tbody>
                @forelse ($expenses as $expense)
                    
                <tr>                  
                  <td>{{$expense->category}}</td>
                  <td style="white-space: nowrap;">{{$expense->amount}} &euro;</td>                  
                  <td>{{ $expense->created_at->format('d/m/Y') }}</td>
                  <td class="col-1"><a href="{{route('expenses.show', $expense)}}"><i class="fa-solid fa-circle-info text-success"></i></a></td>    
                  <td class="col-1"><a href="{{route('expenses.edit', $expense)}}"><i class="fa-solid fa-wrench"></i></a></td>
                  <td class="col-1">
                    <form action="{{ route('expenses.destroy', $expense) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>

                  </td>
              
                </tr>
               
                @empty
                    <h2>Nessun Uscita</h2>    
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <div>
                {{$expenses->links()}}
            </div>
        </div>
    </div>

    
@endsection