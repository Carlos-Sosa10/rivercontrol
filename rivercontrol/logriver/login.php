<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>Iniciar Seccion</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body background="p3.jpg">
	
	<?php
 require 'parches/header.php' ?>
   
   
   <h1>Iniciar Seccion</h1>
   <span> o <a href="registra.php">Registrate</a></span>

<div class="container" id='login'>
	<form action="login.php" method="post">
		<input type="text" name="email" placeholder="ingresa tu email"><br>
		<input type="password" name="password" placeholder="ingresa tu contraseña"><br>
		<input type="submit" value="enviar">
</form>
</body>
</html>