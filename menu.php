<?php  

  session_start();
  //COMPRUEBA LA EXITENCIA Y EL TIPO DE USUARIO
  if (isset($_SESSION['usuario'])) {
    
  } else{
    header("Location:index.php");
  }

  include 'conexion.php';
  $result = mysqli_query($conexion,"SELECT * FROM `temas` WHERE 1");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
  <link rel="stylesheet" type="text/css" href="CSS/menu.css">
  <link rel="shortcut icon" href="CSS/favicon.ico" type="image/x-icon" />
</head>
<body>
  <div class="fondo">
  <?php include 'nav.php';?>
  </div>
  <br>
  <h1 style="margin-left: 20px;">Matemáticas:</h1>
  <div class="box-class">

    <?php  

    while ($mostrar= mysqli_fetch_array($result)) {

   ?>

    <div class="boxes">
      <center><a href="tema.php?roger=<?php  echo $mostrar['id_temas'] ?>"><h2><?php   echo utf8_encode($mostrar['nombre']); ?></h2></a>
        <div class="progress" style="width:80%;">
          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </center>
    </div>

    <?php  

      }

   ?>


  </div>
  <br>
  <h1 style="margin-left: 20px;">Próximamente:</h1>
  <div class="box-class">
    <div class="boxes">
      <center><h2>Próximamente</h2></center>
    </div>
    <div class="boxes">
      <center><h2>Próximamente</h2></center>
    </div>
    <div class="boxes">
      <center><h2>Próximamente</h2></center>
    </div>
    <div class="boxes">
      <center><h2>Próximamente</h2></center>
    </div>
  </div>
  <br>
</body>
</html>
