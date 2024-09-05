<h1>Relatorio de Jogos</h1>
<hr>
<ul>
    @foreach ($data as $item)
        <li>{{$item->nome}} é um {{$item->descricao}} , {{$item->qtdHorasJogadas}} horas jogadas , {{$item->categoria->name}}</li>
    @endforeach
</ul>