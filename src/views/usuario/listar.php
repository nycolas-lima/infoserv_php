<script src="<?= PUBLIC_ASSETS ?>/js/usuarios.js"></script>

<h1>Usuários</h1>

<?php renderizarFlashMessages(); ?>

<div class="card">
    <div class="card-body">

        <!-- Button trigger modal -->
        <button id="cadastrarUsuario" type="button" class="btn btn-success cadastrarUsuario" data-bs-toggle="modal" data-bs-target="#modalUsuario">
            Cadastrar Usuário
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="tituloModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tituloModal">
                            Cadastrar Usuário
                        </h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body col-auto">
                        <form class="form-control form-control-lg" method="POST">

                            <div>
                                <label for="nomeDeUsuario">Nome de Usuário</label>
                                <input class="form-control" type="text" id="nomeDeUsuario" name="nomeDeUsuario" value="">
                            </div>

                            <div>
                                <label for="senha">Senha</label>
                                <input class="form-control" type="password" id="senha" name="senha" value="">
                            </div>

                            <div>
                                <label for="status">Status</label>
                                <input class="form-control" type="text" id="status" name="status" value="">
                            </div>

                            <div>
                                <label for="cadastroCompleto">Cadastro Completo</label>
                                <input class="form-control" type="text" id="cadastroCompleto" name="cadastroCompleto" value="">
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

            <p>Nenhum usuário encontrado.</p>

        <?php else: ?>

            <table id="tabelaUsuarios" class="table table-striped table-light table-hover rounded-3 overflow-hidden w-auto">

                <tr>
                    <th>ID</th>
                    <th>Nome de Usuário</th>
                    <th>Status</th>
                    <th>Cadastro Completo</th>
                    <th>Ações</th>
                </tr>

                <?php foreach ($dados as $usuario): ?>

                    <tr>
                        <td><?= escapar($usuario->getId()) ?></td>
                        <td><?= escapar($usuario->getNomeDeUsuario()) ?></td>
                        <td><?= escapar($usuario->getStatus()) ?></td>
                        <td><?= escapar($usuario->getCadastroCompleto()) ?></td>

                        <td>
                            <button value="<?= escapar($usuario->getId()) ?>" type="button" class="btn btn-warning btnEditar">
                                Editar
                            </button>

                            <button value="<?= escapar($usuario->getId()) ?>" type="button" class="btn btn-danger btnExcluir">
                                Excluir
                            </button>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>

        <?php endif; ?>

    </div>
</div>