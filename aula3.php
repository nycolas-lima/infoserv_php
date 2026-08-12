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