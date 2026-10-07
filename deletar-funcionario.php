<?php

require_once "./conexao.php";

$idFuncionario = $_REQUEST["id"] ?? 0;

if (empty($idFuncionario )) {
    retornarParaListagem();
}

$sql = "DELETE FROM funcionario WHERE id=$idFuncionario LIMIT 1;";

$resultado = $conexao->query($sql);

retornarParaListagem();

function retornarParaListagem() {
    header("Location: listar-funcionarios.php");
    exit;
}