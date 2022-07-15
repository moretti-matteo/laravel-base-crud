@extends('layouts.base')

@section('page-title')
    Tutti i fumetti
@endsection

@section('page-content')
    <h1>Tutti i fumetti:</h1>
    <ul>
        @foreach ($fumetti as $fumetto)
            <li>
                <h3>Titolo: {{ $fumetto->title }}</h3>
                <h3>Descrizione: {{ $fumetto->description }}</h3>
                <h3>Prezzo: {{ $fumetto->price }}</h3>
                <h3>Serie: {{ $fumetto->series }}</h3>
                <h3>Data vendita: {{ $fumetto->sale_date }}</h3>
                <h3>tipo: {{ $fumetto->type }}</h3>
                <a href="{{ route('fumetti.edit', $fumetto->id) }}">Modifica</a>
                <form action="{{ route('fumetti.destroy', $fumetto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
        
                    <button type="submit">Cancella</button>
        
                </form>
            </li>
        @endforeach
    </ul>
@endsection
