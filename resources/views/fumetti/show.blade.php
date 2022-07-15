@extends('layouts.base')

@section('page-title')
    fumetto: {{ $fumetto->title }}
@endsection

@section('page-content')
    <div class="card" style="width: 18rem;">
        <img  style="height: 250px; margin:auto" src="{{ $fumetto->thumb }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Titolo: {{ $fumetto->title }}</h5>
            <p class="card-text">Descrizione: {{ $fumetto->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Data vendita: {{ $fumetto->sale_date }}</li>
            <li class="list-group-item">Prezzo: {{ $fumetto->price }}</li>
            <li class="list-group-item">Serie: {{ $fumetto->series }}</li>
            <li class="list-group-item">Tipo: {{ $fumetto->type }}</li>

        </ul>
    </div>
@endsection
