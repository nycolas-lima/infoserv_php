<h1>Pessoas</h1>

<?php renderizarFlashMessages(); ?>

<div class="card">
  <div class="card-body">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPessoa">
    Cadastrar Pessoa
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalPessoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="titulo-modal-pessoa modal-title fs-5" id="exampleModalLabel">Cadastrar Pessoa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" class="col-auto">
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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
        </div>
        </div>
    </div>
    </div>

    <br><br>

    <?php if (empty($dados)): ?>
        <p>Nenhuma pessoa encontrada.</p>
    <?php else: ?>
        <table class="table table-striped table-light table-hover rounded-3 overflow-hidden w-auto">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>

            <?php foreach ($dados as $pessoa): ?>
                <tr>
                    <td><?= escapar($pessoa->getId()) ?></td>
                    <td><?= escapar($pessoa->getNome()) ?></td>
                    <td><?= escapar($pessoa->getSobrenome()) ?></td>
                    <td><?= escapar($pessoa->getEmail()) ?></td>
                    <td><?= escapar($pessoa->getTelefone()) ?></td>
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