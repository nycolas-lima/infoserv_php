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