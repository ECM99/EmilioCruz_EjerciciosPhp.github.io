<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina de ejercicios PHP</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>

    <header>
      <img src="imagenes/LogoTNM.png" id="Logo-left">
      <h3>
        TECNOLOGICO NACIONAL DE MÉXICO <br>
        INSTITUTO TECNOLOGICO DE TUXTEPEC
      </h3>
      <h2>Ejercicios PHP</h2>
      <h1>Emilio Cruz Mendiola</h1>
      <h3>
        Ingenieria en Sistemas Computacionales <br>
        7mo Semestre - Grupo "A"
      </h3>
      <img src="imagenes/LogoITTUX.jpg" id="Logo-right">
    </header>

    <section id="fondoParte2">

      <div id="num1" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 1</b></p>
        <?php
          $tes = $_SERVER[‘REQUEST_URI’];
          echo $tes;
        ?>
      </div>

      <div id="num2" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 2</b></p>

      </div>

      <div id="num3" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 3</b></p>

      </div>

      <div id="num4" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 4</b></p>

      </div>

      <div id="num5" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 5</b></p>

      </div>

      <div id="num6" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 6</b></p>

      </div>

      <div id="num7" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 7</b></p>

      </div>

      <div id="num8" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 8</b></p>

      </div>

      <div id="num9" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 9</b></p>

      </div>

      <div id="num10" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 10</b></p>

      </div>

      <div id="num11" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 11</b></p>

      </div>

      <div id="num12" class="ejercicioSECCION">
        <p class="TituloEjer"><b>EJERCICIO 12</b></p>
        <div id="contenedor">

        </div>
      </div>

      <center>
        <a href="index.html" class="BotonEjercicio" >Volver</a>
      </center>

    </section>

  </body>
</html>
