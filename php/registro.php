<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css "href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    <title> Gastos Comunes San Isidro 45</title>
</head>
<?php 
require 'conexion.php';
if (isset($_POST['registro'])) {
    $depto = $_POST['depto'];
    $password= $_POST['password'];
    $password2= $_POST['password2'];
    $password1 = sha1($_POST['password']);	
	echo $password1 . "<br>";
	 $sql = "SELECT * FROM datos_depto WHERE depto = '$depto' AND password = '$password1'";
    $resultado = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($resultado) > 0){
		 echo "en registro primer acceso select correcto" . "<br>";
        // ahora a modificar la password.
		$row = mysqli_fetch_assoc($resultado);
	    echo 'depto: ' . $row['depto'] . ' password : ' . $row['password'] . ' Gasto Comun : ' . $row['gasto_comun'] . '   '. "<br>";
        $password2 = sha1($_POST['password2']);	
		echo $password2 . "<br>";
        $sql = "UPDATE datos_depto SET  password = '$password2', cambio = 1 WHERE depto = '$depto' AND password = '$password1'";
        $resultado1 = mysqli_query($conexion, $sql);
        if ($resultado1) {
			?> <script language="JavaScript">alert("Se Modificaron los datos Correctamente");window.location.href="/prueba2/index.html"</script>"; <?php
            //echo "Se Modificaron los datos Correctamente" . "<br>";
			//header("Location: /prueba2/login.html");
        }
    }
    else {
		?> <script language="JavaScript">alert("Credenciales Inválidas. Por Favor, verifica tu depto y/o password");window.location.href="/prueba2/registro.html"</script>"; <?php
        //echo "intento de acceso erroneo". "<br>";
        //echo "Error : ". $sql . "<br>" . mysqli_error($conexion);
    }
}
?>