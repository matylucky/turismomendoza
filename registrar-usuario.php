
<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 include 'conexion.php';
 
 $form_pass = $_POST['USU_PASS'];
 
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM usuario
 WHERE USU_NOMBRE = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO usuario (USU_NOMBRE, USU_PASS) VALUES ('$_POST[username]', '$form_pass')";

 if ($conexion->query($query) === TRUE) {
 // header('Location: http://localhost/Login/login.html');
 echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
 echo "<h3>" . "Bienvenido: " . $_POST['username'] . "</h3>" . "\n\n";
 echo "<h3>" . "Iniciar Sesion: " . "<a href='login.html'>Login</a>" . "</h3>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>
