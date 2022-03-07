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
              <a class="nav-link" href="planificacion.php">Planificar</a>
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
<!--Usuarios-->
      <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingfour">
          <button class="accordion-button btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            REGISTRAR USUARIO
          </button>
        </h2>
        <div id="collapsefour" class="accordion-collapse collapse show" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
<div class="d-flex justify-content-center">
  <form action="usu.php" method="POST">
  <!--insertar usuario -->
    <?php 
    require("conexionpdo.php");
    $a = $conexion->prepare("SELECT * FROM atletas");
    $a->execute();
    ?>
      <select name="usuario" id="usuario" required class="form-select">
        <?php  
        foreach ($a as $r) {
          echo "<option value=".$r[0].">".$r[0]."</option>";}

        ?>
      </select>
  <!--insertar usuario-->

  <input type="text" class="form-control" name="contraseña" id="contraseña" required autocomplete="off" placeholder="Contraseña" pattern="{6-16}" title="La contraseña debe estar compuesta por entre 6-16 caracteres">

  <!--insertar cargo -->
    <?php 
    require("conexionpdo.php");
    $c = $conexion->prepare("SELECT * FROM cargo");
    $c->execute();
    ?>
      <select name="cargo" id="cargo" class="form-select" required>
        <?php  
        foreach ($c as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>
  <!--insertar cargo-->
  <input type="submit" name="registrar">

</form>
  
</div>
          </div>
        </div>
      </div>
<!--Usuarios-->
</div>
      </div>
    </div>
  </div>
</div>
<!--FIN PORTADA-->
</header>

<div class="container mt-5 mb-5">
  <!--manu en el mismo espacio-->
<!--menu-->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        REGISTRAR REPRESENTANTE
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  <h1>Ingresar representante</h1>
  <div class="container mt-5 mb-5">

      <form action="repre.php" method="POST" id="repre">



        <div class="d-flex mb-3">

          <input type="text" class="form-control" name="ci" id="ci" required autocomplete="off" placeholder="Cedula de identidad" pattern="[0-9]{6,10}" title="la cedula debe contener solo numeros y entre 6-10 digitos">

          <input type="text" class="form-control" name="apellidos" id="apellidos" required autocomplete="off" placeholder="Apellidos" pattern="[A-Z ]{1,50}" title="El campo apellido debe estar escrito en MAYUSCULAS, no debe estar vacio ni exceder los 50 caracteres">

          <input type="text" class="form-control" name="nombres" id="nombres" required autocomplete="off" placeholder="Nombres" pattern="[A-Z ]{1,50}" title="El campo nombres debe estar escrito en MAYUSCULAS, no debe estar vacio ni exceder los 50 caracteres">

        </div>

        <div class="d-flex mb-3">

          <input type="text" class="form-control" name="direccion" id="direccion" required autocomplete="off" placeholder="Direccion de habitacion" pattern="[A-Z 0-9 -]{1,50}" title="El campo direccion debe estar escrito en MAYUSCULAS, no debe estar vacio ni exceder los 50 caracteres">

          <input type="text" class="form-control" name="telefono" id="telefono" required autocomplete="off" placeholder="Telefono de contacto" pattern="[0-9]{11}" title="El campo telefono no debe estar vacio y el telefono de contacto debe ser en un formato valido (04XX000000)">

          <input type="email" class="form-control" name="email" id="email" required autocomplete="off" placeholder="Correo electronico" >

        </div>
      

      
      <!--insertar nacionalidad -->
      <div class="d-flex">

        <input type="url" class="form-control" name="ruta_foto" id="ruta_foto" autocomplete="off" placeholder="Ruta de la Foto en el servidor">

        <select name="nacionalidad" id="nacionalidad" class="form-select" required>
        <?php  
        foreach ($response as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
        </select>
      </div>
      
      <!--insertar nacionalidad-->
      <br>
      <input type="submit" name="registrar">

      </form>
  </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        INSCRIBIR ATLETA
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  <div class="container mt-5 mb-5">
    
    <h1>Incribir atleta</h1>

    <form action="atle.php" method="POST">

      <div class="d-flex mb-3">

        <input type="text" class="form-control" name="codigo" id="codigo" required autocomplete="off" placeholder="Codigo" pattern="[A-Z \- 0-9]{1,15}" title="El codigo debe estar compuesto por MAYUSCULAS y tiene un maximo de 15 caracteres">
      </div>

    <div class="d-flex mb-3">

      <input type="text" class="form-control" name="apellidos" required autocomplete="off" id="apellidos" placeholder="Apellidos" pattern="[A-Z Ñ]{1,50}" title="El campo Apellidos debe estar escrito en MAYUSCULAS y no debe contener mas de 50 caracteres">

      <input type="text" class="form-control" name="nombres" required autocomplete="off" id="nombres" placeholder="Nombres"  pattern="[A-Z ]{1,50}" title="El campo nombres debe estar escrito en MAYUSCULAS y no debe contener mas de 50 caracteres">

    <!--insertar nacionalidad -->
    <?php 
    require("conexionpdo.php");
    $n = $conexion->prepare("SELECT * FROM nacionalidad");
    $n->execute();
    ?>
      <select name="nacionalidad" id="nacionalidad" class="form-select">
        <?php  
        foreach ($n as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>
    <!--insertar nacionalidad-->
    </div>

    <div class="d-flex mb-3">
      
      <input type="text" class="form-control" name="ci" autocomplete="off" id="ci" placeholder="Cedula de identidad" required pattern="[A-Z - 0-9]{6,10}" title="la cedula debe contener solo numeros y entre 6-10 digitos">

    <!--insertar sexo -->
    <?php 
    require("conexionpdo.php");
    $s = $conexion->prepare("SELECT * FROM sexo");
    $s->execute();
    ?>
      <select name="sexo" id="sexo" class="form-select">
        <?php  
        foreach ($s as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>
    <!--insertar sexo-->

    <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento">
      
    </div>
    <div class="d-flex mb-3">

      <input type="text" class="form-control" name="telefono" id="telefono" required autocomplete="off" placeholder="Telefono de contacto" pattern="[0-9]{11}" title="El campo telefono no debe estar vacio y el telefono de contacto debe ser en un formato valido (04XX000000)">

      <input type="text" class="form-control" name="direccion" id="direccion" required autocomplete="off" placeholder="Direccion de habitacion" pattern="[A-Z 0-9 -]{1,50}" title="El campo direccion debe estar escrito en MAYUSCULAS, no debe estar vacio ni exceder los 50 caracteres">

    <!--insertar KYU -->
    <?php 
    require("conexionpdo.php");
    $k = $conexion->prepare("SELECT * FROM kyu");
    $k->execute();
    ?>
      <select name="kyu" id="kyu" class="form-select">
        <?php  
        foreach ($k as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>
    <!--insertar KYU-->
    </div>

    <div class="d-flex mb-3">
      <input type="text" class="form-control" name="ruta_foto" id="ruta_foto" autocomplete="off" placeholder="Ruta de foto en el servidor">

    <!--insertar representante -->
    <?php 
    require("conexionpdo.php");
    $repre = $conexion->prepare("SELECT * FROM representantes");
    $repre->execute();
    ?>
      <select name="idrepre" id="idrepre" class="form-select">
        <?php  
        foreach ($repre as $r) {
          echo "<option value=".$r[0].">".$r[0]."</option>";}

        ?>
      </select>
    <!--insertar representante-->

    <!--insertar parentezco-->
    <?php 
    require("conexionpdo.php");
    $p = $conexion->prepare("SELECT * FROM parentezco");
    $p->execute();
    ?>
      <select name="parentezco" id="parentezco" class="form-select">
        <?php  
        foreach ($p as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>
    <!--insertar paremtezco-->
      
    </div>
    <br>
    <input type="submit" name="registrar">

    </form>
    
  </div>      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        REGISTRAR DATOS MEDICOS
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

<form action="dm.php" method="POST">
<div class="d-flex mb-3">
  <!--insertar atleta -->
    <?php 
    require("conexionpdo.php");
    $a = $conexion->prepare("SELECT * FROM atletas");
    $a->execute();
    ?>
      <select name="atleta" id="atleta" class="form-select">
        <?php  
        foreach ($a as $r) {
          echo "<option value=".$r[0].">".$r[0]."</option>";}

        ?>
      </select>
  <!--insertar atleta-->
  
</div>

<div class="d-flex mb-3">
  <input type="number" step="1" min="100" max="250" placeholder="Altura" name="altura" id="altura">

  <input type="number" step="0.01" min="15" max="150" placeholder="Kg" name="peso" id="peso">

  <!--insertar grupo sanguineo -->
    <?php 
    require("conexionpdo.php");
    $s = $conexion->prepare("SELECT * FROM gruposanguineo");
    $s->execute();
    ?>
      <select name="gruposanguineo" id="gruposanguineo" class="form-select">
        <?php  
        foreach ($s as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>
  <!--insertar grupo sanguineo-->

    <input type="text" class="form-control" name="hernia" required autocomplete="off" id="hernia" placeholder="Posee hernia (tipo)">

</div>
<div class="d-flex mb-3">
  <input type="text" class="form-control" name="alergia" required autocomplete="off" id="alergia" placeholder="Posee alergia (tipo)">
  <input type="text" class="form-control" name="discapacidad" required autocomplete="off" id="discapacidad" placeholder="Posee discapacidad (tipo)">
</div>
<input type="submit" name="registrar">
  
</form>

      </div>
    </div>
  </div>
</div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        SUBIR ARCHIVO A NUESTRO SERVIDOR
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <!--subir foto de perfil-->
        <div class="container mt-5 mb-5">
          <h1>Subir foto de atleta</h1>
            <form action="sube.php" method="post" enctype="multipart/form-data">
              <input type="file" name="archivo">
              <br><br>
              <button>subir archivo</button>
            </form>
        </div>
        <!--subir foto de perfil-->
      </div>
    </div>
  </div>
<!--fin manu en el mismo espacio-->
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