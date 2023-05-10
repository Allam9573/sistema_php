function validar(id) {
    var confirmacion = confirm(`¿Estás seguro de que deseas eliminar este producto?`);
    if (confirmacion) {
        window.location.href = `delete_product.php?id=${id}`;
    } else {
        alert("Solicitud de eliminacion cancelada");
    }
}