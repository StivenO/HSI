<?php

	require '../conexion/conexion.php';

	$tipoid = $_POST['tipoid'];
	$numid = $_POST['numid'];
	$nomuser = $_POST['nomuser'];
	$apeuser = $_POST['apeuser'];
	$rol_id = $_POST['rol_id'];
	$emailuser = $_POST['emailuser'];
	$nick = $_POST['nick'];
	$pass = $_POST['pass'];


	$sql = "INSERT INTO user
				VALUES(null, '$tipoid','$numid', '$nomuser', '$apeuser', '$emailuser', '$nick', '$pass', '1', '$rol_id', null)";

	$result = $con->query( $sql );

	if ($result) {
		// echo "Registro insertado exitosamente!!!";
		header('location: ../usuarios.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>
