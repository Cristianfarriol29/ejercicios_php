<!-- Enunciado:

Crear un fichero php que reciba el título como parámetro GET
y en base a eso añada el contenido dentro de la etiqueta <h1>
del documento html.

Objetivo:

Poder coger un parámetro de entrada, y usarlo para generar un
documento HTML muy simple. -->

<?php


$titulo = $_GET["titulo"];

echo "<h1>$titulo</h1>";


