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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de reservas</title>
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
   #fecha1 {display:none;}
   #fecha2 {display:none;}
   #fecha3 {display:none;}
   #fecha1l {display:none;}
   #fecha2l {display:none;}
   #fecha3l {display:none;}
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
        <li><a href="#">Moviles</a></li>
        <li class="active"><a href="viajes.php">Reservas</a></li>
      </ul>
             </button> <a class="navbar-brand navbar-right" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logear Usuario</a><onclick="location.href='index.html'"></li>
      </ul> -->
    </div>
  </div>
</nav>

 <div class="w3-container w3-teal" id=gral>
  <h2>Listado de Las Leñas</h2>	
</div>  
  <div class="w3-container w3-teal" id=fecha1>
  <h2>Las Leñas Fecha 1</h2>	
</div>  
   <div class="w3-container w3-teal" id=fecha2>
  <h2>Las Leñas Fecha 2</h2>	
</div>  
  <div class="w3-container w3-teal" id=fecha3>
  <h2>Las Leñas Fecha 3</h2>	
</div>  

 <div class="container" id=grall>
        <div class="jumbotron">
            
       <font color="blue"> <b> <?php include('lenases.php');?></b></font>
         
        </div>
  
        <a href="javascript:document.getElementById('fecha1').style.display='block';javascript:document.getElementById('fecha1l').style.display='block';
       document.getElementById('gral').style.display='none';document.getElementById('grall').style.display='none';
       document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';
       document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none'; void0" class="btn btn-info btn-lg" role="button">Fecha 1</a>

       <a href="javascript:document.getElementById('fecha2').style.display='block'; javascript:document.getElementById('fecha2l').style.display='block';
       document.getElementById('gral').style.display='none'; document.getElementById('grall').style.display='none';
       document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
       document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none'; void0" class="btn btn-info btn-lg" role="button">Fecha 2</a>

       <a href="javascript:document.getElementById('fecha3').style.display='block'; javascript:document.getElementById('fecha3l').style.display='block';
       document.getElementById('gral').style.display='none'; document.getElementById('grall').style.display='none';
       document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
       document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';void0" class="btn btn-info btn-lg" role="button">Fecha 3</a>       

  </div>
    <div class="container" id=fecha1l>
        <div class="jumbotron">
            
       <font color="blue"> <b> <?php include('lenasesf1.php');?></b></font>
         
        </div>
  
          
        <a href="javascript:document.getElementById('gral').style.display='block'; javascript:document.getElementById('grall').style.display='block';
        document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
        document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';
        document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none';void0" class="btn btn-info btn-lg" role="button">Viñedos todas fechas</a>

        <a href="javascript:document.getElementById('fecha2').style.display='block'; javascript:document.getElementById('fecha2l').style.display='block';
        document.getElementById('gral').style.display='none'; document.getElementById('grall').style.display='none';
        document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
        document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none'; void0" class="btn btn-info btn-lg" role="button">Fecha 2</a>

        <a href="javascript:document.getElementById('fecha3').style.display='block'; javascript:document.getElementById('fecha3l').style.display='block';
        document.getElementById('gral').style.display='none'; document.getElementById('grall').style.display='none';
        document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
        document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';void0" class="btn btn-info btn-lg" role="button">Fecha 3</a>

    </div>

    <div class="container" id=fecha2l>
        <div class="jumbotron">
            
       <font color="blue"> <b> <?php include('lenasesf2.php');?></b></font>
         
        </div>
  
        <a href="javascript:document.getElementById('gral').style.display='block'; javascript:document.getElementById('grall').style.display='block';
        document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
        document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';
        document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none';void0" class="btn btn-info btn-lg" role="button">Viñedos todas fechas</a>

        <a href="javascript:document.getElementById('fecha1').style.display='block';javascript:document.getElementById('fecha1l').style.display='block';
        document.getElementById('gral').style.display='none';document.getElementById('grall').style.display='none';
        document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';
        document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none'; void0" class="btn btn-info btn-lg" role="button">Fecha 1</a>

        <a href="javascript:document.getElementById('fecha3').style.display='block'; javascript:document.getElementById('fecha3l').style.display='block';
        document.getElementById('gral').style.display='none'; document.getElementById('grall').style.display='none';
        document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
        document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';void0" class="btn btn-info btn-lg" role="button">Fecha 3</a>
    </div>

    <div class="container" id=fecha3l>
        <div class="jumbotron">
            
       <font color="blue"> <b> <?php include('lenasesf3.php');?></b></font>
         
        </div>
  
          <a href="javascript:document.getElementById('gral').style.display='block'; javascript:document.getElementById('grall').style.display='block';
          document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
          document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';
          document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none';void0" class="btn btn-info btn-lg" role="button">Viñedos todas fechas</a>

          <a href="javascript:document.getElementById('fecha1').style.display='block';javascript:document.getElementById('fecha1l').style.display='block';
          document.getElementById('gral').style.display='none';document.getElementById('grall').style.display='none';
          document.getElementById('fecha2').style.display='none'; document.getElementById('fecha2l').style.display='none';
          document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none'; void0" class="btn btn-info btn-lg" role="button">Fecha 1</a>

          <a href="javascript:document.getElementById('fecha2').style.display='block'; javascript:document.getElementById('fecha2l').style.display='block';
          document.getElementById('gral').style.display='none'; document.getElementById('grall').style.display='none';
          document.getElementById('fecha1').style.display='none'; document.getElementById('fecha1l').style.display='none';
          document.getElementById('fecha3').style.display='none'; document.getElementById('fecha3l').style.display='none'; void0" class="btn btn-info btn-lg" role="button">Fecha 2</a>
          
    </div>

    <a href="admin.php" class="btn btn-info btn-lg" role="button">Volver</a>
 

</body> 
</html>
