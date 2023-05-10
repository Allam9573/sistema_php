<?php
  include("db_1.php");

  require('./fpdf/fpdf.php');
  
  
  class PDF extends FPDF
  {
    // Cabecera de página
    function Header()
    {
  
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,"Reporte de productos almacen",0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(80,10,'Nombre',1,0,'C',0);
    $this->Cell(50,10,'Precio',1,0,'C',0);
    $this->Cell(30,10,'Fecha Ingreso',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina') .$this->PageNo().'/{nb}',0,0,'C');
}
}
//trae los datos
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $consulta);
// Creación del objeto de la clase heredada
$pdf = new FPDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row=$resultado->fetch_assoc()){
    $pdf->Cell(80,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(50,10,$row['precio'],1,0,'C',0);
    $pdf->Cell(60,10,$row['fecha_ingreso'],1,1,'C',0);

}

$pdf->Output();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>