<?php
include("db_1.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $estado = (bool)$_POST['estado'];

if (isset($_POST['estado'])) {
	$estado = 1;
} else {
	$estado = 0;
}

$sql = "UPDATE productos set nombre ='$nombre', descripcion='$descripcion', precio='$precio', estado='$estado' WHERE id='$id'";
echo $estado;
if ($conn->query($sql) === TRUE) {
    include("includes/actualizacion_exitosa.php");
  } else {
    include("includes/error_registro.php");
  
  }
  $conn->close();
?>