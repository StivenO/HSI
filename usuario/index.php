<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link rel="stylesheet" href="plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="plugins/buttons/css/buttons.bootstrap4.min.css">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>


</head>
<body>

	<center>
		<h1> .: Contactos :. </h1>
	</center>


	<div class="container">

	<hr>

	<a href="crear.php" class="btn btn-primary float-right">Nuevo</a>
	<br>
	<br>
			
	<?php 
		require 'conexion.php';
		$sql = "SELECT personas.*, ciudades.nombre AS ciudad FROM personas 
					INNER JOIN ciudades ON ciudades.id = personas.ciudad_id";
		$result = $con->query( $sql );

		// $datos = $result->fetch_assoc();

		echo "<div class='table-responsive'>
			  <table class='table table-hover table-striped table-bordered table-sm'>
				<thead>
				  <tr>
				  	<th>ID</th>
				  	<th>NOMBRE</th>
				  	<th>TELÉFONO</th>
				  	<th style='width:300px'>DIRECCIÓN</th>
				  	<th>FECHA NAC.</th>
				  	<th>CIUDAD</th>
				  	<th>ACCIONES</th>
				  </tr>
				</thead>
				<tbody>";
		while ($datos = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>". $datos['id'] ."</td>"; 	
			echo "<td>". $datos['nombre'] ."</td>"; 	
			echo "<td>". $datos['telefono'] ."</td>"; 	
			echo "<td>". $datos['direccion'] ."</td>"; 	
			echo "<td>". $datos['fecha_nacimiento'] ."</td>"; 	
			echo "<td>". $datos['ciudad'] ."</td>"; 	
			
			echo "<td> 
					<a href='editar.php?id={$datos['id']}' class='btn btn-warning'> Editar</a>	
					<a href='eliminar.php?id={$datos['id']}' onclick='return confirm(\"Está seguro de eliminar este registro?\")' class='btn btn-danger'> Eliminar</a> 
				 </td>"; 	

			echo "</tr>";	
		}
		echo "</tbody></table></div>";

	?>

	</div>

	<script src="plugins/jquery.js"></script>
	<!-- <script src="plugins/datatables/js/jquery.dataTables.min.js"></script> -->
	<!-- <script src="plugins/datatables/js/dataTables.bootstrap4.min.js"></script> -->
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.bootstrap4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.js"></script>

	<script>
		
		$('table').dataTable({
			language: {
            	url: 'plugins/datatables/lang/Spanish.json'
        	},
	        dom: 'Bfrtip',
	        buttons: [
	            {
		            extend :    'excelHtml5',
		            text :      '<i class="fas fa-file-excel">',
		            titleAttr:  'Exportar a excel',
		            className : 'btn btn-success btn-lg',
		            filename :  'Reporte de personas',
		            exportOptions: 
		            {
		                columns: 	[0, 1,2,3,4,5]
		            }
		          },
		          {
		            extend :   'pdfHtml5',
		            text :      '<i class="fas fa-file-pdf">',
		            titleAttr:  'Exportar a PDF',
		            className : 'btn btn-danger btn-lg',
		            filename :  'Reporte de personas',
		            exportOptions: 
		            {
		                columns: [0, 1,2,3,4,5]
		            }
		          },
		          {
		            extend :   'print',
		            text :      '<i class="fas fa-print">',
		            titleAttr:  'Imprimir',
		            className : 'btn btn-info btn-lg',
		            filename :  'Reporte de personas',
		            exportOptions: 
		            {
		                columns: [0, 1,2,3,4,5]
		            }
		          },
		        ]
	    });

	</script>

</body>
</html>