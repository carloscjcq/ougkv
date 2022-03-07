<?php
//seguridad de sessiones paginacion

session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if ($varsesion== null || $varsesion='') {
    header("location: iniciarsesion.php");
    die();
}


 ?>
 <?php 
require("conexionpdo.php");
$response = $conexion->prepare("SELECT * FROM nacionalidad");
$response->execute();
?>

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
      <h1>Bienvenido <br><?php echo $_SESSION['usuario'];?></h1>
  </div>
</div>
<!--FIN PORTADA-->
</header>
<div class="container mt-5 mb-5">
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        LISTADO DE ATLETAS
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <?php  
      require("mostrar/atletas.php");
      ?>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button btn btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        CALENDARIO
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <?php  
        require("mostrar/eventos.php");
        ?>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        RESULTADOS POR EVENTOS
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <?php  
        require("mostrar/resultados.php");
        ?>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button btn btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
        <!--indice-->
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> 

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button btn btn-warning collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <!--Accordion Item #5-->
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        


      </div>
    </div>
  </div>

  

</div>

</body>
</html>