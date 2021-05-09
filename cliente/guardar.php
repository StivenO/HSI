<?php

	require '../conexion/conexion.php';

	$typeid_id = '1';
	$numid = $_POST['numid'];
	$nomperson = $_POST['nomperson'];
	$apeperson = $_POST['apeperson'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];

	$sql = "INSERT INTO person
				VALUES(null, '1', '$numid', '$nomperson', '$apeperson', '$address', '$phone', '1', null)";

	$result = $con->query( $sql );

	if ($result) {
		// echo "Registro insertado exitosamente!!!";
		header('location: ../clientes.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>
