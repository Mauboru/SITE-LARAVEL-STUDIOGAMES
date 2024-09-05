@extends('home')

@section('conteudo')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Alterar Categoria</h2>

                <!-- Formulário de Edição -->
                <form action="{{ route('categoria.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <!-- Campo Nome -->
                    <div class="mb-4">
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome da Categoria</label>
                        <input type="text" id="nome" name="nome" value="{{ $data->name }}" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>

                    <!-- Campo Descrição -->
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                        <textarea id="descricao" name="descricao" rows="6" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">{{ $data->descricao }}</textarea>
                    </div>

                    <!-- Botão Voltar -->
                    <a href="{{ route('categoria') }}" class="btn btn-success mb-4">Voltar</a>
                    <!-- Botão Salvar -->
                    <button type="submit" class="btn btn-primary mb-4">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection