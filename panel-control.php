<!-- 
Creado por Luisetfree & tecnosetfree
Web: http://luisetfree.over-blog.es
Facebook:https://www.facebook.com/tecnosetfree/
Twitter: @tecnosetfree
Apoyanos con tus visitas y comentarios en nuestras redes sociales para seguir avanzando y traer contenido de calidad.

 -->


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
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Eliminando el subrayado de los links -->
  <style type="text/css"> 
  a:link 
  { 
  text-decoration:none; 
  } 
  </style>

</head>
<body>

<div class="jumbotron text-center">
  <h1>Bienvenido A Turismo Mendoza! </h1>
<!--<h1>Bienvenido < ?php echo  $_SESSION['usuario'];?></h1>-->
  <p><?php echo  $_SESSION['usuario'];?></p> 
<!--<p>A Turismo Mendoza!</p>-->
  <a href=logout.php><button type="button" class="btn btn-success"> Cerrar Sesion</button></a>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <a href=""><h3>Mis Reservas</h3></a>
      <p>Accede a tus reservas para ver el estado de las mismas</p>
    </div>
    <div class="col-sm-5">
      <a href=""><h3>Mi Perfil</h3></a>
      <p>Ver mis datos</p>
    </div>
  </div>

</div>

</body>
</html>
