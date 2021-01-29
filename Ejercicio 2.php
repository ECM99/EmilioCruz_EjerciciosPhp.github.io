<!--Ejercicio 2. Mostrar un mensaje que diga que el sitio se
encuentra disponible si la fecha es menor o igual a 10,
en caso contrario mostraremos un mensaje de sitio fuera
de servicio. -->

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 2 Mostrar mensaje</title>
  </head>
  <body>
    <?php
      $dia = date('d');
      if ($dia <= 10) {
        echo "<h1> Sitio Activo </h1>";
      }else {
        echo "<h1> Sitio FUERA DE SERVICIO </h1>";
      }
     ?>
  </body>
</html>
