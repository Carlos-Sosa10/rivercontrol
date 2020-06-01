<?php
$server   ='localhost';
$username ='c66riverside';
$password ='HillRiv@1129';
$database ='c66riverside';

try {
	$conexion=new PDO("mysql:host=$server;dbname=$database;",$username,$password);
}catch (PDOException $error){
	die('conexion fallida: '.$error->getMessage());
}

?>