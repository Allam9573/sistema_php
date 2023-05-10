<?php
include 'db_1.php';

// Recuperar los valores del formulario
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
}
// Insertar los valores en la tabla
$sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

if ($conn->query($sql) === TRUE) {
  include("includes/registro_exitoso.php");
} else {
  include("includes/error_registro.php");

}

$conn->close();
?>
