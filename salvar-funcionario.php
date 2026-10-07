<?php

require_once "./conexao.php";

$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$cargo = $_POST["cargo"] ?? "";
$setor = $_POST["setor"] ?? "";
$salario = $_POST["salario"] ?? "";
$cracha = $_POST["cracha"] ?? "";

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

$sql = "INSERT INTO funcionario ";
$campos = "(nome, sobrenome, salario, cargo, setor, cracha) ";
$valores = "VALUES ('$nome', '$sobrenome', '$salario', '$cargo', '$setor', '$cracha');";

$sql .= $campos . $valores;

$resultado = $conexao->query($sql);

retornarParaListagem();

function retornarParaListagem() {
    header("Location: listar-funcionarios.php");
    exit;
}