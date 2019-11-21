<?php 
//include('conexion.php');
//Recibo id de vehiculo
	 $mysqli = new mysqli("us-cdbr-iron-east-02.cleardb.net", "bdaacf63d00d60", "c1969fe7872181d", "heroku_06e2145fb0a0577");

$id = $_POST['destino'];
//Consulto la tabla reserva2 por id de vehiculo
/*
	$queryM = "SELECT id_municipio, municipio FROM t_municipio WHERE id_estado = '$id_estado' ORDER BY municipio";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Municipio</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";
	}
	
	echo $html;
*/

$html= "<option value='0'>Seleccionar</option>";

$sqltipo = "SELECT * FROM reserva2 where PAQ_ID= '$id'";
$consultatipo = $mysqli->query($sqltipo);
//devuelvo el resultado
while($filatipo = mysqli_fetch_array($consultatipo)){ 
	$html.= "<option value='". $filatipo['PAQ_FECHA2'] ."'>". $filatipo['PAQ_FECHA2'] ."</option>";
			//echo "<option>" . $filatipo['PAQ_FECHA'] . "</option>";
} 
echo $html;
?>
