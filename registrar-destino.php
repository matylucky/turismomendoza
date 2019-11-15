<?php

include 'conexion.php';
 
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

$query = "INSERT INTO $tbl_destinos (DES_NOMBRE, DES_DESCRIPCION, DES_FOTO) VALUES ('$_POST[destino]', '$_POST[descripcion]', '$_POST[foto]')";


 if ($conexion->query($query) === TRUE) {
 
 echo "<h3>" . "Se realizo el alta del destino: " . $_SESSION['usuario'] . "</h3>" . "\n\n";
 echo "<h3>" .  "<a href='admin.php'>Inicio</a>" . "</h3>"; 
 
 }
 else {
 echo "Error al crear un movil." . $query . "<br>" . $conexion->error; 
   }
 //}
 mysqli_close($conexion);
?>
