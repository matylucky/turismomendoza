<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 
 
 
} else {
   echo "Inicia Sesion para acceder a este contenido.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
   header('Location: https://turismomendoza.herokuapp.com/login.html');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion
exit;
}
//$usuarios = $_POST['usuarios'];
 
$now = time();
if($now > $_SESSION['expire']) {
session_destroy();
header('Location: https://turismomendoza.herokuapp.com/login.html');//redirige a la página de login, modifica la url a tu conveniencia
echo "Tu sesion a expirado,
<a href='login.html'>Inicia Sesion</a>";
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Servicios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>    
		<span class="icon-bar"></span> 		
      </button>
      <a class="navbar-brand" href="#"> <p><?php echo  $_SESSION['usuario'];?></p></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index2.php">Inicio</a></li>
        <li><a href="#">Reservas</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="contacto2.php">Contacto</a></li>
		<li class="active"><a href="#">Servicios</a></li>
      </ul>
              </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>
<h3>Servicios</h3>
<img src="https://i.ibb.co/RQL4C6H/Bus-Mercedes-Benz-Sprinter.jpg" alt="Van">
<h3>Horarios:</h3>
<h3>Lunes a Viernes, salidas a las 8hs y regreso a las 17hs</h3>
<h3>Sabados y Domingos, salidas a las 7hs y regreso a las 16hs</h3>
</body>
</html>
