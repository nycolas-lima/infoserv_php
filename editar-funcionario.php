<?php

require_once "./conexao.php";

$idFuncionario = $_REQUEST["id"] ?? 0;

$sql = "SELECT * FROM funcionario WHERE id=$idFuncionario LIMIT 1;";

$resultado = $conexao->query($sql);

$funcionario = (object) $resultado->fetch_assoc() ?? null;

$encontrouFuncionario = $funcionario->nome ?? "";

?>

<h1>Editar Funcionário</h1>

<br><br>

<?php 
    if (empty($encontrouFuncionario)) {
 ?>
 
 <p>Funcionário não encontrado.</p>

 <?php } else { ?>
    <form method="POST" action="atualizar-funcionario.php">
        <input type="text" readonly name="id" value="<?= $idFuncionario  ?>">
        <input type="text" name="nome" id="nome" value="<?=  $funcionario->nome ?>">
        <input type="text" name="sobrenome" id="sobrenome" value="<?=  $funcionario->sobrenome ?>">

        <br><br>
        
        <button type="submit">Atualizar</button>
    </form>
 <?php } ?>