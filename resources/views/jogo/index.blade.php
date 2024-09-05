@extends('home')

@section('conteudo')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full bg-white table-auto w-full">
                <thead>
                    <tr>
                        <th class="py-2 text-left px-4 w-1/12">ID</th>
                        <th class="py-2 text-left px-4 w-2/12">Nome do Jogo</th>
                        <th class="py-2 text-left px-4 w-3/12">Descrição</th>
                        <th class="py-2 text-left px-4 w-2/12">Categoria</th>
                        <th class="py-2 text-left px-4 w-2/12">Horas Jogadas</th>
                        <th class="py-2 text-center px-4 w-2/12">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $jogo)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $jogo->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $jogo->nome }}</td>
                        <td class="py-2 px-4 border-b">{{ $jogo->descricao }}</td>
                        <td class="py-2 px-4 border-b">{{ $jogo->categoria->name}}</td>
                        <td class="py-2 px-4 border-b">{{ $jogo->qtdHorasJogadas }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <!-- Botões de Ação -->
                            <div class="d-flex justify-content-center">
                                <form action="{{ route('jogo.show', $jogo->id) }}" method="GET" class="inline-block mr-2">
                                    <button type="submit" class="btn btn-primary">🔍︎</button>
                                </form>
                                
                                <form action="{{ route('jogo.edit', $jogo->id) }}" method="GET" class="inline-block mr-2">
                                    <button type="submit" class="btn btn-dark">Editar</button>
                                </form>
                                
                                <form action="{{ route('jogo.destroy', $jogo->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');" class="inline-block">
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