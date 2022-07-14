@extends('layouts.base')

@section('page-title')
    Creazione nuovo prodotto
@endsection

@section('page-content')
    <h1>Crea un nuovo prodotto</h1>

    <form action="{{ route('fumetti.store') }}" method="POST">
        @csrf
        <input type="text" placeholder="Titolo" name="title">
        <input type="text" placeholder="Descrizione" name="description">
        <input type="url" placeholder="url img" name="thumb">
        <input type="number" placeholder="prezzo" name="price">
        <input type="text" placeholder="serie" name="series">
        <input type="date" name="sale_date">
        <input type="text" placeholder="tipo" name="type">

        <button type="submit">Crea</button>
    </form>
@endsection
