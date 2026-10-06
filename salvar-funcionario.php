<?php

require_once "./conexao.php";

$idFuncionario = $_POST["id"] ?? 0;
$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$cargo = $_POST["cargo"] ?? "";
$setor = $_POST["setor"] ?? "";
$salario = $_POST["salario"] ?? "";
$cracha = $_POST["cracha"] ?? "";

$sql = "INSERT INTO funcionario ";
$campos = "(nome, sobrenome, salario, cargo, setor, cracha) ";
$valores = "VALUES ('$nome', '$sobrenome', '$salario', '$cargo', '$setor', '$cracha');";

$sql .= $campos . $valores;

$conexao->query($sql);

$resultado = $conexao->query($sql);

header("Location: listar-funcionarios.php");
exit;