<form method="POST" action="/pesquisar">
    @csrf
    <input type="text" name="termo_pesquisa" placeholder="Pesquisar por nome ou email">
    <button type="submit">Pesquisar</button>
</form>
