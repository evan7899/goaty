@extends('layout')
@section('main')
    <div class="flex justify-center">
        <div class="bg-gray-800 border border-gray-900 rounded-lg px-8 py-10 w-9/12">
            <p class="text-right"><a href="/goats"><button class=" bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10">&bull;Go back to Goats&bull;</button></a></p>
            <div class="text-white mt-10">
                <h2 class="text-center">&bull;Create a GOAT&bull;</h2>
            </div>
            <form method="post" action="/goats" id='container' class="flex flex-col space-y-8 mt-10" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="son nom" value="{{ old('name') }}"
                    class="border border-gray-500 rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500 transition hover:bg-red-400">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
                <input type="number" name="price" placeholder= "et combien elle coûte" value="{{ old('price') }}"
                    class="border border-gray-500 rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500 transition hover:bg-red-400">
                @error('price')
                    <p>{{ $message }}</p>
                @enderror
                <input type="text" name="color" placeholder="sa couleur" value="{{ old('color') }}"
                    class="border border-gray-500 rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500 transition hover:bg-red-400">
                @error('color')
                    <p>{{ $message }}</p>
                @enderror
                <div
                    class="flex items-center ps-4 border border-gray-500 rounded-lg bg-gray-700 border-gray-700 placeholder-gray-500 hover:bg-red-400">
                    <input id="bordered-checkbox-1" type="checkbox" 
                        name="sex" class="border border-gray-500 rounded-xl py-3 px-3 bg-gray-700 border-gray-700 hover:bg-red-400">
                    <label for="bordered-checkbox-1"
                        class="rounded-lg w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 hover:bg-red-400">Femme
                        ?</label>
                </div>
                <input type="date" name="birthday" placeholder="date de naissance" value="{{ old('birthday') }}"
                    class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-500 placeholder-gray-500 transition hover:bg-red-400 ">
                @error('birthday')
                    <p>{{ $message }}</p>
                @enderror
                <input type="file" name="image" value="{{old("image")}}" placeholder ="choisir une image" class="text-sm text-stone-500
                file:mr-5 file:py-1 file:px-3 file:border-[1px]
                file:text-xs file:font-medium
                file:bg-stone-50 file:text-stone-700
                hover:file:cursor-pointer hover:file:bg-blue-50
                hover:file:text-blue-700">
                <button class="border bg-bla ck text-white rounded-lg py-3 font-semibold hover:bg-red-500">Valider</button>
            </form>
        @endsection
