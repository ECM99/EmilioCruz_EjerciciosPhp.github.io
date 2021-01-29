<!--Ejercicio 3. Hacer un programa que retorne un
valor aleatorio entre un rango de dos enteros, muestre
por pantalla al valor generado. Mostrar además si es
menor o igual a 50 o si es mayor-->

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 3 </title>
  </head>
  <body>
  <?php
    $num = rand(1, 100);
    echo "<h1> El numero generado es: <strong>$num</strong></h1>";
    echo "<br>";
    if ($num <= 50) {
      echo "<h1> El numero es menor o igual a 50</h1>";
    }else{
      echo "<h1> El numero es mayor a 50</h1>";
    }
     ?>
  </body>
</html>
