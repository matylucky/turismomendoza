<?php 
//include('conexion.php');
//Recibo id de vehiculo
	 $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");

$id = $_GET['PAQ_ID'];
//Consulto la tabla reserva2 por id de vehiculo
$sqltipo="SELECT * FROM reserva2 where PAQ_ID=".$id;
$consultatipo = mysql_query($sqltipo);
//devuelvo el resultado
while($filatipo = mysql_fetch_array($consultatipo)){ 
			 "<option>" echo $filatipo['PAQ_FECHA2'] "</option>"
} ?>
