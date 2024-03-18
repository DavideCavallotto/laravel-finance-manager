@extends('layouts.app')

@section('content')
<h1>Homepage</h1>
    <div class="h-100 d-flex align-items-center">
        <div class="bg-grey rounded p-4 mx-5">
            <p class="fs-1">
                Attraverso questa Web App potrai gestire facilmente le tue finanze.        
            </p>
            <p class="fs-1">
                Puoi accedere alle funzionalità registrandoti attraverso il <a class="text-decoration-none fw-bold text-black" href="">form</a>.
            </p>

        </div>

    </div>
    
@endsection

<style>
    .bg-grey {
        background-color: rgba(169, 169, 169, 0.514);
    }
</style>