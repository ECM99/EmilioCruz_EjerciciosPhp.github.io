<!--
Generar un valor aleatorio entre 1 y 100, luego
imprimir en la página desde 1 hasta el valor generado (de uno en uno)
-->

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 8 </title>
  </head>
  <body>
  <?php
    $num = rand(1, 100);
    echo "<h1>Numero Ramdom Generado: $num</h1>";
    for ($i=1; $i <= $num ; $i++) {
      echo $i;
      echo "<br>";
    }
     ?>
  </body>
</html>
