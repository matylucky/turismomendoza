<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 //$paquete2=($_GET['paquete2']);
 //$fecha=($_GET['fecha']);
//$paquete2= "Hola MUNDO";
include 'conexion.php';
 
 //$form_pass = $_POST['password'];
  
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 /*$buscarUsuario = "SELECT * FROM $tbl_name
 WHERE USU_EMAIL = '$_POST[email]' ";
 //$result = $conexion->query($buscarUsuario);
 //$count = mysqli_num_rows($result);
 //if ($count == 1) {
$result=mysql_query($buscarUsuario); 
$row = mysql_fetch_array($result)
 $ID=$row["USU_ID"];  
 //}
 //else{
*/
// $query = "INSERT INTO $tbl_name2 (USU_ID, ) VALUES ('$_POST[email]')";
$query = "INSERT INTO $tbl_buses (BUS_PATENTE, BUS_CAPACIDAD) VALUES ('$_POST[patente]', '$_POST[pax]')";
//$query = "INSERT INTO $tbl_name2 (PAS_NOMBRE, PAS_DNI, RES_MAIL) VALUES ('$_POST[username]', '$_POST[dni]', '$_POST[email]')";
 // $query = "INSERT INTO $tbl_name2 (USU_ID, PAQ_ID) VALUES ('$_POST["email"]', '$_POST["20"]')";
 if ($conexion->query($query) === TRUE) {
 // header('Location: http://localhost/Login/login.html');
 // echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
 echo "<h3>" . "Se realizo el alta del movil: " . $_SESSION['usuario'] . "</h3>" . "\n\n";
 echo "<h3>" .  "<a href='admin.php'>Inicio</a>" . "</h3>"; 
 
 }
 else {
 echo "Error al crear un movil." . $query . "<br>" . $conexion->error; 
   }
 //}
 mysqli_close($conexion);
?>