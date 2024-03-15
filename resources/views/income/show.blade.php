@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row justify-content-center"> 
        <div class="col-auto">
            <div class="card" style="width: 600px;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="fw-bold" >Transazione id:</span> {{$income->id}}</li>
                    <li class="list-group-item"><span class="fw-bold" >Categoria:</span> {{$income->category}}</li>
                    <li class="list-group-item"><span class="fw-bold" >Descrizione:</span> {{$income->description}}</li>
                    <li class="list-group-item"><span class="fw-bold" >Importo:</span> {{$income->amount}} &euro;</li>
                    <li class="list-group-item"><span class="fw-bold" >Data:</span> {{ $income->created_at->format('d/m/Y') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection