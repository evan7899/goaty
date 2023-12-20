@extends('layout')
@section('main')        
<div class="relative overflow-x-auto">
        <img class="h-15 w-1/2 flex-none rounded-full bg-gray-50 mx-auto mt-8" src="/storage/{{$goat->image_path}}" alt=""><br>
<table class="mx-auto text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                        <th scope="col" class="px-6 py-3 rounded-tl-lg">id</th>
                        <th scope="col" class="px-6 py-3">name</th>
                        <th scope="col" class="px-6 py-3">price</th>
                        <th scope="col" class="px-6 py-3">color</th>
                        <th scope="col" class="px-6 py-3">sex</th>
                        <th scope="col" class="px-6 py-3">birthday</th>
                        <th scope="col" class="px-6 py-3">proprio</th>
                        <th scope="col" class="px-6 py-3">created</th>
                        <th scope="col" class="px-6 py-3 rounded-tr-xl">updated</th>
                </tr>
        </thead>
        <tbody>
        <tr class="bg-white">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap rounded-bl-xl">{{$goat->id}}</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$goat->name}}</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$goat->price}} €</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$goat->color}}</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $goat->sex ? 'Female' : 'Male' }}</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$dateformat}}</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
        @if ($goat->owner)
                {{ $goat->owner->name }}
            @else
                no one  
            @endif</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$goat->created_at}}</th>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap rounded-br-xl">{{$goat->updated_at}}</th>
        </tr>
</tbody>
</table>
<p class="text-center"><a href="/goats"><button class=" bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10">&bull;Go back to Goats&bull;</button></a></p>
</div>
@endsection