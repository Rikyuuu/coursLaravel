@extends('layout')

@section('contenu')
    <h1>Liste des étudiants</h1>

    <ul>
        @foreach($students as $student)
            <li>{{ $student->firstname }} {{ $student->lastname }}</li>
        @endforeach
    </ul>
    @foreach($students as $student)
        <form action="/students" method="post">
            {{ csrf_field() }}
            <button>Supprimer {{ $student->lastname }}</button>
        </form>
    @endforeach
        <form action="/students" method="post">
            {{ csrf_field() }}
            <input type="submit" value="Supp">
        </form>
    <p><a href="add-student">Ajouter un étudiant</a></p>
@endsection