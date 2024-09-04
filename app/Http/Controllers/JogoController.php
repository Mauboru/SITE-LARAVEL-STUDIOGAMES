<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;

class JogoController extends Controller {
    public function index() {
        // $this->authorize('index', Jogo::class);
        $data = Jogo::all();    
        return view('jogo.index', compact(['data']));
    }

    public function create() {
        // $this->authorize('create', Jogo::class);
        return view('jogo.create');
    }

    public function store(Request $request) {
        // $this->authorize('create', Jogo::class);
        if($request->hasFile('documento')) {
            $data = new Jogo();
            $data->nome = $request->nome;
            $data->descricao = $request->descricao;
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
        // $this->authorize('show', Jogo::class);
        $data = Jogo::find($id);
        if(isset($data)) {
            return view('jogo.show', compact(['data']));
        }
        return "<h1>ERRO: Jogo NÃO ENCONTRADO!</h1>";
    }

    public function edit($id) {
        // $this->authorize('edit', Jogo::class);
        $data = Jogo::find($id);
        if(isset($data)) {
            return view('jogo.edit', compact(['data']));
        }
        return "<h1>ERRO: Jogo NÃO ENCONTRADO!</h1>";
    }

    public function update(Request $request, $id) {
        // $this->authorize('edit', Jogo::class);
        $data = Jogo::find($id);
        if(isset($data)) {
            $data->nome = $request->nome;
            $data->descricao = $request->descricao;
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
        // $this->authorize('destroy', Jogo::class);
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