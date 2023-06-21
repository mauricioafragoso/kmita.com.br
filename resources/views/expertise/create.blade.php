<x-layout title="Área de Atuação - Criar">

    <a href="/expertise" class="btn btn-primary">Voltar</a>

    <form action="/expertise/store" method="post">
        @csrf

        <div class="mb-3">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Descrição:</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>

</x-layout>
