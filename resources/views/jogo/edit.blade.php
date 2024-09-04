@extends('home')

@section('conteudo')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Alterar Jogo</h2>
                
                <!-- Botão Voltar -->
                <a href="{{ route('jogo.index') }}" class="btn btn-success mb-4">
                    Voltar
                </a>

                <!-- Formulário de Edição -->
                <form action="{{ route('jogo.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <!-- Campo Nome -->
                    <div class="mb-4">
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome do Jogo</label>
                        <input type="text" id="nome" name="nome" value="{{ $data->nome }}" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>

                    <!-- Campo Descrição -->
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                        <textarea id="descricao" name="descricao" rows="6" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">{{ $data->descricao }}</textarea>
                    </div>

                    <!-- Campo Documento -->
                    <div class="mb-4">
                        <label for="documento" class="block text-sm font-medium text-gray-700">Documento (PDF)</label>
                        <input type="file" id="documento" name="documento" class="">
                        @if ($data->url)
                            <p class="mt-2 text-sm text-gray-600">Arquivo atual: {{ $data->url }}</p>
                        @endif
                    </div>

                    <!-- Botão Salvar -->
                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection