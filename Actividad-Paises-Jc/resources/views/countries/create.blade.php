@extends('layouts.app')
@section('title', 'Crear Pais')
@section('content')
    <div>
        <h1>Nuevo un Pais</h1>
        <form action="{{route('countries.store')}}" method="post">
            @csrf
            @method('Post')
            <label for="name">Escriba el nombre del Pais:</label>
            <input name="name" id="name" type="text">
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>

@endsection
