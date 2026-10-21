<?php

session_start();

require_once "./src/config/conexao.php";
require_once "./src/database/BancoDeDados.php";
require_once "./src/models/funcionario/FuncionarioModel.php";
require_once "./src/controllers/funcionario/FuncionarioController.php";

$bancoDeDados = new BancoDeDados($conexao);
$funcionarioModel = new FuncionarioModel($bancoDeDados);
$funcionarioController = new FuncionarioController($funcionarioModel);

$funcionarioController->listar();