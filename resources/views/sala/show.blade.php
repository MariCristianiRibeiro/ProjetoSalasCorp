<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/salas.css') }}">
        <h1>Detalhes da Sala</h1>
        <ul>
            <li><strong>ID:</strong> {{ $sala->id }}</li>
            <li><strong>Nome:</strong> {{ $sala->nome }}</li>
            <li><strong>Descrição:</strong> {{  $sala->descricao }}</li>
        </ul>
        <a href="{{ route('salas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>
