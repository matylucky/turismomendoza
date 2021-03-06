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
  <title>Alta Paquetes</title>
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
        <li><a href="moviles.php">Moviles</a></li>
        <li><a href="viajes.php">Reservas</a></li>
	<li><a href="destinos.php">Destinos</a></li>
        <li class="active"><a href="#">Paquetes</a></li>
      </ul>
             </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>

<div class="w3-container w3-teal">
  <h2>Formulario de alta de Paquetes</h2>	
</div>  

   <form class="form-horizontal" action="registrar-paquete.php" method="post">


    <div class="form-group">
      <label class="control-label col-sm-2" for="destino">Destino</label>
      <div class="col-sm-4">
           <select class="form-control" id="paquete" name="paquete">
	            <option>Seleccionar...</option>

	            <?php
                    $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
                    $query = $mysqli -> query ("SELECT * FROM destinos");
                    while ($valores = mysqli_fetch_array($query)) {
			if($valores[DES_ESTADO] == 1 ){
		    		echo '<option value="'.$valores[DES_NOMBRE].'">'.$valores[DES_NOMBRE].'</option>';
		    	}
		 
          }
        ?>
    </select> 
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fecha">Ingrese fecha del paquete:</label>
      <div class="col-sm-4">
        <input type="date" class="form-control" min="2019-01-02" max="2020-12-31" id="fecha" name="fecha" required>

      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="precio">Precio Paquete:</label>
      <div class="col-sm-4">
        <input type="numbers" class="form-control" id="precio" name="precio" required onkeypress="solonumeros(event);">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="bus">Destino</label>
      <div class="col-sm-4">
           <select class="form-control" id="bus" name="bus">
	            <option>Seleccionar...</option>

	            <?php
                    $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
                    $query = $mysqli -> query ("SELECT * FROM buses");
                    while ($valores = mysqli_fetch_array($query)) {
                    	if($valores[BUS_ESTADO] == 1 ){
			    echo '<option value="'.$valores[BUS_PATENTE].'">'.$valores[BUS_PATENTE].'</option>';
				}
			}
                ?>
            </select> 
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
		<font color="blue"> <b> <?php include('reppaq.php');?></b></font>
         
        </div>
</div>
	    
  <a href="#demo2" class="btn btn-info" data-toggle="collapse">Habilitar paquete</a>
  <a href="#demo" class="btn btn-info" data-toggle="collapse">Deshabilitar paquete</a>
	
	
	
  <div id="demo2" class="collapse">
    <div class="container">						     
<div class="w3-container w3-teal">
  <h2>Habilitación de Paquetes</h2>	
</div>  

   <form class="form-horizontal" action="habilitar-paquete.php" method="post">

	 <select class="form-control" id="habilita" name="habilita">
	            <option>Seleccionar...</option>

	            <?php
                    $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
                    $query = $mysqli -> query ("SELECT * FROM paquetes");
                    while ($valores = mysqli_fetch_array($query)) {
			if($valores[PAQ_ESTADO] == 0 ){
		    		echo '<option value="'.$valores[PAQ_ID].'">'.$valores[DES_ID].',"",'.$valores[PAQ_FECHA].'</option>';
		    	}
		 
          }
        ?>
    </select> 		
	   
	       <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Habilitar destino</button>
        </div>
    </div>	
	   </div> 
</div> 

</form>
	
		    
 
  <div id="demo" class="collapse">
    <div class="container">						     
<div class="w3-container w3-teal">
  <h2>Deshabilitación de Paquetes</h2>	
</div>  

   <form class="form-horizontal" action="deshabilitar-paquete.php" method="post">

	 <select class="form-control" id="nohabilita" name="nohabilita">
	            <option>Seleccionar...</option>

	            <?php
                    $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");
                    $query = $mysqli -> query ("SELECT * FROM paquetes");
                    while ($valores = mysqli_fetch_array($query)) {
			if($valores[PAQ_ESTADO] == 1 ){
		    		echo '<option value="'.$valores[PAQ_ID].'">'.$valores[DES_ID].',"",'.$valores[PAQ_FECHA].'</option>';
		    	}
		 
          }
        ?>
    </select> 		
	   
	       <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Deshabilitar destino</button>
        </div>
    </div>	
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
