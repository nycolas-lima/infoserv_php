<?php

$servidor = "localhost"; // host | server
$usuario = "aluno";
$senha = "1234";
$bancoDeDados = "infoserv";

$conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

if($conexao->connect_error) {
    die("Erro ao conectar no banco de dados($bancoDeDados): " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");