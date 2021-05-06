<?php

	require '../conexion/conexion.php';

	$iduser = $_GET['iduser'];

	$sql = "DELETE FROM user WHERE iduser = $iduser";

	$result = $con->query( $sql );

	if ($result) {
		header('location: .../usuarios.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>
