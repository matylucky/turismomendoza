<?php 
	class Db{
		private static $conn=null;
		private function __construct(){}

		//public static function conectar(){
		//	$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
		//	self::$conexion=new PDO('mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_06e2145fb0a0577','565681cb','bdaacf63d00d60',$pdo_options);
		//	return self::$conexion;
		public static function conectar(){
		//$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
		$servername = "us-cdbr-iron-east-02.cleardb.net";
		$database = "heroku_06e2145fb0a0577";
		$username = "bdaacf63d00d60";
		$password = "565681cb";
		//Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
		if (!$conn) {
  		  die("Connection failed: " . mysqli_connect_error());
		}
		echo "Conectado";
		mysqli_close($conn);
		}
	}
?>
