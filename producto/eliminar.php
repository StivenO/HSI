<?php
  require '../conexion/conexion.php';
// resive datos

  $iduser = $_GET['iduser'];

// Eliminar datos

  $sql = "DELETE FROM user WHERE iduser = $iduser";

  $result = $con->query( $sql ); //envia a conexion

  if ($result) {
    header("Location: ../usuarios.php");
  }else {
    echo " Error al eliminar datos !" . $con->error;
  }

 ?>
