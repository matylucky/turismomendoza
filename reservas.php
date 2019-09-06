<?php
include("encabezado2.php"); //incluimos el archivo logotipo.php


include 'conexion.php';
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
//$username = $_POST['username'];
//$email = $_POST['USU_USUARIO']
//$password = $_POST['password'];
//$usuario = $_POST['usuario'];
//$mail = $_POST['mail'];
$dni = $_POST['dni'];
$tel = $_POST['tel'];
$mail2 = $_POST['mail'];
 
//$sql = "SELECT * FROM $tbl_name WHERE USU_EMAIL = '$email'";
//$sql = "SELECT * FROM $tbl_name WHERE USU_EMAIL = '$username'";
$sql = "SELECT * FROM $tbl_name2 WHERE USU_EMAIL = '$mail'";
//$sql = "SELECT * FROM $tbl_name WHERE USU_NOMBRE = '$usuario'";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {     }
	 $row = $result->fetch_array(MYSQLI_ASSOC);

    $_SESSION['pasajero'] = $row['PAS_NOMBRE'];
    $_SESSION['mail2'] = $row['RES_EMAIL'];
    $_SESSION['dni2'] = $row['PAS_DNI'];
mysqli_close($conexion); 


?>


<!DOCTYPE html>
<html lang="en">
<body>
    <h3>Reservas</h3>
    <h3>aca se veran las reservas realizadas</h3>
      <p><?php echo  $_SESSION['usuario'];?></p>
    <p><?php echo  $_SESSION['pasajero'];?></p>
    <p><?php echo  $_SESSION['mail'];?></p>
    <p><?php echo  $_SESSION['dni2'];?></p>

</body>
</html>
