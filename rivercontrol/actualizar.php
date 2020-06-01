<?php
include("conexion.php");
$id=$_GET['id'];

$solicitud="SELECT * FROM datos WHERE ID=$id";
$resultado=mysqli_query($conexion,$solicitud);

?>

<form method="POST" action="actualizar2.php">
	<?php
 while ($fila=mysqli_fetch_array($resultado)){
 	echo "Nombre: <input type='text'; name='nombre' value=' ".$fila['Nombre']."'> <br> ";
 	echo "Descripcion: <input type='text'; name='descripcion' value=' ".$fila['Descripcion']."'> <br> ";
 	echo "Medidas: <input type='text'; name='medidas' value=' ".$fila['Medidas']."'> <br> ";
 	echo "Cantidad: <input type='text'; name='cantidad' value=' ".$fila['cantidad']."'> <br> ";
    echo "<input type='hidden' name='id' value='".$id."'><br> ";
}
?>

<input type="submit" name="ENVIAR" value="CAMBIAR">
</form>

