<?php 
//include('conexion.php');
//Recibo id de vehiculo
	 $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");

$id = $_GET['DEST'];
//Consulto la tabla reserva2 por id de vehiculo
$sqltipo="SELECT * FROM reserva2 where PAQ_ID=".$id;
$consultatipo = mysqli_query($sqltipo, $mysqli);
//devuelvo el resultado
while($filatipo = mysqli_fetch_array($consultatipo)){ 
			echo "<option>" . $filatipo['PAQ_FECHA'] . "</option>";
} ?>
