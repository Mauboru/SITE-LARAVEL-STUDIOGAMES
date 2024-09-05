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

                <!-- Campo Categoria -->
                <div class="mb-4">
                    <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoria</label>
                    <select id="categoria_id" name="categoria_id" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <option value="">Selecione uma Categoria</option>
                        @foreach ($data as $categoria)
                            <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Campo Horas Jogadas -->
                <div class="mb-4">
                    <label for="qtdHorasJogadas" class="block text-sm font-medium text-gray-700">Quantidade Horas Jogadas</label>
                    <input type="number" id="qtdHorasJogadas" name="qtdHorasJogadas" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" min="0">
                </div>

                <!-- Campo Documento -->
                <div class="mb-4">
                    <label for="documento" class="block text-sm font-medium text-gray-700">Documento</label>
                    <input type="file" id="documento" name="documento" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>

                <!-- Botão Voltar -->
                <a href="{{ route('jogo') }}" class="btn btn-success mb-4">Voltar</a>
                <!-- Botão Salvar -->
                <button type="submit" class="btn btn-primary mb-4">Salvar</button>
            </form>
        </div>
    </div>
</div>

@endsection