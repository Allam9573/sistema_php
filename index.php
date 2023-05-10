<?php 
include("db_1.php");

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $sql);
// Verificamos si se obtuvieron registros
if (mysqli_num_rows($resultado) > 0) {
    // Creamos un arreglo para almacenar los registros obtenidos
    $registros = array();
    
    while($fila = mysqli_fetch_assoc($resultado)) {
      // Agregamos el registro al arreglo
      $registros[] = $fila;
    }
  }
  
  // Cerramos la conexión a la base de datos
  mysqli_close($conn);

?>

  
<!doctype html>
<html lang="en">

<?php include("includes/header.php") ?>
   
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="container d-flex flex-column">
                    <a href=""><button type="button" class="btn btn-light">Administrar produtos</button></a>
                    <a href=""><button type="button" class="btn btn-light">Salir</button></a>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <h3 class="m-4">Productos Registrados</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros as $registro): ?>
                        <tr>
                            <th scope="row"><?php echo $registro['id'] ?></th>
                            <td><?php echo $registro['nombre'] ?></td>
                            <td><?php echo $registro['descripcion'] ?></td>
                            <td>Lps. <?php echo $registro['precio'] ?></td>
                            <td>
                            <?php
                                if ($registro['estado'] ==true) { // Comprobar si la edad es mayor o igual a 18
                                ?>
                                    Activo
                                <?php
                                } else {
                                ?>
                                    Desactivado
                                <?php
                                }
                                ?>
                            </td>
                            <td>
                                <a onclick="validar(<?=$registro['id']?>);" class="btn btn-danger">Eliminar</a>
                                <a href="edit_product.php?id=<?=$registro['id']?>" class="btn btn-outline-success">Editar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="container py-3">
                    <a href="register_product.php" class="btn btn-primary">Crear</a>
                    <a href="pdf_details.php" target="__blank" class="btn btn-outline-danger">PDF</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include("includes/footer.php")
    ?>
<script src="./js/index.js"></script>