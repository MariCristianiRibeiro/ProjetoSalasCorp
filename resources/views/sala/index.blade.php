<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/salas/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Salas</h1> --}}
        <br>
        <a href="{{ route('salas.create') }}" class="btn btn-primary">Nova Sala</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salas as $sala)
                    <tr>
                        <td class="colunas">{{ $sala->id }}</td>
                        <td id="nome">{{ $sala->nome }}</td>
                        <td id="descricao">{{ $sala->descricao }}</td>
                        <td>
                            <a href="{{ route('salas.show', $sala->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('salas.edit', $sala->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('salas.destroy', $sala->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

