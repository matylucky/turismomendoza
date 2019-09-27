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
$mail = $_POST['mail'];
$dni = $_POST['dni'];
$tel = $_POST['tel'];
$mail2 = $_POST['mail2'];

 
//$sql = "SELECT * FROM $tbl_name WHERE USU_EMAIL = '$email'";
$sql = "SELECT * FROM $tbl_name WHERE USU_EMAIL = '$username'";
$sql2 = "SELECT ROL_ID FROM $tbl_name WHERE USU_EMAIL = '$username' AND USU_PASS = '$password'";
//$sql2 = "SELECT * FROM $tbl_name2 WHERE RES_EMAIL = '$mail2'";
//$sql = "SELECT * FROM $tbl_name WHERE USU_NOMBRE = '$usuario'";

$result = $conexion->query($sql2);


if ($result->num_rows > 0) {     }
	

  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
//if($row['ROL_ID'] == "2"){
	
if(mysql_num_rows[$ROL_ID] > 1){
//if (mysql_num_rows($ROL_ID) == 2) {
 //echo "Inicia Sesion para acceder a este contenido.<br>";
   echo "<br><a href='test.php'>Admin</a>";
   //echo "<br><br><a href='index.html'>Registrarme</a>";
   header('Location: https://turismomendoza.herokuapp.com/test.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion

 
}


if ($password==$row['USU_PASS']) { 

 // if ($row['ROL_ID'] = 2 ){
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['usuario'] = $row['USU_NOMBRE'];
    $_SESSION['mail'] = $row['USU_EMAIL'];
    $_SESSION['dni'] = $row['USU_NRO_DOC'];
    $_SESSION['tel'] = $row['USU_TEL'];
    $_SESSION['admin'] = $row['ROL_ID'];
    
    $_SESSION['pasajero'] = $row['PAS_NOMBRE'];
    $_SESSION['mail2'] = $row['RES_EMAIL'];
    $_SESSION['dni2'] = $row['PAS_DNI'];
	
	
	$_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['usuario'];
    //echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    //header('Location: https://turismomendoza.herokuapp.com/panel-control.php');//redirecciona a la pagina del usuario
    header('Location: https://turismomendoza.herokuapp.com/index2.php');//redirecciona a la pagina del usuario
/*	    }
	    if ($row['ROL_ID'] != 2 ){
			 $_SESSION['loggedin'] = true;
   			$_SESSION['username'] = $username;
			$_SESSION['usuario'] = $row['USU_NOMBRE'];
			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

			echo "Bienvenido! " . $_SESSION['usuario'];
			    //echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
			    //header('Location: https://turismomendoza.herokuapp.com/panel-control.php');//redirecciona a la pagina del usuario
			header('Location: https://turismomendoza.herokuapp.com/panel-control.php');//redirecciona a la pagina del usuario
*/	
 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='logeo.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>
