
<h1 class="text-center text-4xl p-10">&bull; Les goats de {{Auth::user()->name}} &bull;</h1>
<table class="mx-auto text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-100 shadow-xl">
            <tr class="shadow rounded transition hover:bg-red-400">
                    <th scope="col" class="px-6 py-3">name</th>
                    <x-th>price</x-th>
                    <x-th>color</x-th>
                    <x-th>sex</x-th>
                    <x-th>birthday</x-th>
                    <th scope="col" class="px-6 py-3">proprio</th>
            </tr>
    </thead>

    @foreach(Auth::user()->goats as $goat)
    <tr class="shadow-md rounded">
        <x-td>{{$goat->name}}</x-td>
        <x-td>{{$goat->price}} $</x-td>
        <x-td>{{$goat->color}}</x-td>
        <x-td>{{ $goat->sex ? 'Female' : 'Male' }}</x-td>
        <x-td>{{ \Carbon\Carbon::parse($goat->birthday)->isoFormat('LL') }}</x-td>
        <x-td>{{$goat->owner->name}}</x-td>
    </tr>
    @endforeach

</table>