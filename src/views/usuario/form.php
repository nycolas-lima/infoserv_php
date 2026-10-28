<h1><?= escapar($titulo) ?></h1>

<?php renderizarFlashMessages(); ?>

<form method="POST" action="<?= escapar($action) ?>">
    <div>
        <label>Nome</label>
        <input
            type="text"
            name="nome"
            value="<?= escapar($usuario->getNome()) ?>"
        >
    </div>

    <div>
        <label>Sobrenome</label>
        <input
            type="text"
            name="sobrenome"
            value="<?= escapar($usuario->getSobrenome()) ?>"
        >
    </div>

    <div>
        <label>Salário</label>
        <input
            type="number"
            step="0.01"
            name="salario"
            value="<?= escapar($usuario->getSalario()) ?>"
        >
    </div>

    <div>
        <label>Cargo</label>
        <input
            type="text"
            name="cargo"
            value="<?= escapar($usuario->getCargo()) ?>"
        >
    </div>

    <div>
        <label>Setor</label>
        <input
            type="text"
            name="setor"
            value="<?= escapar($usuario->getSetor()) ?>"
        >
    </div>

    <div>
        <label>Crachá</label>
        <input
            type="text"
            name="cracha"
            value="<?= escapar($usuario->getCracha()) ?>"
        >
    </div>

    <div>
        <label>ID Pessoa</label>
        <input
            type="number"
            name="idPessoa"
            value="<?= escapar($usuario->getIdPessoa()) ?>"
        >
    </div>

    <br>

    <button type="submit">Salvar</button>

    <a href="<?= url("/usuarios") ?>">Voltar</a>
</form>