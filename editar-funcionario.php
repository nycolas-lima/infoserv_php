<?php

require_once "./conexao.php";

$idFuncionario = $_REQUEST["id"] ?? 0;

$sql = "SELECT * FROM funcionario WHERE id=$idFuncionario LIMIT 1;";

$resultado = $conexao->query($sql);

$funcionario = (object) $resultado->fetch_assoc() ?? null;

$encontrouFuncionario = $funcionario->nome ?? "";

?>

<h1>Editar Funcionário</h1>

<br>

<?php 
    if (empty($encontrouFuncionario)) {
 ?>
 
 <p>Funcionário não encontrado.</p>

 <?php } else { ?>
    <form method="POST" action="atualizar-funcionario.php">
        <div>
            <label for="id" class="form-label">ID</label>
            <input type="text" name="id" id="id" readonly aria-readonly="true" value="<?=  $funcionario->id ?>">
        </div>
        <br>

        <div>
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" value="<?=  $funcionario->nome ?>">
        </div>
        <br>

        <div>
            <label for="sobrenome">Sobrenome</label>
            <input class="form-control" type="text" name="sobrenome" id="sobrenome" value="<?=  $funcionario->sobrenome ?>">
        </div>
        <br>

        <div>
            <label for="cargo">Cargo</label>
            <input class="form-control" type="text" name="cargo" id="cargo" value="<?=  $funcionario->cargo ?>">
        </div>
        <br>

        <div>
            <label for="setor">Setor</label>
            <input class="form-control" type="text" name="setor" id="setor" value="<?=  $funcionario->setor ?>">
        </div>
        <br>

        <div>
            <label for="salario">Salário</label>
            <input class="form-control" type="text" name="salario" id="salario" value="<?=  $funcionario->salario ?>">
        </div>
        <br>

        <div>
            <label for="cracha">Crachá</label>
            <input class="form-control" type="text" name="cracha" id="cracha" value="<?=  $funcionario->cracha ?>">
        </div>
        <br>
        
        <div>
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
    </form>
 <?php } ?>