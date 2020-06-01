<?php
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$medidas=$_POST['medidas'];
$cantidad=$_POST['cantidad'];
$id=$_POST['id'];

include("conexion.php");

$solicitud=UPDATE datos SET Nombre='$nombre',Descripcion='$descripcion',Medidas='$medidas',Cantidad='$cantidad' WHERE id=$id";

$resultado=mysqli_query($conexion,$solicitud);
header("location:tabla.php");

?>