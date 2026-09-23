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

echo "<br>";

$perfil = "admin";

if ($perfil == "admin") {
    echo "Administrador";
} elseif ($perfil == "usuario") {
    echo "Usuário Comum";
} else {
    echo "Perfil Desconhecido";
}

echo "<br>";

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

echo "<br>";

/**
 * Calcular o IMC de uma pessoa
 * informar se ela esta acima do peso, peso ideal ou abaixo do peso.
 */

$peso = 80;
$altura = 1.80;

$altura_quadrada = $altura * $altura;

$imc = $peso / $altura_quadrada; 

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc <= 24.9) {
    echo "Peso ideal"; 
} else {
    echo "Acima do peso";
}

echo "<br>";

/**
 * criar um algoritmo que vai simular o funcionamento de uma calculadora.
 * utilizar somente os operadores aritmeticos basicos sendo eles:
 * operadores: + - * /
 * 
 * após o calculo exibir o resultado da operação/calculo.
 * 
 * dica: utilizar if else ou switch case.
 * o simulador ira possuir 4 variaveis: $operador, $resultado, $valorA e $valorB.
 */

$valorA = 5;
$valorB = 2;
$operador = "+";

if ($operador == "*") {
    $resultado = $valorA * $valorB;
    echo $resultado;
} elseif ($operador == "/") {
    $resultado = $valorA / $valorB;
    echo $resultado;
} elseif ($operador == "-") { 
    $resultado = $valorA - $valorB;
    echo $resultado;
} elseif ($operador == "+") { 
    $resultado = $valorA + $valorB;
    echo $resultado;
} else {
    echo "Operador não informado";
}

echo "<br>";

/**
 * calcular a area de um quadrado. e exibir o resultado.
 * com a mensagem: A area do quadrado é:
 */

$ladoA = 4;
$ladoB = 4;

$area = $ladoA * $ladoB;

echo "A area do quadrado é $area";

echo "<br>";

/**
 * calcular a area do triangulo equilatero. e exibir o resultado.
 * com mensagem: a area do triangulo equilatero é:
 */

$base = 3;
$altura = 3;
$area = ($base * $altura) / 2;

echo "A area do triangulo equilatero é $area";

echo "<br>";

/**
 * calcular a media aritimetica, harmonica e ponderada de um aluno.
 * avaliar se este aluno passou, esta em recuperação ou foi reprovado.
 * 
 * a media pra passar é 7, recuperação é 5, reprovar abaixo de 5.
 */

$valor1 = 10;
$valor2 = 10;
$valor3 = 10;

$mediaAritmetica = ($valor1 + $valor2 + $valor3) / 3;

if ($mediaAritmetica >= 7) {
    echo "O aluno foi aprovado com a média aritmetica: $mediaAritmetica";
} elseif ($mediaAritmetica >= 5) {
    echo "O aluno está em recuperação com a média aritmetica: $mediaAritmetica";
} else {
    echo "O aluno está reprovado com a média aritmetica: $mediaAritmetica";
}

echo "<br>";

$prova1 = 10;
$prova2 = 10;
$prova3 = 10;

$peso1 = 2;
$peso2 = 4;
$peso3 = 6;

$numerador = ($prova1 * $peso1) + ($prova2 * $peso2) + ($prova3 * $peso3);
$denominador = $peso1 + $peso2 + $peso3;

$mediaPonderada = $numerador / $denominador;

if ($mediaPonderada >= 7) {
    echo "O aluno foi aprovado com a média ponderada: $mediaPonderada";
} elseif ($mediaPonderada >= 5) {
    echo "O aluno está em recuperação com a média ponderada: $mediaPonderada";
} else {
    echo "O aluno está reprovado com a média ponderada: $mediaPonderada";
}

echo "<br>";

$prova1 = 10;
$prova2 = 10;
$prova3 = 10;

$numerador = 3;
$denominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3);
$mediaHarmonica = $numerador / $denominador;

if ($mediaHarmonica >= 7) {
    echo "O aluno foi aprovado com a média harmonica: $mediaHarmonica";
} elseif ($mediaHarmonica >= 5) {
    echo "O aluno está em recuperação com a média harmonica: $mediaHarmonica";
} else {
    echo "O aluno está reprovado com a média harmonica: $mediaHarmonica";
}