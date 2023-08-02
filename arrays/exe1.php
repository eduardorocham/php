<?php

$numeros = [2, 4, 6, 8, 10];

$numeros[] = 12;

array_pop($numeros);

$has6value = in_array(6, $numeros);

foreach ($numeros as $numero)
    echo $numero . PHP_EOL;
?>