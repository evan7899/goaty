   @extends('layout')
   @section('main')
   
   <h1 class = "text-center text-2xl">&bull; All the goats &bull;</h1>
<table class="mx-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
<tr>
        <th scope="col" class="px-6 py-3 rounded-tl-xl">id</th>
        <th scope="col" class="px-6 py-3">name</th>
        <th scope="col" class="px-6 py-3">price</th>
        <th scope="col" class="px-6 py-3">color</th>
        <th scope="col" class="px-6 py-3">sex</th>
        <th scope="col" class="px-6 py-3">birthday</th>
        <th scope="col" class="px-6 py-3">proprio</th>
        <th scope="col" class="px-6 py-3">lien</th>
        <th scope="col" class="px-6 py-3">mettre a jour</th>
        <th scope="col" class="px-6 py-3 rounded-tr-xl">delete</th>
</tr>
</thead>
<tbody>
        @foreach($goats as $goat)
<tr class="bg-white dark:bg-gray-800"> 
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white 
        {{ $loop->last ? 'rounded-bl-xl' : '' }}">{{$goat->id}}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$goat->name}}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$goat->price}} €</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$goat->color}}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$goat->sex ? 'Female' : 'Male'}}</td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$goat->birthday}}</td>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$goat->owner->name}}</th>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><a href ="goats/{{$goat->id}}"><button class="bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-500 px-10">voir</button></a></td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><a href ="goats/{{$goat->id}}/edit"><button class="bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-500 px-10">mettre a jour</button></a></td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white
        {{ $loop->last ? 'rounded-br-xl' : '' }}"><form method="post" action="/goats/{{$goat->id}}">
                @method("DELETE")
                @csrf
                <button class="bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-500 px-10">delete</button>
        </form></td>
</tr>
        @endforeach
</tbody>
</table><br>
<p  class="text-center"><a href="/goats/create">
        <button class="border border-red-500 bg-red-500 text-white rounded-lg py-3 font-semibold hover:bg-black px-10">
        &bull;Create a Goat&bull;
</button></a></p>
@endsection
