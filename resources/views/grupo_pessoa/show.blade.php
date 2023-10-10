<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/grupopessoas.css') }}">
        <h1>Detalhes do Grupo</h1>
        <ul>
            <li><strong>ID:</strong> {{ $grupopessoa->id }}</li>
            <li><strong>Descrição:</strong> {{ $grupopessoa->nome }}</li>
            <li><strong>Nacionalidade:</strong> {{  $grupopessoa->nacionalidade }}</li>
            <li><strong>Data de Nascimento:</strong> {{ date_format(new DateTime($grupopessoa->data_nascimento), 'd/m/Y') }}</li>
        </ul>
        <a href="{{ route('grupopessoas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>
