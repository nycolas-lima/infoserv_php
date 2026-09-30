<?php

require_once "./conexao.php";

$idFuncionario = $_REQUEST["id"] ?? 0;

if (empty($idFuncionario)) {
    retornarParaListagem();
}

/**
 * UPDATE funcionario
    SET nome='', sobrenome='', salario=0, cargo='', setor='', cracha=''
    WHERE id=$idFuncionario LIMIT 1;
 */

if (empty($nome)) {
    retornarParaListagem();
}

if (empty($sobrenome)) {
    retornarParaListagem();
}

$sql = "UPDATE funcionario SET ";
$camposUpdate = "nome='$nome' ";
$where = "WHERE id=$idFuncionario LIMIT 1;";

$sql .= $camposUpdate;
$sql .= $where;

$resultado = $conexao->query($sql);

$funcionario = (object) $resultado->fetch_assoc() ?? null;

retornarParaListagem();

function retornarParaListagem() {
    header("Location: listar-funcionarios.php");
    exit;
}