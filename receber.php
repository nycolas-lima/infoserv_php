<?php

/**
 * Pegar vários dados de uma vez só.
 * [
    "nome"=> "Ariel",
    "sobrenome"=> "Felippi",
 * ]

    $dadosFuncionario = $_POST ?? [];

    foreach($dadosFuncionario as $campo => $valor) {
        echo "$campo: $valor<br>";
    }
 */

$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$cargo = $_POST["cargo"] ?? "";
$setor = $_POST["setor"] ?? "";
$salario = $_POST["salario"] ?? "";
$cracha = $_POST["cracha"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div class="card">
        <div class="card-body">
                
            <h1>Dados Funcionário</h1>
            <ul class='list-group'>
                <li class='list-group-item'><?= $nome ?></li>
                <li class='list-group-item'><?= $sobrenome  ?></li>
                <li class='list-group-item'><?= $cargo  ?></li>
                <li class='list-group-item'><?= $setor  ?></li>
                <li class='list-group-item'><?= $salario  ?></li>
                <li class='list-group-item'><?= $cracha  ?></li>
            </ul>

            <br>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                <a href="/infoserv_php/form-funcionario.php" class="btn btn-primary" tabindex="-1" role="button">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>