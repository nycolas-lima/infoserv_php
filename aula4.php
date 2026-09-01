<?php

for($contador = 5; $contador >=0; $contador--) {
    echo $contador . "<br>";
}

echo "<br>";

for($contador = 0; $contador <=5; $contador++) {
    echo $contador . "<br>";
}

echo "<br>while:<br>";

$contador = 5;

while($contador >= 1) {
    echo $contador . "<br>";
    $contador--;
}

echo "<br>while:<br>";

$contador = 1;

while($contador <= 5) {
    echo $contador . "<br>";
    $contador++;
}

echo "<br>";

for($numero = 5, $fatorial = 1; $numero > 0; $numero--) {
    $fatorial *= $numero;
}

echo $fatorial;

echo "<br>";

/**
 * calcular e exibir a tabuada do 5 utilizando laço for.
 * resultado esperado:
 * 5x1 = 5
 * 5x2 = 10
 * ...
 * 5x10 = 50
 */

for ($numero = 1, $contador = 5; $numero <= 10; $numero++) {
    $resultado = $contador * $numero;
     echo "$contador X $numero = $resultado <br>";
}


echo "<br>";

/**
 * calcular e exibir todos os numeros pares de 2 até 50.
 * sem pula de 2 em 2 no for;
 * 
 * dica: utilizar formula do numeros pares.
 */

for ($numero = 2; $numero <= 50; $numero++) {
    $resto = $numero % 2;
    $ehPar = $resto == 0;

    if ($ehPar) {
        echo "O $numero é par. <br>";
    }
}

echo "<br>";

/**
 * Calcular e exibir os 5 primeiros numeros primos.
 * Os 5 primeiros primos sao: 2, 3, 5, 7, 11.
 * 
 * Dica: utilizar formula do numeros pares.
 * e uma vairavel $limitePrimos = 5.
 * Serão 2 FOR um dentro do outro FOR
 */

$limitePrimos = 5;
$contadorLimitePrimos = 0;

for ($numeroAvaliado = 2; $contadorLimitePrimos < $limitePrimos; $numeroAvaliado++) {

    $ehPrimo = true;
    $penultimoNumero = $numeroAvaliado - 1;

    for ($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {

        $resto = $numeroAvaliado % $divisor;
        $naoEhPrimo = $resto == 0;

        if ($naoEhPrimo) {
            $ehPrimo= false;

            break;
        }

    }

    if($ehPrimo) {
        $contadorLimitePrimos++;
        echo "O número $numeroAvaliado é primo.<br>";
    }

}

$funcionarios = []; // array vazio
$funcionarios = array(); // array vazio
$numeros = [123, 25]; // tamanho 2
            // 0, 1
$funcionarios = ["Ariel", "Maria", "Joao"]; // 3

foreach($funcionarios as $funcionario) {
    echo $funcionario . "<br>";
}

echo "<br>";

/**
 * utilizar o array anterior e aplicar os itens abaixo:
 * 
 * conceder 10% de aumento pra cada funcionario.
 * adicionar setor de funcionario.
 * adicionar desconto do inss do funcionario.
 */

$funcionariosArrayAssociativo = [
        "nome" => "Ariel",
        "cargo" => "Professor",
        "salario" => "5000",
        "setor" => "educação",
        "descontoINSS" => "230"
];

$percentual = 10;
$percentualAumento = $percentual / 100;
$salario = $funcionariosArrayAssociativo["salario"];
$aumento = $salario * $percentualAumento;
$aumentoFormat = formatarParaReal($aumento);
$novoSalario =  formatarParaReal($salario + $aumento);
$salarioAntigo = formatarParaReal($salario);

echo "R$ ". formatarParaReal(10.49);
echo "<br>";

echo "O salário era de: $salarioAntigo o aumento foi de $aumentoFormat e seu novo salário é: $novoSalario";

function formatarParaReal(float $valor): string {
    $valorFormatado = number_format($valor, 2, ',', '.');

    return $valorFormatado;
}

echo "<br>";

/**
 * Refazer o exercício da calculadora utilizando funções
 */

function somar(float $a, float $b): float
{
    return $a + $b;
}

function subtrair(float $a, float $b): float
{
    return $a - $b;
}

function multiplicar(float $a, float $b): float
{
    return $a * $b;
}

function dividir(float $a, float $b): float
{
    return $a / $b;
}

$resultado = somar(10,5);

echo "<br>";

/**
 * Refazer o exercicio da tabuada com funções
 */

function tabuada($numero, $limite = 10) {
    for ($numero = 1, $contador = 5; $numero <= 10; $numero++) {
        $resultado = $contador * $numero;
        echo "$contador X $numero = $resultado <br>";
    }
}

echo "<br>";

/**
 * Refazer o exercicio das medias com funções
 */

function mediaAritmetica($valor1, $valor2, $valor3){

    $mediaAritmetica = ($valor1 + $valor2 + $valor3) / 3;

    if ($mediaAritmetica >= 7) {
        echo "O aluno foi aprovado com a média aritmetica: $mediaAritmetica";
    } elseif ($mediaAritmetica >= 5) {
        echo "O aluno está em recuperação com a média aritmetica: $mediaAritmetica";
    } else {
        echo "O aluno está reprovado com a média aritmetica: $mediaAritmetica";
    }
}

 echo "<br>";
$valor1 = 10;
$valor2 = 10; 
$valor3 = 10;
mediaAritmetica($valor1, $valor2, $valor3);

function mediaPonderada($prova1, $prova2, $prova3, $peso1, $peso2, $peso3){
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
}

$prova1 = 10;
$prova2 = 10;
$prova3 = 10;
$peso1 = 2;
$peso2 = 4;
$peso3 = 6;
mediaPonderada($prova1, $prova2, $prova3, $peso1, $peso2, $peso3);

function mediaHarmonica($prova1, $prova2, $prova3, $numerador){
    $denominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3);
    $mediaHarmonica = $numerador / $denominador;

    if ($mediaHarmonica >= 7) {
        echo "O aluno foi aprovado com a média harmonica: $mediaHarmonica";
    } elseif ($mediaHarmonica >= 5) {
        echo "O aluno está em recuperação com a média harmonica: $mediaHarmonica";
    } else {
        echo "O aluno está reprovado com a média harmonica: $mediaHarmonica";
    }
}

$prova1 = 10;
$prova2 = 10;
$prova3 = 10;
$numerador = 3;
mediaHarmonica($prova1, $prova2, $prova3, $numerador)
