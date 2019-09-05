<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 include 'conexion2.php';
 
 //$form_pass = $_POST['password'];
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 /*$buscarUsuario = "SELECT * FROM $tbl_name
 WHERE USU_NOMBRE = '$_POST[username]' ";
 $result = $conexion->query($buscarUsuario);
 $count = mysqli_num_rows($result);
 if ($count == 1) {
 echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";
 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{
*/
 $query = "INSERT INTO $tbl_name2 (USU_ID, PAQ_ID,) VALUES ('$_POST[username]', '$_POST[paquete2]')";
 $query = "INSERT INTO $tbl_name (PAS_NOMBRE, PAS_DNI) VALUES ('$_POST[username]', '$_POST[dni]')";

 if ($conexion->query($query) === TRUE) {
 // header('Location: http://localhost/Login/login.html');
 // echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
 echo "<h3>" . "Gracias por su reserva: " . $_POST['username'] . "</h3>" . "\n\n";
 echo "<h3>" .  "<a href='index2.php'>Inicio</a>" . "</h3>"; 
 }
 else {
 echo "Error al crear una reserva." . $query . "<br>" . $conexion->error; 
   }
 //}
 mysqli_close($conexion);
?>
