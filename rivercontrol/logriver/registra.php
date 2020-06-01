<?php
require 'basedatos.php';
$mensaje='';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
$sql = "INSERT INTO login (email,password) VALUES (:email, :password)";
$stmt =$conexion->prepare($sql);
$stmt->bindParam(':email',$_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$stmt->bindParam(':password', $password);

if ($stmt->execute()) {
	$mensaje = 'felicidades se ha creado un nuevo usuario';
}else{
    $mensaje = 'lo siento ocurrio un problema al crear un usuario';
  }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>Registrarse</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body background="p3.jpg">

<?php
 require 'parches/header.php'?>
 <?php
  if (!empty($mensaje)): ?>
  	<p><?php endif; ?>

 <h1>Registrate</h1>
 <span>o <a href="login.php">Iniciar Seccion</a></span>
       
        <form action="registra.php" method="post">
		<input type="text" name="email" placeholder="ingresa tu email"><br>
		<input type="password" name="password" placeholder="Ingresa tu contraseña"><br>
		<input type="password" name="confirma_password" placeholder="Confirma tu contraseña"><br>
		<input type="submit" value="enviar">
</form>

</body>
</html>