@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Queste sono le mie entrate</h1>

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
                @forelse ($incomes as $income)
                    <tr>
                        <td>{{$income->id}}</td>
                        <td>{{$income->category}}</td>
                        <td style="white-space: nowrap;">{{$income->amount}} &euro;</td>
                        <td class="text-start">{{$income->description}}</td>
                        <td>{{$income->created_at}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"><h2 class="text-center">Nessuna Entrata</h2></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{$incomes->links()}}
        </div>
    </div>
@endsection