<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Jogos') }}
            </h2>
            <div class="flex justify-between items-center">
                <a href="{{ route('jogo.create') }}" class="btn btn-primary mr-2">+</a>
                <a href="{{ route('report') }}" class="btn btn-DANGER mr-2">PDF</a>
            </div>
        </div>
    </x-slot>
    @yield('conteudo')
</x-app-layout>