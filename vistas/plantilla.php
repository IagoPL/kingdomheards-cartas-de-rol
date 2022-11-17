<?php
session_start(); //TODO: arreglar esto
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>practica</title>

  <!-- #font awesome #-->
  <script src="https://kit.fontawesome.com/8877593f2a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--# boostrap #-->
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="/proyectos/kingdomheards/vistas/css/style.css">

</head>

<body>


  <!-- logo -->
  <div class="container-fluid">

    <!-- TODO: mirar donde rediriguir esto, por ahora est en atk por facilidad para las puebas -->
    <div class="logo-space">
      <a href="index.php?pagina=combate.ataque">
        <img src="vistas\img\logo.png" alt="Kingdom Heards" class="logo align" div>
      </a>
    </div>


    <!-- TODO comprobar si es combate o inverntario y poner el active doble -->
    <div class="container-fluid bg-secondary nav-bar">
      <div class="container">
        <ul class="nav nav-justified py2 nav-pills">


          <?php if (($_GET["pagina"] == "combate.ataque" || $_GET["pagina"] == "combate.magia" || $_GET["pagina"] == "combate.objetos" || $_GET["pagina"] == "error404")) : ?>


            <?php if (($_GET["pagina"]) == "combate.ataque") : ?>

              <li class="nav-item">
                <a class="nav-link active  active_l text-dark" href="index.php?pagina=combate.ataque">ATAQUE</a>
              </li>

            <?php else : ?>

              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?pagina=combate.ataque">ATAQUE</a>
              </li>


            <?php endif ?>

            <?php if (($_GET["pagina"]) == "combate.magia") : ?>

              <li class="nav-item">
                <a class="nav-link active active_c text-dark" href="index.php?pagina=combate.magia">MAGIA</a>
              </li>

            <?php else : ?>

              <li class="nav-item">
                <a class="nav-link text-light " href="index.php?pagina=combate.magia">MAGIA</a>
              </li>


            <?php endif ?>

            <?php if (($_GET["pagina"]) == "combate.objetos") : ?>

              <li class="nav-item">
                <a class="nav-link active active_r text-dark" href="index.php?pagina=combate.objetos">OBJETOS</a>
              </li>

            <?php else : ?>

              <li class="nav-item">
                <a class="nav-link text-light" href="index.php?pagina=combate.objetos">OBJETOS</a>
              </li>

            <?php endif ?>




            <!-- GET: $GET[variable] son variables que se pasan como parametros a traces de una URL
        cuendo es la primera variable se marca con ? el inicio
        para concatenar mas se hacen con & -->
          <?php elseif (($_GET["pagina"] == "combate.ataque" || $_GET["pagina"] == "combate.magia" || $_GET["pagina"] == "combate.objetos" || $_GET["pagina"] == "error404")) : ?>





          <?php else : ?>
            <!-- en este caso no muestra nada -->
          <?php endif ?>

        </ul>
      </div>
    </div>



  </div>



  <div class="container-fluid">
    <div class="container py-5">
      <?php

      // isset() determina si una variable esta definida y no es null

      if (isset($_GET["pagina"])) {

        if (

          $_GET["pagina"] == "inicio" ||
          $_GET["pagina"] == "registro" ||
          $_GET["pagina"] == "menu" ||
          $_GET["pagina"] == "combate.objetos" ||
          $_GET["pagina"] == "combate.magia" ||
          $_GET["pagina"] == "combate.ataque" ||
          $_GET["pagina"] == "vacio" ||
          $_GET["pagina"] == "inventario.objetos" ||
          $_GET["pagina"] == "inventario.magia" ||
          $_GET["pagina"] == "inventario.ataque"


        ) {
          include "vistas/paginas/" . $_GET["pagina"] . ".php";
        } else {

          include "vistas/paginas/error404.php";
        }
      } else {
        include "vistas/paginas/inicio.php";
      }

      ?>
    </div>
  </div>


</body>

</html>