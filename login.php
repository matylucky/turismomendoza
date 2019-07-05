//<?php 
	require_once('usuario.php');
	require_once('crud_usuario.php');
	require_once('conexion.php');



	//inicio de sesion
	session_start();

	$usuario=new Usuario();
	$crud=new CrudUsuario();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la petición
	if (isset($_POST['registrarse'])) {
		$usuario->setNombre($_POST['usuario']);
		$usuario->setClave($_POST['pas']);
		if ($crud->buscarUsuario($_POST['usuario'])) {
			$crud->insertar($usuario);
			header('Location: index.php');
		}else{
			header('Location: error.php?mensaje=El nombre de usuario ya existe');
		}		
		
	}elseif (isset($_POST['entrar'])) { //verifica si la variable entrar está definida
		$usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pas']);
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		if ($usuario->getId()!=NULL) {
			$_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
			header('Location: cuenta.php'); //envia a la página que simula la cuenta
		}else{
			header('Location: error.php?mensaje=Tus nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
		}
	}elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: index.php');
		unset($_SESSION['usuario']); //destruye la sesión
	}
?>


//<?php 
//	session_start();
//	unset($_SESSION['usuario']);
//?>
//<!DOCTYPE html>
//<html>
//<head>
//	<title></title>
//	<meta name="viewport" content="width=device-width, initial-scale=1">
//	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
//</head>
//<body>
//<header>
//	<div class="w3-container w3-teal w3-center">
//		<h1>BIENVENIDO A LOGIN</h1>
//	</div>
//</header>


//<footer>
//	<div class="w3-container w3-black">
//		<h4>Turismo Mendoza 2019</h4>
//	</div>
//</footer>
//</body>
//</html>
