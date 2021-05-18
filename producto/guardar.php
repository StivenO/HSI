<?php

	require '../conexion/conexion.php';

	$nomproduct = $_POST['nomproduct'];
	$description = $_POST['description'];
	$stockmin = $_POST['stockmin'];
	$pricein = $_POST['pricein'];
	$quantity = $_POST['quantity'];
	$priceout = $_POST['priceout'];
	$unit_id = $_POST['unit_id'];
	$category_id = $_POST['category_id'];

	$sql = "INSERT INTO product
				VALUES(null, '$nomproduct', '$description', '$stockmin', '$pricein', '$quantity', '$priceout', '$unit_id', '$category_id')";

	$result = $con->query( $sql );

	if ($result) {
		// echo "Registro insertado exitosamente!!!";
		header('location: ../productos.php');
	}else{
		echo "Error!!!..." . $con->error;
	}

?>
