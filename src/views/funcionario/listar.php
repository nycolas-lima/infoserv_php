<h1>Funcionários</h1>

<?php renderizarFlashMessages(); ?>

<div class="card">
  <div class="card-body">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalFuncionario">
    Cadastrar Funcionário
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalFuncionario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="titulo-modal-funcionario modal-title fs-5" id="exampleModalLabel">Cadastrar Funcionário</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" class="col-auto">
            <form class="form-control form-control-lg" method="POST">
                <div>
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" name="nome" value="">
                </div>

                <div>
                    <label for="sobrenome">Sobrenome</label>
                    <input class="form-control" type="text" id="sobrenome" name="sobrenome" value="">
                </div>

                <div>
                    <label for="salario">Salário</label>
                    <input class="form-control" type="text" id="salario" name="salario" value="">
                </div>

                <div>
                    <label for="cargo">Cargo</label>
                    <input class="form-control" type="text" id="cargo" name="cargo" value="">
                </div>

                <div>
                    <label for="setor">Setor</label>
                    <input class="form-control" type="text" id="setor" name="setor" value="">
                </div>

                <div>
                    <label for="cracha">Crachá</label>
                    <input class="form-control" type="text" id="cracha" name="cracha" value="">
                </div>

                <div>
                    <label for="idPessoa">ID Pessoa</label>
                    <input class="form-control" type="text" id="idPessoa" name="idPessoa" value="">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-success">Salvar</button>
        </div>
        </div>
    </div>
    </div>

    <br><br>

    <?php if (empty($dados)): ?>
        <p>Nenhuma pessoa encontrado.</p>
    <?php else: ?>
        <table class="table table-striped table-light table-hover rounded-3 overflow-hidden w-auto">
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

            <?php foreach ($dados as $funcionario): ?>
                <tr>
                    <td><?= escapar($funcionario->getId()) ?></td>
                    <td><?= escapar($funcionario->getNome()) ?></td>
                    <td><?= escapar($funcionario->getSobrenome()) ?></td>
                    <td><?= escapar($funcionario->getCargo()) ?></td>
                    <td><?= escapar($funcionario->getSetor()) ?></td>
                    <td><?= escapar($funcionario->getSalario()) ?></td>
                    <td><?= escapar($funcionario->getCracha()) ?></td>
                    <td><?= escapar($funcionario->getIdPessoa()) ?></td>
                    <td>
                    <button type="button" class="btn btn-warning">Editar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
  </div>
</div>