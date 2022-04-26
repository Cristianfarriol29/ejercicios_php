<!-- Enunciado:

Escribir un programa que dado un array, te diga la longitud
del string más largo y el del más corto.

$cadenas = ["patata","cebolla","sal","pimienta","te","agua"];

ej:
El string más corto es 2 y el string más largo es 8


Objetivo:

Familiarizarse con el tratamiento de arrays -->


<?php 

$cadenas = ["patata","cebolla","sal","pimienta","te","agua"];

$longest = max(array_map('strlen', $cadenas));
$shortest = min(array_map('strlen', $cadenas));

echo "el minimo es $shortest y el maximo es $longest";

