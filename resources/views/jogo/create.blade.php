@extends('home')

@section('conteudo')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Criar Novo Jogo</h2>
            
            <form action="{{ route('jogo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Campo Nome -->
                <div class="mb-4">
                    <label for="nome" class="block text-sm font-medium text-gray-700">Nome do Jogo</label>
                    <input type="text" id="nome" name="nome" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>

                <!-- Campo Descrição -->
                <div class="mb-4">
                    <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                    <textarea id="descricao" name="descricao" rows="6" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                </div>

                <!-- Campo Documento -->
                <div class="mb-4">
                    <label for="documento" class="block text-sm font-medium text-gray-700">Documento</label>
                    <input type="file" id="documento" name="documento" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>

                <!-- Botão Salvar -->
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
            
            <!-- Botão Voltar -->
            <div class="mt-4">
                <a href="{{ route('jogo.index') }}" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                    </svg>
                    Voltar
                </a>
            </div>
        </div>
    </div>
</div>

@endsection