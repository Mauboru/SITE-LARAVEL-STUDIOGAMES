<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Jogos') }}
            </h2>
            <a href="{{ route('jogo.create') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                Novo Jogo
            </a>
        </div>
    </x-slot>
</x-app-layout>