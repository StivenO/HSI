<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<center>
		<h1> .: Editar un Usuario :. </h1>
	</center>


	<div class="container">

	<hr>

	<a href="../usuarios.php" class="btn btn-secondary float-right">volver</a>
	<br>
	<br>

	<?php

		require '../conexion/conexion.php';

		$id = $_GET['iduser'];
		$sql = "SELECT * FROM personas WHERE id = $id";
		$result = $con->query( $sql );
		$persona = $result->fetch_assoc();

		$sql = "SELECT * FROM ciudades";
		$result = $con->query( $sql );

		if ($_POST) {
			$nom = $_POST['nom'];
			$tel = $_POST['tel'];
			$dir = $_POST['dir'];
			$fec = $_POST['fec'];
			$ciu = $_POST['ciu'];

			$sql = "UPDATE personas
					SET nombre = '$nom', telefono = '$tel', direccion = '$dir', fecha_nacimiento = '$fec', ciudad_id = '$ciu'
					WHERE id = $id";

			$result = $con->query($sql);

			if ($result)
				header('location: index.php');
			else
				echo "Error!!!..." . $con->error;

		}

	?>

	<form method="POST" style="width: 500px;">

		<label for="">Nombre</label>
		<input class="form-control" name="nom" value="<?= $persona['nombre'] ?>">
		<br>
		<label for="">Teléfono</label>
		<input class="form-control" name="tel" value="<?= $persona['telefono'] ?>">
		<br>
		<label for="">Dirección</label>
		<input class="form-control" name="dir" value="<?= $persona['direccion'] ?>">
		<br>
		<label for="">Fecha Nac.</label>
		<input class="form-control" name="fec" type="date" value="<?= $persona['fecha_nacimiento'] ?>">
		<br>

		<label for="">Ciudad</label>
		<select name="ciu" class="form-control" required>
			<option value="" disabled selected>Selecione...</option>
			<?php
			while ($ciudad = $result->fetch_assoc() ) {
				if( $ciudad['id'] == $persona['ciudad_id'])
					echo "<option selected value='".$ciudad['id']."'>".$ciudad['nombre']."</option>";
				else
					echo "<option value='".$ciudad['id']."'>".$ciudad['nombre']."</option>";
			}
			?>
		</select>
		<br>

		<hr>


		<input class="btn btn-primary" type="submit">
		<a href="index.php" class="btn btn-secondary"> Cancelar</a>

	</form>


</body>
</html>
