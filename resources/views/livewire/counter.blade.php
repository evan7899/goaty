<div class="w-4/6 bg-orange-200 mx-auto p-5 rounded-xl text-center">
{{-- <div>
    <input type ="text" wire:model.live="username">
    <p>{{$username}}</p>
    <p>
        <button wire:click="decrement" class="p-2 bg-red-500 rounded-lg">-</button>
            {{$count}}
        <button wire:click="increment" class="p-2 bg-green-500 rounded-lg">+</button>
    </p>    
</div> --}}
<x-input wire:model="name" type="text" />
<x-input wire:model="price" type="number" />
<x-button wire:click="add">Ajouter</x-button>
<table class="mx-auto text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                    <th scope="col" class="px-6 py-3 rounded-tl-lg">id</th>
                    <x-th>name</x-th>
                    <x-th>price</x-th>
                    <x-th>color</x-th>
                    <x-th>sex</x-th>
                    <x-th>birthday</x-th>
                    <th scope="col" class="px-6 py-3 rounded-tr-lg">proprio</th>
            </tr>
    </thead>

    @foreach($goats as $goat)
    <tr>
        <x-td>{{$goat->id}}</x-td>
        <x-td>{{$goat->name}}</x-td>
        <x-td>{{$goat->price}} €</x-td>
        <x-td>{{$goat->color}}</x-td>
        <x-td>{{$goat->sex}}</x-td>
        <x-td>{{$goat->birthday}}</x-td>
        <x-td>@if ($goat->owner)
            {{ $goat->owner->name }}
    @else
            no one  
    @endif</x-td>
    </tr>
    @endforeach

</table>

</div>