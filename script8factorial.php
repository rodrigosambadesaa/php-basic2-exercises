<?php

function factorialIterativo($n)
{
    $resultado = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

function factorialConParalelizacion($n)
{
    $mitad = $n / 2;
    $pid = pcntl_fork();
    if ($pid == -1) {
        die('Error al crear el proceso');
    } else if ($pid) {
        return factorialIterativo($mitad);
    } else {
        return factorialIterativo($mitad);
    }
}

function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        if ($n < 10000) {
            return factorialIterativo($n);
        } else {
            return factorialConParalelizacion($n);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="number" name="numero" placeholder="Introduce un número">
        <input type="submit" value="Calcular">

    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['numero'])) {
            $numero = $_GET['numero'];
            echo "El factorial de $numero es " . factorial($numero);
        }
    }
    ?>
</body>

</html>