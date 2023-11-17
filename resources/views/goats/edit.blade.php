@extends('layout')
@section('main')
<div class="flex items-center justify-center h-auto">
    <div class="bg-gray-800 flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">
    <div class="text-white">
<h2>&bull;Update a GOAT&bull;</h2>
    </div>

<img src="/img/{{$goat->image_path}}" alt="" class="h-auto w-auto flex-none rounded-full bg-gray-50 mx-auto">
<form method="post" action="/goats/{{$goat->id}}" class="flex flex-col space-y-8 mt-10">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$goat->name}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
    @error('name')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    <input value = "{{$goat->price}}" type="number" name="price" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
    @error('price')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    <input type="text" name="color" value="{{$goat->color}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
    @error('color')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    Hommes/Femmes <input type="checkbox" name="sex" value="{{$goat->sex ? 'Female' : 'Male'}}">
    <input type="date" name="birthday" value="{{$goat->birthday}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
    @error('birthday')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
    <button class="border border-blue-500 bg-blue-500 text-white rounded-lg py-3 font-semibold">Valider</button>
</form>
@endsection