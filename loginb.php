<?php
    session_start();
    require 'conexion/conexion.php';

    $nick = $_POST['nick'];
    $pass = $_POST['pass'];

    $sql= "SELECT * FROM user WHERE nick = '$nick' AND pass = '$pass'";

    $result = $con -> query($sql);
    $data = $result->fetch_assoc();

    if ( $result->num_rows > 0 ) {
      $_SESSION["autentificado"]= "si";
      $_SESSION["nomuser"] = $data['nomuser'];
      $_SESSION["nick"] = $data['nick'];
      header ("Location: index.html");
      }else {
        header("Location: login.php?error=si");
      }
 ?>
