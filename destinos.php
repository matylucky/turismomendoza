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
  <title>Alta destinos</title>
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
        <li><a href="movil.php">Moviles</a></li>
        <li><a href="viajes.php">Reservas</a></li>
        <li class="active"><a href="#">Destinos</a></li>
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
  <h2>Formulario de alta de Destinos</h2>	
</div>  

   <form class="form-horizontal" action="registrar-destino.php" method="post">


    <div class="form-group">
      <label class="control-label col-sm-2" for="destino">Destino</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" maxlength="50" placeholder="Ingrese Nombre destino" name="destino" id="destino" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="descripcion">Descripcion del destino:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresar descripcion" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="foto">Foto destino:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="foto" name="foto" placeholder="poner link de la foto" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Alta destino</button>
        </div>
    </div>	
	  

</form>	 

<div class="container" id=gral>
        <div class="jumbotron">
<div class="w3-container w3-teal">
  <h2>Listado de destinos</h2>	
</div>         
		<font color="blue"> <b> <?php include('repdes.php');?></b></font>
         
        </div>
</div>
						     
<div class="container" id=mod>
	<form class="form-horizontal" action="modestado-destino.php" method="post">
	<div class="jumbotron">
		<div class="w3-container w3-teal">
		  <h2>Habilitar de destino</h2>	
		</div>         
			<select class="form-control" id="des" name="des">
				<option>Seleccionar...</option>

					    <?php
				     $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
				  $query = $mysqli -> query ("SELECT DES_NOMBRE FROM destinos");
				  while ($valores = mysqli_fetch_array($query)) {
				   if($valores[DES_ESTADO] != 1 ){
				    echo '<option value="'.$valores[DES_NOMBRE].'">'.$valores[DES_NOMBRE].'</option>';
				   }
				  }
				?>
			</select> 
		<button type="submit" class="btn btn-default" >Habilitar</button>
        </div>
		 
</div>						     
						     
<!--	<a href="reporte-movil.php" class="btn btn-info btn-lg" role="button">Reporte de buses</a>-->


<footer class="container-fluid text-center">
Modulo de Administración proporcionado por MPS
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
