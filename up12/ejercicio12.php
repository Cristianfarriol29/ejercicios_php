<!-- Enunciado:

Escribir un programa que dado un número calcule su factorial
Es decir, si el número es 5 el resultado sea:

5 x 4 x 3 x 2 x 1 = 120


Objetivo:

Comprender las funciones recursivas. -->


<?php

$numero = $_GET["number"];

function factorial($numero)
{
    $array = [];
    $counter = $numero;
    for ($i = 1; $i <= $counter; $i++) {
        array_push($array, $numero);
        /* print_r("$numero"); */
        --$numero;
    }

    $total = 1;
    foreach ($array as $key => $value) {
        $total = $total * $value;
    }
    echo "El factorial de $counter es $total";
}


factorial($numero);


