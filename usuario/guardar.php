<?php

	require '../conexion/conexion.php';

	$tipoid = $_POST['tipoid'];
	$numid = $_POST['numid'];
	$nomuser = $_POST['nomuser'];
	$apeuser = $_POST['apeuser'];
	$emailuser = $_POST['emailuser'];
	$nick = $_POST['nick'];
	$pass = $_POST['pass'];


	$sql = "INSERT INTO user
				VALUES(null, '$numid', '$nomuser', '$apeuser', '$emailuser', '$nick', '$pass', '1', '1', null)";

	$result = $con->query( $sql );

	if ($result) {
		// echo "Registro insertado exitosamente!!!";
		header('location: ../clientes.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>
