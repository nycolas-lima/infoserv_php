<?php

$a = 10;
$b = 5;

echo "A soma é: " . $a + $b;
echo "<br>";

echo "A subtração é: " . $a - $b;
echo "<br>";

echo "A multiplicação é: " . $a * $b;
echo "<br>";

echo "A divisão é: " . $a / $b;
echo "<br>";

$idade = 18;

var_dump($idade >= 18);
echo "$idade >= 18 <br>";

var_dump($idade < 18);
echo "$idade < 18 <br>";

var_dump($idade == 18);
echo "$idade == 18 <br>";

$idade = 20;
$temDocumento = true;

$podeEntrar = $idade >= 18 && $temDocumento;

var_dump($podeEntrar);
echo "podeEntrar <br>";