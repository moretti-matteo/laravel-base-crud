@extends('layouts.base')

@section('page-title')
    fumetto: {{$fumetto->title}}
@endsection

@section('page-content')
    <div class="fumetto">
        <h3>Titolo: {{$fumetto->title}}</h3>
        <h3>Descrizione: {{$fumetto->description}}</h3>
        <h3>Prezzo: {{$fumetto->price}}</h3>
        <h3>data vendita: {{$fumetto->sale_date}}</h3>
    </div>
@endsection
