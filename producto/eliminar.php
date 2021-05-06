<?php
  require '../conexion/conexion.php';
// resive datos

  $idproduct = $_GET['idproduct'];

// Eliminar datos

  $sql = "DELETE FROM product WHERE idproduct = $idproduct";

  $result = $con->query( $sql ); //envia a conexion

  if ($result) {
    header("Location: ../productos.php");
  }else {
    echo " Error al eliminar datos !" . $con->error;
  }

 ?>
