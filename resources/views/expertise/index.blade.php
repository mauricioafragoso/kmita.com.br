<x-layout title="Áreas de Atuação">

    <a href="/expertise/create" class="btn btn-primary">Adicionar</a>

    <ul>
        @foreach($expertises as $expertise)
        <li>{{ $expertise->name }} - {{ $expertise->description }}</li>
        @endforeach
    </ul>

</x-layout>
