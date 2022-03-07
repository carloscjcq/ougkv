<?php
//seguridad de sessiones paginacion

session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if ($varsesion== null || $varsesion='') {
    header("location: iniciarsesion.php");
    die();
}

require("conexion.php");
require("conexionpdo.php");

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
              <a class="nav-link active" aria-current="page" href="admin.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="administracion.php">Administracion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pagos.php">Control de pagos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="planificacion.php">Planificacion</a>
            </li>
          </ul>
          <div class="d-flex col justify-content-center " style="text-align: center;">
            <span class="navbar-text">
            TEN EL ORGULLO DE PRACTICAR GOJU
            </span>
          </div>
          <a href="cerrarsesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
      </div>
    </nav>
<!--fin barra de navegacion-->

<!--PORTADA-->
<div class="cover d-flex justify-content-center align-items-center flex-column" style="background-image: url(img/oss.jpg);">
  <div class="container mt-5 mb-5">
      <h1>VAMOS A EDITAR EL LOS RESULTADOS LA INSCRIPCION <br><?php echo $_GET['id'];?></h1>
  </div>
</div>
<!--FIN PORTADA-->
</header>


<?php  
require("conexion.php");
$id_resultado = $_GET["id"];
$participante = "SELECT * FROM `gkuv`.`participantes_eventos` WHERE `id` = '$id_resultado'";
?>

<div class="container-fluid mt-5 mb-5">
    
    <form action="procesar_resultado.php" method="POST" class="form-control" style="align-content: center;text-align: center;">
    <?php  
    $resultado = mysqli_query($conexion, $participante);
    while ($row=mysqli_fetch_assoc($resultado)) { ?>
      <div class="d-flex container">

        <label class="btn-warning">ID</label>
        <input type="text" readonly onmousedown="return false;" name="id" id="id" value="<?php echo $row["id"] ?>">

        <label class="btn-warning">EVENTO</label>
        <input type="text" readonly onmousedown="return false;" name="id_evento" id="id_evento" value="<?php echo $row["id_evento"] ?>">

        <label class="btn-warning">ATLETA</label>
        <input type="text" readonly onmousedown="return false;" name="id_atleta" id="id_atleta" value="<?php echo $row["id_atleta"] ?>">
        
      </div>

  <div class="d-flex container mt-1 mb-1">
    <label class="btn-warning">KATA</label>
  <select name="resultado_kata" id="resultado_kata" class="form-select">
    <option value="0">PARTICIPO</option>
    <option value="1">🥇</option>
    <option value="2">🥈</option>
    <option value="3">🥉</option>
  </select>
  <label class="btn-warning">KUMITE</label>
  <select name="resultado_kumite" id="resultado_kumite" class="form-select">
    <option value="0">PARTICIPO</option>
    <option value="1">🥇</option>
    <option value="2">🥈</option>
    <option value="3">🥉</option>
  </select>

  <input type="textarea" name="descripcion" autocomplete="off" id="descripcion" placeholder="COMENTARIO DEL COACH">
  <br>
  </div>





            <?php } mysqli_free_result($resultado); ?>
    <br>
    <button type="submit" class="btn btn-success" name="enviar">ACTUALIZAR</button>

    </form>

</div>

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