<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;


class salaController extends Controller
{
  // Método para exibir a lista de salas
    public function index()
    {
        // Obtém todos as salas do banco de dados usando o model 'Sala'
        $autores = Sala::all();
        // Retorna a view 'sala.index' e passa as salas como um parâmetro
        return view('sala.index', compact('sala'));
        // compact -> Cria um array associativo.
    }
    
    // Método para exibir o formulário de criação de autor

    public function create()
    {
        // Retorna a view 'sala.create'
        return view('autores.create');
    }

    // Método para armazenar os dados da nova sala no banco de dados

    public function store(Request $request)
    {
        // Cria uma nova instância do model 'Sala' com os dados fornecidos no request
        $sala = new Sala([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);
        // Salva a sala no banco de dados
        $sala->save();
        // Redireciona para a rota 'sala.index' após salvar
        return redirect()->route('sala.create');
    }

    // Método para exibir os detalhes de uma sala específica

    public function show(string $id)
    {
        // Encontra uma sala no banco de dados com o ID fornecido
        $sala = Sala ::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('sala.show', compact('sala'));
    }

    // Método para exibir o formulário de edição de autor

    public function edit(string $id)
    {
        // Encontra uma sala no banco de dados com o ID fornecido
        $sala = Sala::findOrFail($id);
        // Retorna a view 'sala.edit' e passa o autor como parâmetro
        return view('sala.edit', compact('sala'));
    }

    // Método para atualizar os dados da sala no banco de dados

    public function update(Request $request, string $id)
    {
        // Encontra uma sala no banco de dados com o ID fornecido
        $sala = Sala::findOrFail($id);
        // Atualiza os campos da sala com os dados fornecidos no request
        $sala->nome = $request->input('nome');
        $sala->descricao = $request->input('descricao');
        // Salva as alterações na sala
        $sala->save();
        // Redireciona para a rota 'sala.index' após salvar
        return redirect()->route('sala.index');
    }

     // Método para excluir uma sala do banco de dados

    public function destroy(string $id)
    {
        // Encontra uma sala no banco de dados com o ID fornecido
        $sala = Sala::findOrFail($id);
        // Exclui o sala do banco de dados
        $sala->delete();
        // Redireciona para a rota 'sala.index' após excluir
        return redirect()->route('sala.index');
    }
}
