<?php

require_once "./conexao.php";

$idFuncionario = $_POST["id"] ?? 0;
$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$cargo = $_POST["cargo"] ?? "";
$setor = $_POST["setor"] ?? "";
$salario = $_POST["salario"] ?? "";
$cracha = $_POST["cracha"] ?? "";

if (empty($idFuncionario)) {
    retornarParaListagem();
}

if (empty($nome)) {
    retornarParaListagem();
}

if (empty($sobrenome)) {
    retornarParaListagem();
}

if (empty($cargo)) {
    retornarParaListagem();
}

if (empty($setor)) {
    retornarParaListagem();
}

if (empty($salario)) {
    retornarParaListagem();
}

if (empty($cracha)) {
    retornarParaListagem();
}

/**
 * UPDATE funcionario SET nome='', sobrenome='', salario=0, cargo='', setor='', cracha='' WHERE id=$idFuncionario LIMIT 1;
 */

$sql = "UPDATE funcionario SET "; 
$camposUpdate = "nome='$nome', sobrenome='$sobrenome', salario='$salario', cargo='$cargo', setor='$setor', cracha='$cracha' ";
$where = "WHERE id=$idFuncionario LIMIT 1;";

$sql .= $camposUpdate;
$sql .= $where;

$resultado = $conexao->query($sql);

retornarParaListagem();

function retornarParaListagem() {
    header("Location: listar-funcionarios.php");
    exit;
}