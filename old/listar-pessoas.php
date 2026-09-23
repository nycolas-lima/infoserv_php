<?php

require_once "./conexao.php";

$sql = "SELECT * FROM pessoa;";

$resultado = $conexao->query($sql);

while ($pessoa = $resultado->fetch_assoc()) {
    $objPessoa = (object) $pessoa;

    echo "$objPessoa->nome <br>";
}
