   @extends('layout')
   @section('main')
       <h1 class = "text-center text-6xl p-5">&bull; All the goats &bull;</h1>
       <div class="text-right p-10">
           @if (auth()->user())
               <p class ="text-right">
                   <a href ="/dashboard">
                       <button
                           class=" bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10">
                           &bull;Go to Dashboard&bull;
                       </button>
                   </a>
               </p>
           @else
               <button
                   class=" bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10"><a
                       href="{{ route('login') }}"
                       class="font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                       in</a></button>
               <button
                   class=" bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10"><a
                       href="{{ route('register') }}"
                       class=" font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></button>
           @endif
       </div>

       <table class="mx-auto text-sm text-left rtl:text-right text-gray-500">
           <thead class="text-xs text-gray-700 uppercase bg-gray-100">
               <tr>
                   <th scope="col" class="px-6 py-3 rounded-tl-xl">name</th>
                   <th scope="col" class="px-6 py-3">price</th>
                   <th scope="col" class="px-6 py-3">color</th>
                   <th scope="col" class="px-6 py-3">sex</th>
                   <th scope="col" class="px-6 py-3">birthday</th>
                   <th scope="col" class="px-6 py-3">proprio</th>
                   <th scope="col" class="px-6 py-3">image</th>
                   <th scope="col" class="px-6 py-3 @if (!auth()->user()?->is_admin) ) rounded-tr-xl @endif">
                       lien</th>
                   @if (auth()->user()?->is_admin)
                       <th scope="col" class="px-6 py-3">mettre a jour</th>
                   @endif
                   @if (auth()->user()?->is_admin)
                       <th scope="col" class="px-10 py-3 rounded-tr-xl">delete</th>
                   @endif
               </tr>
           </thead>
           <tbody>
               @forelse ($goats as $goat)
                   <tr class="bg-white">
                       <td scope="row"
                           class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap 
        {{ $loop->last ? 'rounded-bl-xl' : '' }}">
                           {{ $goat->name }}</td>
                       <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $goat->price }}
                           $</td>
                       <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $goat->color }}
                       </td>
                       <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                           {{ $goat->sex ? 'Female' : 'Male' }}</td>
                       <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ \Carbon\Carbon::parse($goat->birthday)->isoFormat('LL') }}</td>
                       <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                           @if ($goat->owner)
                               {{ $goat->owner->name }}
                           @else
                               no one
                           @endif
                       </td>
                       <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <img
                               src="/storage/{{ $goat->image_path }}" alt=""
                               class="h-20 w-20 flex-none rounded-full bg-gray-50 mx-auto"></td>
                       <td scope="row"
                           class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap @if (!auth()->user()?->is_admin) {{ $loop->last ? 'rounded-br-xl' : 'rounded-none' }} @endif">
                           <a href ="goats/{{ $goat->id }}"><button
                                   class="bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10">voir</button></a>
                       </td>
                       @if (auth()->user()?->is_admin)
                           <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><a
                                   href ="goats/{{ $goat->id }}/edit"><button
                                       class="bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10">mettre
                                       a jour</button></a></td>
                       @endif
                       {{-- @if (Auth::Check() && auth()->user()->is_admin) --}}
                       @if (auth()->user()?->is_admin)
                           <td scope="row"
                               class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap
        {{ $loop->last ? 'rounded-br-xl' : '' }}">
                               <form method="post" action="/goats/{{ $goat->id }}">
                                   @method('DELETE')
                                   @csrf
                                   <button
                                       class="bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10">delete</button>
                               </form>
                           </td>
                       @endif
                   </tr>
               @empty
                   <tr>
                       <td colspan="8" class="text-right text-6xl text-black">NO ONE HERE</td>
                   </tr>
               @endforelse
           </tbody>
       </table><br>
       <p class="text-center">
           <a href="/goats/create">
               <button class=" bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-400 px-10">
                   &bull;Create a Goat&bull;
               </button>
           </a>
       </p>
   @endsection
