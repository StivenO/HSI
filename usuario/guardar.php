<?php 
	
	require 'conexion.php';

	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$dir = $_POST['dir'];
	$fec = $_POST['fec'];
	$ciu = $_POST['ciu'];

	$sql = "INSERT INTO personas 
				VALUES(null, '$nom', '$tel', '$dir', '$fec', '$ciu')";
	
	$result = $con->query( $sql );

	if ($result) {
		// echo "Registro insertado exitosamente!!!";
		header('location: index.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>