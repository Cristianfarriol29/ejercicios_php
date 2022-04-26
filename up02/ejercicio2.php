<!-- Enunciado:

Crear un código que pasado un número, nos diga si es par o impar.

Objetivo:

Realizar operaciones aritméticas simples con un valor pasado por parámetro. -->


<?php



$numero = $_GET["numero"];


function parOImpar($num){

    if($num % 2 == 0){
        echo "es par";
    }else {
        echo "es impar";
    }

}

parOImpar($numero);