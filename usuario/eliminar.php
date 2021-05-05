<?php 
	
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM personas WHERE id = $id";
	
	$result = $con->query( $sql );

	if ($result) {
		header('location: index.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>