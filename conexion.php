<?php 
	class Db{
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_06e2145fb0a0577','bdaacf63d00d60','565681cb',$pdo_options);
			return self::$conexion;
		}
	}
?>