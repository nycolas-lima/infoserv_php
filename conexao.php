<?php

$host = "localhost"; //servidor
$usuario = "aluno";
$senha = "1234";
$bancoDados = "infoserv";

$conexao = new mysqli($host, $usuario, $senha, $bancoDados);

if ($conexao->connect_error) {
    die("Erro ao conectar no banco de dados($bancoDados): " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

