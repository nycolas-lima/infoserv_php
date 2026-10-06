<?php

require_once "./conexao.php";

$idFuncionario = $_REQUEST["id"] ?? 0;
$nome = $_REQUEST["nome"] ?? "";
$sobrenome = $_REQUEST["sobrenome"] ?? "";
$salario = $_REQUEST["salario"] ?? 0;
$cargo = $_REQUEST["cargo"] ?? "";
$setor = $_REQUEST["setor"] ?? "";
$cracha = $_REQUEST["cracha"] ?? "";

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
$camposUpdate = "nome='$nome', sobrenome='$sobrenome', salario=$salario, cargo='$cargo', setor='$setor', cracha='$cracha' ";
$where = "WHERE id=$idFuncionario LIMIT 1;";

$sql .= $camposUpdate;
$sql .= $where;

$resultado = $conexao->query($sql);

retornarParaListagem();

function retornarParaListagem() {
    header("Location: listar-funcionarios.php");
    exit;
}