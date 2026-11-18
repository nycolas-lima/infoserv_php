<h1>Pessoas</h1>

<?php renderizarFlashMessages(); ?>

<div class="card">
    <div class="card-body">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPessoa">
            Cadastrar Pessoa
        </button>

        <div class="modal fade" id="modalPessoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Pessoa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                
                <div>
                    <label for="nome">Nome</label>
                    <input class="form-control" type="" name="" value="">
                </div>

                <div>
                    <label for="sobrenome">Sobrenome</label>
                    <input class="form-control" type="" name="" value="">
                </div>

                <div>
                    <label for="email">E-mail</label>
                    <input class="form-control" type="" name="" value="">
                </div>

                <div>
                    <label for="telefone">Telefone</label>
                    <input class="form-control" type="" name="" value="">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" >Salvar</button>
            </div>
            </div>
        </div>
        </div>

        <br><br>

        <?php if (empty($dados)): ?>
            <p>Nenhuma pessoa encontrada.</p>
        <?php else: ?>
            <table class="form-control table table-dark" border="1" cellpadding="8">
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
                                <!--<button type="submit">Excluir</button>-->

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Excluir
                                </button>

                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>