<h1><?= escapar($titulo) ?></h1>

<?php renderizarFlashMessages(); ?>

<form method="POST" action="<?= escapar($action) ?>">
    <div>
        <label>Nome</label>
        <input
            type="text"
            name="nome"
            value="<?= escapar($pessoa->getNome()) ?>"
        >
    </div>

    <div>
        <label>Sobrenome</label>
        <input
            type="text"
            name="sobrenome"
            value="<?= escapar($pessoa->getSobrenome()) ?>"
        >
    </div>

    <div>
        <label>Email</label>
        <input
            type="text"
            name="email"
            value="<?= escapar($pessoa->getEmail()) ?>"
        >
    </div>

    <div>
        <label>Telefone</label>
        <input
            type="number"
            step="0.01"
            name="telefone"
            value="<?= escapar($pessoa->getTelefone()) ?>"
        >
    </div>

    <br>

    <button type="submit">Salvar</button>

    <a href="<?= url("/pessoa") ?>">Voltar</a>
</form>