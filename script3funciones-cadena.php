<?php 

# trim()  limpiamos los espacios en blanco por la izquierda y la derecha
# strlen() longitud de un string
# substr() extraemos texto
# strtoupper() pasamos a mayúsculas
# strtolower() pasamos a minúsculas
# strpos() posición / índice de una parte de la cadena

$nombreProfe = "                Xurxo            ";
//con las funciones trim() y strlen() indícame el número de caracteres que tiene tu profesor

$nombreProfe = trim($nombreProfe);
$numeroCaracteres = strlen($nombreProfe);
echo "El profesor tiene ".$numeroCaracteres." caracteres.";

//crea dos variables y extrae los valores del nombre por un lado y los apellidos por otro:
//funciones útiles: strlen, strpos, substr, trim
$nombreCompleto	=" Alejandro González Tenreiro";

$nombreCompleto = trim($nombreCompleto);
$espacio = strpos($nombreCompleto, " ");
$nombre = substr($nombreCompleto, 0, $espacio);
$apellidos = substr($nombreCompleto, $espacio + 1);

echo "Nombre: " . $nombre . "<br>";
echo "Apellidos: " . $apellidos;

?>