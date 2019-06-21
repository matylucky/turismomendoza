<?php 
	require_once('conexion.php');
	require_once('usuario.php');
	
	class CrudUsuario{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO USUARIO VALUES(NULL, NULL, NULL, NULL, NULL, :USU_EMAIL, NULL, :USU_PASS, NULL,)');
			$insert->bindValue('USU_EMAIL',$usuario->getUSU_EMAIL());
			//encripta la clave
			$pass=password_hash($usuario->getUSU_PASS(),PASSWORD_DEFAULT);
			$insert->bindValue('USU_PASS',$pass);
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerUsuario($USU_EMAIL, $USU_PASS){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIO WHERE USU_EMAIL=:USU_EMAIL');//AND clave=:clave
			$select->bindValue('USU_EMAIL',$USU_EMAIL);
			$select->execute();
			$registro=$select->fetch();
			$USU_EMAIL=new usuario();
			//verifica si la clave es conrrecta
			if (password_verify($USU_PASS, $registro['USU_PASS'])) {				
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['Id']);
				$usuario->setNombre($registro['USU_EMAIL']);
				$usuario->setClave($registro['USU_PASS']);
			}			
			return $usuario;
		}

		//busca el nombre del usuario si existe
		public function buscarUsuario($USU_EMAIL){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIO WHERE USU_EMAIL=:USU_EMAIL');
			$select->bindValue('USU_EMAIL',$USU_EMAIL);
			$select->execute();
			$registro=$select->fetch();
			if($registro['Id']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
	}
?>
