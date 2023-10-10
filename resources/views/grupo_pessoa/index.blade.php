<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/grupopessoas/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Grupo</h1> --}}
        <br>
        <a href="{{ route('grupopessoas.create') }}" class="btn btn-primary">Novo Autor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grupopessoas as $grupopessoa)
                    <tr>
                        <td class="colunas">{{ $grupopessoa->id }}</td>
                        <td id="nome">{{ $grupopessoa->$descricao }}</td>
                        <td>
                            <a href="{{ route('grupopessoas.show', $grupopessoa->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('grupopessoas.edit', $grupopessoa->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('grupopessoas.destroy', $grupopessoa->id) }}" method="POST" style="display: inline;">
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

