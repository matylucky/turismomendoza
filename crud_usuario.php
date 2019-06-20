<?php 
	require_once('conexion.php');
	require_once('usuario.php');
	
	class CrudUsuario{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO usuarios VALUES(NULL,:USU_EMAIL, :USU_CONTRASEÑA)');
			$insert->bindValue('USU_EMAIL',$usuario->getNombre());
			//encripta la clave
			$pass=password_hash($usuario->getClave(),PASSWORD_DEFAULT);
			$insert->bindValue('clave',$pass);
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerUsuario($USU_EMAIL, $USU_CONTRASENA){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE USU_EMAIL=:USU_EMAIL');//AND clave=:clave
			$select->bindValue('USU_EMAIL',$USU_EMAIL);
			$select->execute();
			$registro=$select->fetch();
			$USU_EMAIL=new usuario();
			//verifica si la clave es conrrecta
			if (password_verify($USU_CONTRASENA, $registro['USU_CONTRASEÑA'])) {				
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['Id']);
				$usuario->setNombre($registro['USU_EMAIL']);
				$usuario->setClave($registro['USU_CONTRASEÑA']);
			}			
			return $usuario;
		}

		//busca el nombre del usuario si existe
		public function buscarUsuario($USU_EMAIL){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE USU_EMAIL=:USU_EMAIL');
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
