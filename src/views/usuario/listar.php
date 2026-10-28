<h1>Usuários</h1>

<?php renderizarFlashMessages(); ?>

<a href="<?= url("/usuarios/novo") ?>">Novo usuário</a>

<br><br>

<?php if (empty($usuarios)): ?>
    <p>Nenhum usuário encontrado.</p>
<?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Salário</th>
            <th>Crachá</th>
            <th>ID Pessoa</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= escapar($usuario->getId()) ?></td>
                <td><?= escapar($usuario->getNome()) ?></td>
                <td><?= escapar($usuario->getSobrenome()) ?></td>
                <td><?= escapar($usuario->getCargo()) ?></td>
                <td><?= escapar($usuario->getSetor()) ?></td>
                <td><?= escapar($usuario->getSalario()) ?></td>
                <td><?= escapar($usuario->getCracha()) ?></td>
                <td><?= escapar($usuario->getIdPessoa()) ?></td>
                <td>
                    <a href="<?= url("/usuarios/{$usuario->getId()}/editar") ?>">
                        Editar
                    </a>

                    <form
                        method="POST"
                        action="<?= url("/usuarios/{$usuario->getId()}/deletar") ?>"
                        style="display:inline"
                    >
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>