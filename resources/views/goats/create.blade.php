@extends('layout')
@section('main')
<div class="flex items-center justify-center h-screen">
        <div class="bg-gray-800 flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">
        <div class="text-white mt-10">
<h2>&bull;Create a GOAT&bull;</h2>
        </div>
        <form method="post" action="/goats" id='container' class="flex flex-col space-y-8 mt-10">
            @csrf
                <input type="text" name="name" placeholder="son nom" value="{{old('name')}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('name')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                <input type="number" name="price" placeholder= "et combien elle coûte" value="{{old('price')}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('price')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                <input type="text" name="color" placeholder="sa couleur" value="{{old('color')}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('color')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
              Hommes/Femmes  <input type="checkbox" name="sex">
                <input type="date" name="birthday" placeholder="date de naissance" value="{{old('birthday')}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('birthday')
                <p>{{$message}}</p>
                @enderror
                <button class="border border-blue-500 bg-blue-500 text-white rounded-lg py-3 font-semibold">Valider</button>
        </form>
@endsection
