<?PHP
	//Inicio la sesi�n
	session_start();

	//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
	if ($_SESSION["autentificado"] != "si") {
		//si no existe, se dirige a la P�gina de Inicio
		header("Location: login.php");
	}

?>
