@extends('home')

@section('conteudo')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">ID</th>
                        <th class="py-2">Nome da Categoria</th>
                        <th class="py-2">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $categoria)
                    <tr class="">
                        <td class="py-2">{{ $categoria->id }}</td>
                        <td class="py-2">{{ $categoria->name }}</td>
                        <td class="py-2">{{ $categoria->descricao }}</td>
                        <td class="py-2 flex justify-content-center space-x-2 m-3">
                        <!-- Botão Ver -->
                        <form action="{{ route('categoria.show', $categoria->id) }}" method="GET">
                            <button type="submit" class="btn btn-primary px-3 py-2 mr-2">🔍︎</button>
                        </form>
                        
                        <!-- Botão Editar -->
                        <form action="{{ route('categoria.edit', $categoria->id) }}" method="GET">
                            <button type="submit" class="btn btn-dark px-3 py-2 mr-2"> Editar</button>
                        </form>
                        
                        <!-- Botão Excluir -->
                        <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger px-3 py-2 mr-2">Excluir</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection