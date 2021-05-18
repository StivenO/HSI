<?php
  require '../conexion/conexion.php';
// resive datos

  $idperson = $_GET['idperson'];

// Eliminar datos

  $sql = "DELETE FROM person WHERE idperson = $idperson";

  $result = $con->query( $sql ); //envia a conexion

  if ($result) {
    header("Location: ../clientes.php");
  }else {
    echo " Error al eliminar datos !" . $con->error;
  }

 ?>
