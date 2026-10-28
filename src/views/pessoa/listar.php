<h1>Pessoa</h1>

<?php renderizarFlashMessages(); ?>

<a href="<?= url("/pessoa/novo") ?>">Nova pessoa</a>

<br><br>

<?php if (empty($pessoas)): ?>
    <p>Nenhuma pessoa encontrado.</p>
<?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

        <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?= escapar($pessoa->getId()) ?></td>
                <td><?= escapar($pessoa->getNome()) ?></td>
                <td><?= escapar($pessoa->getSobrenome()) ?></td>
                <td><?= escapar($pessoa->getEmail()) ?></td>
                <td><?= escapar($pessoa->getTelefone()) ?></td>
                <td>
                    <a href="<?= url("/pessoa/{$pessoa->getId()}/editar") ?>">
                        Editar
                    </a>

                    <form
                        method="POST"
                        action="<?= url("/pessoa/{$pessoa->getId()}/deletar") ?>"
                        style="display:inline"
                    >
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>