<?php

declare(strict_types=1); // con esto podemos tipar los datos en los parámetros de funciones y clases

//crea una función llamada saltoLinea que cada vez que la llamemos realice un salto de línea en html

function saltoLinea()
{
	echo "<br>";
}
?>

<?php
//crea una función que muestre por pantalla un mensaje personaliado como parámetro

function mensajePersonalizado($mensaje)
{
	echo $mensaje;
}

//Modifica la función que viene a continuación para que a partir de un parámetro númerico
//(entre 1 y 7) devuelva el día de la semana correspondiente
function getDia($numero)
{
	$array = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
	return $array[$numero - 1];
}

?>
