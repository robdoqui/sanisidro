<?php 
$servidor= "localhost:3306";
$usuario= "root";
$clave="";
$base_de_datos="sanisidro45";

$conexion= mysqli_connect($servidor, $usuario, $clave, $base_de_datos);
if (!$conexion){
    die("Coneccion Fallida: " . mysqli_connect_error());
}
?>