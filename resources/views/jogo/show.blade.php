@extends('home')

@section('conteudo')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Detalhes do Jogo</h2>
                
                <!-- Botão Voltar -->
                <a href="{{ route('jogo') }}" class="btn btn-success mb-4">
                    Voltar
                </a>

                <!-- Detalhes do Jogo -->
                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Nome do Jogo:</h3>
                    <p class="mt-1 text-gray-700">{{ $data->nome }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Descrição:</h3>
                    <p class="mt-1 text-gray-700">{{ $data->descricao }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Categoria:</h3>
                    <p class="mt-1 text-gray-700">{{ $data->categoria->name }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Quantidade de horas jogadas:</h3>
                    <p class="mt-1 text-gray-700">{{ $data->qtdHorasJogadas }}</p>
                </div>

                @if ($data->url)
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Documento:</h3>
                        <a href="{{ asset('storage/' . $data->url) }}" class="btn btn-danger" target="_blank">
                            Ver PDF
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection