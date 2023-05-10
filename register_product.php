<?php include("includes/header.php") ?>
 <div class="vw-100 vh-100 d-flex flex-column justify-content-center align-items-center">
<div class="card" style="width: 30rem">
    <div class="card-header text-center">
        <h3>Registrar Producto</h3>
    </div>
    <div class="card-body">
        <form action="save_product.php" method="POST">
            <div class="form-group">
                <input type="text" name="nombre" id="" class="form-control my-2" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion del producto..."/>
            </div>
            <div class="form-group">
                <input type="text" name="precio" id="" class="form-control my-2" placeholder="Precio">
            </div>
            <input type="submit" value="Registrar" class="btn btn-primary my-2" name="submit">
        </form>
        <a href="index.php"><button class="btn btn-outline-primary">Atras</button></a>
    </div>
</div>
 </div>
