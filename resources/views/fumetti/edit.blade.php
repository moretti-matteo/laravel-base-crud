@extends('layouts.base')

@section('page-title')
    Modifica {{ $fumetto->title }}
@endsection

@section('page-content')
    <h1>Modifica Fumetto:</h1>

    <form action="{{ route('fumetti.update', $fumetto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" placeholder="Titolo" name="title" value="{{ $fumetto->title }}">
        <input type="text" placeholder="Descrizione" name="description" value="{{ $fumetto->description }}">
        <input type="url" placeholder="url img" name="thumb" value="{{ $fumetto->thumb }}">
        <input type="number" placeholder="prezzo" name="price" value="{{ $fumetto->price }}">
        <input type="text" placeholder="serie" name="series" value="{{ $fumetto->series }}">
        <input type="date" name="sale_date" value="{{ $fumetto->sale_date }}">
        

        <button type="submit">Modifica</button>
    </form>
@endsection
