<?php

$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";

echo "Nome: $nome";
echo "<br>";
echo "E-mail: $email";

$htmlBotaoVoltar = '<br>
        <button type="button">
            <a href="/infoserv_php/funcionario.php">Voltar</a>
        </button>
';

echo $htmlBotaoVoltar;