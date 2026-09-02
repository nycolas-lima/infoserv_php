<?php

$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$cargo = $_POST["cargo"] ?? "";
$setor = $_POST["setor"] ?? "";
$salario = $_POST["salario"] ?? "";
$cracha = $_POST["cracha"] ?? "";

echo "Nome: $nome";
echo "<br>";
echo "Sobrenome: $sobrenome";
echo "<br>";
echo "Cargo $cargo";
echo "<br>";
echo "Setor $setor";
echo "<br>";
echo "Salário $salario";
echo "<br>"; 
echo "Crachá $cracha";

$htmlBotaoVoltar = '<br>
        <button type="button">
            <a href="/infoserv_php/salvar-funcionario">Voltar</a>
        </button>
';

echo $htmlBotaoVoltar;