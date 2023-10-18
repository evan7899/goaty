@extends('layout')
@section('main')
        <form method="post" action="/goats">
            @csrf
                <input type="text" name="nom" placeholder="son nom">
                <input type="number" name="prix" placeholder= "et combien elle coûte">
                <button>Valider</button>
        </form>
@endsection