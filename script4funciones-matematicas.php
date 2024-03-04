<?php
 # round() Redondeo de un número

 # rand() Obtención de un número aleatorio
 
 # ceil() Redondeo siempre de un número hacia arriba. Fundamental para realzar paginación

 

//obtener un número aleatorio con rand() entre 1 y 100 y decir si es par o no

$numero = rand(1, 100);
if ($numero % 2 == 0) {
    echo "El número " . $numero . " es par";
} else {
    echo "El número " . $numero . " es impar";
}


//a partir de la variable de arriba redondéalo hacia arriba y luego hacia abajo (round y ceil)

echo "<br>";
echo "Redondeo hacia arriba: " . ceil($numero);
echo "<br>";
echo "Redondeo hacia abajo: " . round($numero);

?>

