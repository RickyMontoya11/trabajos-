<?php
ini_set("display_errors", 1);
if(isset($_POST['nombre_s']))
{
    $nombre = $_POST['nombre_s'];
    $email = $_POST['email_s'];
    $telefono = $_POST['telefono_s'];
}
else{
    header("location:practica1.php?mensaje=1");
}
?>

  