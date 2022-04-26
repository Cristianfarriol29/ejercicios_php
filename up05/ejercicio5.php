<!-- Enunciado:

Detectar si un número es capicúa (o palíndromo)

Objetivo:

Seguir trabajando con cadenas de caracteres y números -->


<?php 

$value = $_GET['string'];

if($value === strrev($value)) {
    echo "$value es un palindromo";
} else {
    echo "$value no es un palindromo";
}