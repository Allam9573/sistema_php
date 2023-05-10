<?php
include("db_1.php");
$id = $_GET['id'];
$sql = "SELECT estado FROM productos WHERE id='$id'";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $datos = $resultado->fetch_assoc();
    
    // Acceder al valor booleano
    $es_activo = (bool) $datos['estado'];

//verifica el valor y de acuerdo a eso se elimina en caso de ser falso y sino se muestra una pagina explicando porque no se puedo eliminar
    if ($es_activo) {
        include("includes/eliminado_fail.php");
    } else {
        include("includes/eliminado_exitoso.php");
        $resultado = $conn->query("DELETE FROM productos WHERE id='$id'");
    }
} else {
    echo "No se han encontrado resultados";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>