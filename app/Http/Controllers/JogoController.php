<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;

class JogoController extends Controller {
    public function index() {
        $data = Jogo::all();    
        return view('jogo.index', compact(['data']));
    }

    public function create() {
        $data = Categoria::all();
        return view('jogo.create', compact('data'));
    }

    public function store(Request $request) {
        if($request->hasFile('documento')) {
            $data = new Jogo();
            $data->nome = $request->nome;
            $data->descricao = $request->descricao;
            $data->categoria_id = $request->categoria_id;
            $data->qtdHorasJogadas = $request->qtdHorasJogadas;
            $data->save();
            $ext = $request->file('documento')->getClientOriginalExtension();
            $nome_arq = $data->id . "_" . time() . "." . $ext; 
            $request->file('documento')->storeAs("public/", $nome_arq);
            $data->url = $nome_arq;
            $data->save();
            return redirect()->route('jogo.index');
        }
    }

    public function show($id) {
        $data = Jogo::find($id);
        if(isset($data)) {
            return view('jogo.show', compact(['data']));
        }
        return "<h1>ERRO: Jogo NÃO ENCONTRADO!</h1>";
    }

    public function edit($id) {
        $data = Jogo::find($id);
        $categorias = Categoria::all();

        if(isset($data)) {
            return view('jogo.edit', compact(['data', 'categorias']));
        }
        return "<h1>ERRO: Jogo NÃO ENCONTRADO!</h1>";
    }

    public function update(Request $request, $id) {
        $data = Jogo::find($id);
        if(isset($data)) {
            $data->nome = $request->nome;
            $data->descricao = $request->descricao;
            $data->categoria_id = $request->categoria_id;
            $data->qtdHorasJogadas = $request->qtdHorasJogadas;
            if ($request->hasFile('documento')) {
                $ext = $request->file('documento')->getClientOriginalExtension();
                $nome_arq = $data->id . "_" . time() . "." . $ext; 
                $request->file('documento')->storeAs('public/', $nome_arq);
                $data->url = $nome_arq;
            }
            $data->save();
            return redirect()->route('jogo.index');
        }
        return "<h1>ERRO: Jogo NÃO ENCONTRADO!</h1>";
    }

    public function destroy($id) {
        $data = Jogo::find($id);
        if(isset($data)) {
            $data->delete();
            return redirect()->route('jogo.index');
        }
        return "<h1>ERRO: Jogo NÃO ENCONTRADO!</h1>";
    }

    public function report() {
        $data = Jogo::all();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('jogo.pdf', compact('data')));
        $dompdf->render();
        $dompdf->stream("relatorio-jogos-cadastrados.pdf", 
            array("Attachment" => false));
    }

    public function graph() {
        $jogos = Jogo::all();
        $data = [['Nome do Jogo', 'Quantidade Total Horas']];
    
        foreach ($jogos as $jogo) {
            $data[] = [$jogo->nome, $jogo->qtdHorasJogadas];
        }
        $data = json_encode($data);
        return view('jogo.graph', compact('data'));
    }    
}