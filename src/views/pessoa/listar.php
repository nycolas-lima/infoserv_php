<script src="<?= PUBLIC_ASSETS ?>/js/pessoas.js"></script>

<h1>Pessoas</h1>

<?php renderizarFlashMessages(); ?>

<div class="card">
    <div class="card-body">

        <!-- Button trigger modal -->
        <button id="cadastrarPessoa" type="button" class="btn btn-success cadastrarPessoa" data-bs-toggle="modal" data-bs-target="#modalPessoa">
            Cadastrar Pessoa
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalPessoa" tabindex="-1" aria-labelledby="tituloModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tituloModal">
                            Cadastrar Pessoa
                        </h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body col-auto">
                        <form class="form-control form-control-lg" method="POST">

                            <div>
                                <label for="nome">Nome</label>
                                <input class="form-control" type="text" id="nome" name="nome" value="">
                            </div>

                            <div>
                                <label for="email">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email" value="">
                            </div>

                            <div>
                                <label for="telefone">Telefone</label>
                                <input class="form-control" type="text" id="telefone" name="telefone" value="">
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Fechar
                        </button>

                        <button type="button" class="btn btn-success">
                            Salvar
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <br><br>

        <?php if (empty($dados)): ?>

            <p>Nenhuma pessoa encontrada.</p>

        <?php else: ?>

            <table id="tabelaPessoas" class="table table-striped table-hover rounded-3 overflow-hidden w-auto">

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
                            <button value="<?= escapar($pessoa->getId()) ?>" type="button" class="btn btn-warning btnEditar">
                                Editar
                            </button>

                            <button value="<?= escapar($pessoa->getId()) ?>" type="button" class="btn btn-danger btnExcluir">
                                Excluir
                            </button>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>

        <?php endif; ?>

    </div>
</div>