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

echo "<br>";