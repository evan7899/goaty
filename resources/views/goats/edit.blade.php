@extends('layout')
@section('main')
<h2>&bull;Update a GOAT&bull;</h2>
<form method="post" action="/goats/{{$goat->id}}">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$goat->name}}">
    @error('name')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    <input value = "{{$goat->price}}" type="number" name="price">
    @error('price')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    <input type="text" name="color" value="{{$goat->color}}">
    @error('color')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    Hommes/Femmes <input type="checkbox" name="sex" value="{{$goat->sex ? 'Female' : 'Male'}}">
    <input type="date" name="birthday" value="{{$goat->birthday}}">
    @error('birthday')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    <button>Valider</button>
</form>
@endsection