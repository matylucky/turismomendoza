<!-- 
Creado por Luisetfree & tecnosetfree
Web: http://luisetfree.over-blog.es
Facebook:https://www.facebook.com/tecnosetfree/
Twitter: @tecnosetfree
Apoyanos con tus visitas y comentarios en nuestras redes sociales para seguir avanzando y traer contenido de calidad.

 -->
<?php
session_start();
?>

<?php

include 'conexion.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
//$email = $_POST['USU_USUARIO']
$password = $_POST['password'];
$usuario = $_POST['usuario'];
 
//$sql = "SELECT * FROM $tbl_name WHERE USU_EMAIL = '$email'";
$sql = "SELECT * FROM $tbl_name WHERE USU_EMAIL = '$username'";
//$sql = "SELECT * FROM $tbl_name WHERE USU_NOMBRE = '$usuario'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
if ($password==$row['USU_PASS']) { 

 
    $_SESSION['loggedin'] = true;
   $_SESSION['username'] = $username;
    $_SESSION['usuario'] = $row['USU_NOMBRE'];
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['usuario'];
    //echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    //header('Location: https://turismomendoza.herokuapp.com/panel-control.php');//redirecciona a la pagina del usuario
    header('Location: https://turismomendoza.herokuapp.com/testcarr2.php');//redirecciona a la pagina del usuario

	
 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>
