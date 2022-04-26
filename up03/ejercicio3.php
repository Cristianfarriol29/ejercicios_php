<!-- Enunciado:

Crear un código que pasado un número nos diga cuántas veces es
necesario elevarlo para que pase de 10.000
Ej: si el número es 150, el resultado es 2 =>  150^2 > 10.000
Ej: si el número es 5, el resultado es 6 => 5^6 > 10.000

Objetivo:

Familiarizarse con los bucles y las operaciones aritméticas -->


<?php

$numero = isset($_GET["numero"])? is_numeric($_GET["numero"]) : 5;
$count = 1;
$resultado = $numero;


while ($resultado < 10000){

    $resultado *= $numero;
    $count++;
};


echo "si el numero es $numero, el resultado es $count => $numero*$count > 10.000";


