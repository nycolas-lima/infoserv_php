<?php

require_once "./conexao.php";

$idFuncionario = $_REQUEST["id"] ?? 0;

$sql = "SELECT * FROM funcionario WHERE id=$idFuncionario LIMIT 1;";

$resultado = $conexao->query($sql);

$funcionario = (object) $resultado->fetch_assoc() ?? null;

$encontrouFuncionario = $funcionario->nome ?? "";

?>

<h1>Editar Funcionários</h1>

<br><br>

<?php 
    if (empty($encontrouFuncionario)) {
 ?>
 
 <p>Funcionário não encontado.</p>

 <?php } else { ?>
    <form method="POST" action="atualizar-funcionario.php">
        <input type="hidden" name="id value="<?= $idFuncionario ?>">
        <br>
        <input type="text" name="nome" id="nome" value="<?=  $funcionario->nome ?>">
        <br>
        <input type="text" name="sobrenome" id="sobrenome" value="<?=  $funcionario->sobrenome ?>">
        <br>
        <input type="text" name="salario" id="salario" value="<?=  $funcionario->salario ?>">
        <br>
        <input type="text" name="cargo" id="cargo" value="<?=  $funcionario->cargo ?>">
        <br>
        <input type="text" name="setor" id="setor" value="<?=  $funcionario->setor ?>">
        <br>
        <input type="text" name="cracha" id="cracha" value="<?=  $funcionario->cracha ?>">
        <br>
        <button type="submit">Atualizar</button>
    </form>
 <?php } ?>
