<h1>Pessoas</h1>

<?php renderizarFlashMessages(); ?>

<a href="<?= url("/pessoas/novo") ?>">Nova Pessoa</a>

<br><br>

<?php if (empty($dados)): ?>
    <p>Nenhuma pessoa encontrada.</p>
<?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($dados as $pessoa): ?>
            <tr>
                <td><?= escapar($pessoa->getId()) ?></td>
                <td><?= escapar($pessoa->getNome()) ?></td>
                <td><?= escapar($pessoa->getEmail()) ?></td>
                <td><?= escapar($pessoa->getTelefone()) ?></td>
                <td>
                    <a href="<?= url("/pessoas/{$pessoa->getId()}/editar") ?>">
                        Editar
                    </a>

                    <form
                        method="POST"
                        action="<?= url("/pessoas/{$pessoa->getId()}/deletar") ?>"
                        style="display:inline"
                    >
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>