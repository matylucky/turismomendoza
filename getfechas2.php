<? include('conexion.php');
//Recibo id de vehiculo
$id = $_GET['PAQ_ID'];
//Consulto la tabla reserva2 por id de vehiculo
$sqltipo="SELECT * FROM reserva2 where PAQ_ID=".$id;
$consultatipo = mysql_query($sqltipo);
//devuelvo el resultado
while($fila = mysql_fetch_array($consultatipo)){ ?>
			 <option value="<? echo $filatipo['PAQ_FECHA2'] ?>"><? echo $filatipo['PAQ_FECHA2'] ?></option>
<? } ?>
