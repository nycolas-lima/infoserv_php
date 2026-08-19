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


echo "<br>";

/**
 * calcular e exibir todos os numeros pares de 2 até 50.
 * sem pula de 2 em 2 no for;
 * 
 * dica: utilizar formula do numeros pares.
 */

echo "<br>";

/**
 * calcular e exibir os 5 primeiros numeros primos.
 * 
 * dica: utilizar formula do numeros pares.
 */