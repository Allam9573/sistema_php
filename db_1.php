<?php
// Credenciales de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sistema";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>