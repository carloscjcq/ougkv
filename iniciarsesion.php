
<!DOCTYPE html>
<html>
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
	<title></title>
</head>
<body style="background-color: black;">
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
        </div>
      </div>
    </nav>
<!--fin barra de navegacion-->

<!--PORTADA-->
<div class="cover d-flex justify-content-center align-items-start flex-column p-5" style="background-image: url(img/seisa.jpg);">
             <!--login-->
          <div>
            <form action="validar.php" method="post">
              <h1>Iniciar Sesion</h1>
               <p><input type="text" autocomplete="off" required placeholder="ingrese su usuario" name="usuario" pattern="[A-Z Ñ \- 0-9]{1,15}" title="Debe ingresar el codigo proporsionado por la organizacion en MAYUSCULAS"></p>
               <p><input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
               <input class="btn btn-warning" type="submit" value="Ingresar">
            </form> 
          </div>
            <!--fin loggin-->
</div>
<!--FIN PORTADA-->
</header>

</div>
</body>
</html>
