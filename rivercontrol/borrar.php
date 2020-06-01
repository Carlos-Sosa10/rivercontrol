<?php
include("conexion.php");
include("menu.html");
$id=$_GET['id'];

$solicitud="DELETE  FROM datos WHERE ID=$id";
$resultado=mysqli_query($conexion,$solicitud);
header("location:tabla.php");

?>