<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<center>
		<h1> .: Crear un nuevo Usuario :. </h1>
	</center>


	<div class="container">

	<hr>

	<a href="../usuarios.php" class="btn btn-secondary float-right">volver</a>
	<br>
	<br>

	<?php
		require '../conexion/conexion.php';
		$sql = "SELECT * FROM ciudades";
		$result = $con->query( $sql );
	?>

	<form action="guardar.php" method="POST" style="width: 500px;">

		<label for="">Nombre</label>
		<input class="form-control" name="nom">
		<br>
		<label for="">Teléfono</label>
		<input class="form-control" name="tel">
		<br>
		<label for="">Dirección</label>
		<input class="form-control" name="dir">
		<br>
		<label for="">Fecha Nac.</label>
		<input class="form-control" name="fec" type="date">
		<br>

		<label for="">Ciudad</label>
		<select name="ciu" class="form-control" required>
			<option value="" disabled selected>Selecione...</option>
			<?php
			while ($ciudad = $result->fetch_assoc() ) {
				echo "<option value='".$ciudad['id']."'>".$ciudad['nombre']."</option>";
			}
			?>
		</select>
		<br>

		<hr>
		<input class="btn btn-primary" type="submit">
		<a href="index.php" class="btn btn-secondary"> Cancelar</a>


	</form>

	</div>

</body>
</html>
