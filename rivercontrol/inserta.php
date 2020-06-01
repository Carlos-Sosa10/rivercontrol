<?php
include("conexion.php");

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$medidas=$_POST['medidas'];
$cantidad=$_POST['cantidad'];

$solicitud="INSERT INTO datos(Nombre,Descripcion,Medidas,Cantidad) VALUES('$nombre','$descripcion','$medidas','$cantidad') ";

$resultado=mysqli_query($conexion,$solicitud);

<div id="not0" class="modal" align=center display="block">
		<p>Nuevo registro exitoso</p>
		<button id="bot1">OK</button>
		</div>";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		?>
        
        <script type="text/javascript">
		document.getElementById("bot1").onclick = function () {
        location.href = "tabla.php";
    };
	</script>


