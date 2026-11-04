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
            <th>Nome de Usuário</th>
            <th>Senha</th>
            <th>Status</th>
            <th>Cadastro Completo</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= escapar($usuario->getId()) ?></td>
                <td><?= escapar($usuario->getNomeDeUsuario()) ?></td>
                <td><?= escapar($usuario->getSenha()) ?></td>
                <td><?= escapar($usuario->getStatus()) ?></td>
                <td><?= escapar($usuario->getCadastroCompleto()) ?></td>
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