@extends('layout')
@section('main')
    <div class="flex justify-center h-auto">
        <div class="bg-gray-800 flex flex-col border border-gray-900 rounded-lg px-8 py-10 w-9/12">
            <div class="text-white">
                <h2 class="text-center">&bull;Update a GOAT&bull;</h2>
            </div><br>

            <img src="/storage/{{ $goat->image_path }}" alt=""
                class="h-auto w-auto flex-none rounded-full bg-gray-50 mx-auto">
            <form method="post" action="/goats/{{ $goat->id }}" class="flex flex-col space-y-8 mt-10" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="text" name="name" value="{{ $goat->name }}"
                    class="border border-gray-500 rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500 transition hover:bg-red-400">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror

                <input value = "{{ $goat->price }}" type="number" name="price"
                    class="border border-gray-500 rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500 transition hover:bg-red-400">
                @error('price')
                    <p>{{ $message }}</p>
                @enderror

                <input type="text" name="color" value="{{ $goat->color }}"
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

                <input type="date" name="birthday" value="{{ $goat->birthday }}"
                    class="border border-gray-500 rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500 transition hover:bg-red-400">
                @error('birthday')
                    <p>{{ $message }}</p>
                @enderror

                <button class="border bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-500">Valider</button>
            </form>
        @endsection
