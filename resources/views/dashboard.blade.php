<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 ">
            {{ __('dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-5 lg:px-20">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <x-goat-list />
            </div>
        </div>
    </div>
</x-app-layout>
