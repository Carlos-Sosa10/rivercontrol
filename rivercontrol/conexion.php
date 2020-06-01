<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$servidor = "localhost;
$usuario= "c66riverside";
$contrasena="HillRiv@1129";
$bd="c66riverside";
$caracteres="utf8";

$conexion =mysqli_connect($servidor,$usuario,$contrasena,$bd);
mysqli_set_charset($conexion,$caracteres);

if ($conexion ===FALSE){
	echo("la base de datos tiene problemas de conexion, por favor verifique con el administrador de sistemas" .mysqli_connect_error() ." ".mysqli_connect_error());
    }else{
    echo("Si se conecto y funciona");
}
?>