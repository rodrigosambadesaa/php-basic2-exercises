<?php
# if (condicion){
# 	// Instrucciones
# }
# 
# Operadores de comparacion:
# 
# == Igualdad
# < Menor que
# > Mayor que
# <= Menor o igual que
# >= Mayor o igual que
# != Diferente
# ! Negacion
# 
# */


# Operadores de logicos:

# && - Evalua que se cumpla una de las dos condiciones
# ||, OR - Evalua que se cumpla al menos una condicion


# if else
# $verdadero = true;
# $mes = 'Enero';
# 
# if ($verdadero) {
  # 	echo "Verdadero";
  # } else {
    # 	echo "Falso";
    # }
    # 
# if ($mes == 'Diciembre') {
# 	echo "Feliz Navidad";
# } else if($mes == 'Enero'){
  # 	echo "Feliz Año Nuevo";
# } else if ($mes == 'Julio'){
# 	echo "Feliz Julio";
# } else {
  # 	echo "El mes que pusiste no tiene celebracion";
  # }
  
  
  //Crea la estructura de una web en el que se ha de guardar en una variable llamada edad. 
  // Esta variable se encontrará en control de formulario con el mismo nombre.
  // Si el usuario es mayor de edad se mostrará el mensaje "Bienvenido a esta web", en caso contrario un mensaje conforme a que es menor de edad y no puede visitar el sitio. La edad se ha de cargar mediante un formulario
  // $_REQUEST, $_POST, $_GET para capturar el envío del formulario
  // isset() — Determina si una variable está definida y no es null
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="script1condicionales.php" method="post">
      <input type="text" name="edad" placeholder="Introduce tu edad">
      <input type="submit" value="Enviar">
  </body>
  </html>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['edad']) && !empty($_POST['edad'])) {
        $edad = $_POST['edad'];
        if ($edad >= 18) {
          echo "Bienvenido a esta web";
        } else {
          echo "Eres menor de edad, no puedes visitar esta web";
        }
      } else {
        echo "No has introducido tu edad";
      }
    }
  ?>

  