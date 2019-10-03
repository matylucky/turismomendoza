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

<?php 
  // Devuelve todas las filas de una consulta a una tabla de una base de datos 
  // en forma de tabla de HTML 
  function sql_dump_result($result) 
  { 
    $line = ''; 
    $head = '';
	
  while($temp = mysql_fetch_assoc($result)) 
  { 
    if(empty($head)) 
    { 
      $keys = array_keys($temp); 
      $head = '<tr><th>' . implode('</th><th>', $keys). '</th></tr>'; 
    }
	
    $line .= '<tr><td>' . implode('</td><td>', $temp). '</td></tr>'; 
  }
  
  return '<table>' . $head . $line . '</table>'; 
}

  // Se conecta al SGBD 
  if(!($iden = mysql_connect("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d"))) 
    die("Error: No se pudo conectar");
    
    
    // Selecciona la base de datos 
  if(!mysql_select_db("heroku_06e2145fb0a0577", $iden))
    die("Error: No existe la base de datos"); 
	
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM buses"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $iden); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

  // Muestra el contenido de la tabla como una tabla HTML	
  echo sql_dump_result($resultado); 
  
  // Libera la memoria del resultado
  mysql_free_result($resultado);

  // Cierra la conexión con la base de datos 
  mysql_close($iden); 
?> 	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alta de moviles</title>
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
      </ul>
             </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>

  
<h2>Formulario de alta de móviles</h2>	
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
