<h1><?= escapar($titulo) ?></h1>

<?php renderizarFlashMessages(); ?>

<form method="POST" action="<?= escapar($action) ?>">
    <div>
        <label>Nome de Usuário</label>
        <input
            type="text"
            name="nomeDeUsuario"
            value="<?= escapar($usuario->getNomeDeUsuario()) ?>"
        >
    </div>

    <div>
        <label>Senha</label>
        <input
            type="text"
            name="senha"
            value="<?= escapar($usuario->getSenha()) ?>"
        >
    </div>

    <div>
        <label>Status</label>
        <input
            type="number"
            step="0.01"
            name="status"
            value="<?= escapar($usuario->getStatus()) ?>"
        >
    </div>

    <div>
        <label>Cadastro Completo</label>
        <input
            type="text"
            name="cadastroCompleto"
            value="<?= escapar($usuario->getCadastroCompleto()) ?>"
        >
    </div>

    <br>

    <button type="submit">Salvar</button>

    <a href="<?= url("/usuarios") ?>">Voltar</a>
</form>