<?php 
$servidor= "127.0.0.1";
$usuario= "root";
$clave="";
$base_de_datos="sanisidro45";

$conexion= mysqli_connect($servidor, $usuario, $clave, $base_de_datos);
if (!$conexion){
    die("Coneccion Fallida: " . mysqli_connect_error());
}
?>
