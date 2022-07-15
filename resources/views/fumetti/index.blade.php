@extends('layouts.base')

@section('page-title')
    Tutti i fumetti
@endsection

@section('page-content')
    <h1>Tutti i fumetti:</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($fumetti as $fumetto)
            
                <tr>
                    <th scope="row">{{ $fumetto->id }}</th>
                    <td>{{ $fumetto->title }}</td>
                    <td>
                        <a href="{{ route('fumetti.show', $fumetto->id) }}">
                            <button type="button" class="btn btn-primary">Visualizza</button>
                        </a>
                        <a href="{{ route('fumetti.edit', $fumetto->id) }}">
                            <button type="button" class="btn btn-success">Modifica</button>
                        </a>
                        <form style="display: inline-block" action="{{ route('fumetti.destroy', $fumetto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                           
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
