<?php
require("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/style.css" />

    <title>GOJU RYU KARATE-DO UCHIAGE KAI DE VENEZUELA</title>
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
<header>
<!--mi barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">GKUV</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ubicacion.html">Ubicacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acercade.html">Acerca de</a>
            </li>
          </ul>
          <div class="d-flex col justify-content-center " style="text-align: center;">
            <span class="navbar-text">
            TEN EL ORGULLO DE PRACTICAR GOJU
            </span>
          </div>
          <a href="iniciarsesion.php"><button type="button" class="btn btn-warning">Iniciar sesión</button></a>
        </div>
      </div>
    </nav>
<!--fin barra de navegacion-->

<!--PORTADA-->
<div class="cover d-flex justify-content-center align-items-center flex-column" style="background-image: url(img/fondo.jpg);">
  <h1 style="text-align: center;">GOJU RYU KARATE-DO<br>UCHIAGE KAI DE VENEZUELA</h1>
  <p>ten el orgullo de entrenar goju</p>
  <a href="acercade.html"><button type="button" class="btn btn-dark">Conoce mas</button></a>
</div>
<!--FIN PORTADA-->
</header>
<!--tarjetas de visita -->
 <section>
  <div class="container mt-5 mb-5">
  <div class="row justify-content-center">

    <!--tarejeta #1-->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
      <div class="card">
        <div class="cover cover-small" style="background-image: url(img/sello.png);">
        </div>
        <div class="card-body">
          <h5 class="card-title">EVENTOS</h5>
          <table class="table table-striped table-hover table-bordered">

            <tr>
              <th class="table-info">EVENTO</th>
              <th class="table-info">FECHA</th>
            </tr>
            <?php
              $sql="SELECT * FROM eventos ORDER BY `fecha_i` ASC";
              $result=mysqli_query($conexion,$sql);

              while($mostrar=mysqli_fetch_array($result)){
            ?>



            <tr class="table-warning">
              <td><?php echo $mostrar['descripcion']?></td>
              <td><?php echo $mostrar['fecha_i']?></td>
            </tr>
            <?php
              }
            ?>
          </table>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <!--tarejeta #2-->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
      <div class="card">
        <div class="cover cover-small" style="background-image: url(img/jhosed/jhosed.jpeg);">
        </div>
        <div class="card-body">
          <h5 class="card-title">Karate competitivo</h5>
          <p class="card-text">
            El Kárate deportivo prioriza la velocidad de manos y pies, dado que su competición se basa en un sistema de puntos por tiempo.
          </p>
          <a href="#" class="btn btn-primary">Ver mas</a>
        </div>
      </div>
    </div>

    <!--tarejeta #3-->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
      <div class="card">
        <div class="cover cover-small" style="background-image: url(img/sello.png);">
        </div>
        <div class="card-body">
          <h5 class="card-title">GKUV</h5>
          <p class="card-text">
            EL CAMINO DE LA MANO VACIA
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <!--tarejeta #4-->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
      <div class="card">
        <div class="cover cover-small" style="background-image: url(img/sello.png);">
        </div>
        <div class="card-body">
          <h5 class="card-title">GKUV</h5>
          <p class="card-text">
            EL CAMINO DE LA MANO VACIA
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>
 </section>
<!--fin tarjetas de visita -->


<!--footer-->
<section>
<!-- Footer -->
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Gojuryuvenoficial/" role="button"
        ><i class="fab fa-facebook-f"><img src="img/facebook.png"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/karategojuvzla" role="button"
        ><i class="fab fa-twitter"><img src="img/twitter.png"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"><img src="img/google.png"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/gojuryuven/?hl=es" role="button"
        ><i class="fab fa-instagram"><img src="img/instagram.png"></i
      ></a>

      <!-- youtube -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"><img src="img/youtube.png"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Susbrirse</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Correo electronico</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-warning  mb-4">
              Enviar
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

  
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright: Diseñado y desarrollado por Carlos Contreras
    <a class="text-white" href="#">FGVZLA-0043</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Footer -->
</section>
  </body>
</html>