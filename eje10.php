<!--
[8:25, 21/1/2021] Maestra Angeles: Realice un programa que lea un
 número entero positivo y obtenga e imprima la sucesión de ULAM.
Se llama sucesión de ULAM en honor del matemático S. Ulam:
Comienza con cualquier número entero positivo
Si es par, divídalo entre 2, si es impar multiplíquelo por 3 y agréguele 1.
Obtenga enteros sucesivamente repitiendo el proceso.
[8:25, 21/1/2021] Maestra Angeles: Al final, obtendra el número 1,
independientemente del entero inicial, Por ejemplo, cuando el entero
inicial es 26, la secuencia será: 26,13,40,20,10,5,16,84,2,1.
-->

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 10 </title>
  </head>
  <body>
  <?php
    echo "El nombre ingrsado fue ";
    echo $_REQUEST['nombre'];
    echo "<br>";
    echo "La edad ingrsada fue ";
    echo $_REQUEST['edad'];
    echo "<br>";

    if ($_REQUEST['edad'] >= 18) {
      echo "Es <strong> mayor </strong> de edad";
    }else {
      echo "Es <strong> menor </strong> de edad";
    }
    ?>
  </body>
</html>
