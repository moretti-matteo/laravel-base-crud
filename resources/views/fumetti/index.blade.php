@extends('layouts.base')

@section('page-title')
    Tutti i prodotti
@endsection

@section('page-content')
    <h1>Tutti i fumetti:</h1>


    @foreach ($fumetti as $fumetto)
        @dd($fumetti)
    @endforeach
@endsection