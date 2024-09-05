@extends('home')

@section('conteudo')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Detalhes da Categoria</h2>
                
                <!-- Botão Voltar -->
                <a href="{{ route('categoria') }}" class="btn btn-success mb-4">Voltar</a>

                <!-- Detalhes do Jogo -->
                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Nome da Categoria:</h3>
                    <p class="mt-1 text-gray-700">{{ $data->name }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Descrição:</h3>
                    <p class="mt-1 text-gray-700">{{ $data->descricao }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection