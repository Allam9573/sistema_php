<?php
// include("db_1.php");
// $id = $_GET['id'];
// $sql = "SELECT * FROM productos WHERE id='$id'";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_query($query);
include("db_1.php");
$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$resultado = mysqli_query($conn, $sql);
// Verificamos si se obtuvieron registros
if (mysqli_num_rows($resultado) > 0) {
    // Creamos un arreglo para almacenar los registros obtenidos
    $registros = array();
    
    while($fila = mysqli_fetch_assoc($resultado)) {
      // Agregamos el registro al arreglo
      $registros[] = $fila;
    }
  } else {
    echo "No se encontraron registros";
  }
  
  // Cerramos la conexión a la base de datos
  mysqli_close($conn);
?>
<?php include("includes/header.php") ?>
 <div class="vw-100 vh-100 d-flex flex-column justify-content-center align-items-center">
<div class="card" style="width: 30rem">
    <div class="card-header text-center">
        <h3>Editar Producto</h3>
    </div>
    <div class="card-body">
    <?php foreach ($registros as $registro): ?>
        <form action="update_product.php" method="POST">
            <input type="hidden" name="id" value="<?=$registro['id']?>">
            <div class="form-group">
                <input type="text" name="nombre" id="" value="<?=$registro['nombre']?>" class="form-control my-2" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="descripcion" value="<?=$registro['descripcion']?>" placeholder="Descripcion del producto..." />
            </div>
            <div class="form-group">
                <input type="text" name="precio" id="" value="<?=$registro['precio']?>" class="form-control my-2" placeholder="Precio">
            </div>
            <div class="form-check my-2">
                <label class="form-check-label" for="flexCheckChecked">
                    Activo
                </label>
                <input class="form-check-input" name="estado" type="checkbox" value="<?=$registro['estado']?>" id="flexCheckChecked">
            </div>
            <input type="submit" value="Actualizar" class="btn btn-primary my-2" name="submit">
        </form>
        <?php endforeach; ?>
        <a href="index.php"><button class="btn btn-outline-primary">Atras</button></a>
    </div>
</div>
 </div>
