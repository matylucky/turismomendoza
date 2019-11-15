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
  <title>Alta de moviles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
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
      </button>
      <a class="navbar-brand" href="#"> <p><?php echo  $_SESSION['usuario'];?></p> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="admin.php">Inicio</a></li>
        <li class="active"><a href="#">Moviles</a></li>
        <li><a href="viajes.php">Reservas</a></li>
	
        <li><a href="destinos.php">Destinos</a></li>
	<li><a href="paquetes.php">Paquetes</a></li>
      </ul>
             </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>

<div class="w3-container w3-teal">
  <h2>Formulario de alta de móviles</h2>	
</div>  

   <form class="form-horizontal" action="registrar-movil.php" method="post">


    <div class="form-group">
      <label class="control-label col-sm-2" for="patente">Patente</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" maxlength="7" placeholder="Ingrese patente" name="patente" id="patente" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pax">Capacidad de pasajeros:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" maxlength="2" id="pax" name="pax" placeholder="Ingresar número" required onkeypress="solonumeros(event);">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Alta reserva</button>
        </div>
    </div>	
	  

</form>	 

<div class="container" id=gral>
        <div class="jumbotron">
<div class="w3-container w3-teal">
  <h2>Listado de móviles</h2>	
</div>         
		<font color="blue"> <b> <?php include('repmov.php');?></b></font>
         
        </div>
</div>
						     
<div class="container" id=gral>
        <div class="jumbotron">
<div class="w3-container w3-teal">
  <h2>Ubicación de móvil</h2>	
</div>         
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.2915528392073!2d-68.84291688421517!3d-32.890458976377346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e091a2f8805c3%3A0xa38e6a62298a1d76!2sPaseo%20Sarmiento%2C%20Capital%2C%20Mendoza!5e0!3m2!1ses-419!2sar!4v1573848039162!5m2!1ses-419!2sar" width="1020" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>         
        </div>
</div>
			
						     
<!--	<a href="reporte-movil.php" class="btn btn-info btn-lg" role="button">Reporte de buses</a>-->


<footer class="container-fluid text-center">
Modulo de Administración proporcionado por MSP
</footer>




<script>function solonumeros(e)
			    {
		 var key = window.event ? e.which : e.keyCode;
				if(key < 48 || key > 57)
				    e.preventDefault();
			    }
</script>
	

</body>
</html>
