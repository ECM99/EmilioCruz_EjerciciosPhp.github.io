<!--Ejercicio 5.(6,7). Mostrar en la página los números del 1 al 100.
(Utilizando for, while y do while)-->

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 7 </title>
  </head>
  <body>
  <?php
    $i = 1;
    do {
      echo $i;
      echo "<br>";
      $i++;
    } while ($i <= 100);
     ?>
  </body>
</html>
