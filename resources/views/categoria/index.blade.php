@extends('home')

@section('conteudo')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full bg-white table-auto w-full">
                <thead>
                    <tr>
                        <th class="py-2 text-left px-4 w-1/12">ID</th>
                        <th class="py-2 text-left px-4 w-5/12">Nome da Categoria</th>
                        <th class="py-2 text-left px-4 w-4/12">Descrição</th>
                        <th class="py-2 text-center px-4 w-2/12">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $categoria)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $categoria->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $categoria->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $categoria->descricao }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <!-- Botões de Ação -->
                            <div class="d-flex justify-content-center">
                                <form action="{{ route('categoria.show', $categoria->id) }}" method="GET" class="inline-block mr-2">
                                    <button type="submit" class="btn btn-primary">🔍︎</button>
                                </form>
                                
                                <form action="{{ route('categoria.edit', $categoria->id) }}" method="GET" class="inline-block mr-2">
                                    <button type="submit" class="btn btn-dark">Editar</button>
                                </form>
                                
                                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection