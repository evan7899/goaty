@extends('layout')
@section('main')

<h2>&bull;Create a GOAT&bull;</h2>
        <form method="post" action="/goats" id='container'>
            @csrf
                <input type="text" name="name" placeholder="son nom" value="{{old('name')}}">
                @error('name')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                <input type="number" name="price" placeholder= "et combien elle coûte" value="{{old('price')}}">
                @error('price')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                <input type="text" name="color" placeholder="sa couleur" value="{{old('color')}}">
                @error('color')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
              Hommes/Femmes  <input type="checkbox" name="sex">
                <input type="date" name="birthday" placeholder="date de naissance" value="{{old('birthday')}}">
                @error('birthday')
                <p>{{$message}}</p>
                @enderror
                <button>Valider</button>
        </form>
@endsection
