<?php

$nota = 7;

switch (true) {
    case $nota >= 7:
        echo "Aprovado";
        break;

    case $nota >= 5:
        echo "Recuperação";
        break;

    default:
        echo "Reprovado";
        break;
}

$perfil = "admin";

if ($perfil == "admin") {
    echo "Administrador";
} elseif ($perfil == "usuario") {
    echo "Usuário Comum";
} else {
    echo "Perfil Desconhecido";
}

$numero = 10; // ler o numero do usuario (fixo || mock)

/**
 * Utilizar o operador modulo %
 * Para descobrir se o numero informado pelo usuario é par
 * se for par exibir é par e o numero lido, se nao exibir é impar e o numero lido.
 */

$resultado =  $numero % 2;

if ($resultado == 0) {
    echo "é par. " . $numero;
} else {
    echo "é impar. " .  $numero;
}