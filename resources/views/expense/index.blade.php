@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Queste sono le mie uscite</h1>        

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Importo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Data</th>

                    
                </tr>
            </thead>
            <tbody>
                @forelse ($expenses as $expense)
                    
                <tr>
                  <td>{{$expense->id}}</td>
                  <td>{{$expense->category}}</td>
                  <td style="white-space: nowrap;">{{$expense->amount}} &euro;</td>
                  <td class="text-start">{{$expense->description}}</td>
                  <td>{{$expense->created_at}}</td>
                  
                </tr>
               
                @empty
                    <h2>Nessun Uscita</h2>    
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{$expenses->links()}}
        </div>
    </div>
    
@endsection