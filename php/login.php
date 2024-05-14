<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css "href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    <title> Gastos Comunes San Isidro 45</title>
</head>
<body>
<?php 
require 'conexion.php';
if (isset($_POST['login'])) {
    $depto= $_POST['depto'];	
    $password= $_POST['password'];
    $password1 = sha1($_POST['password']);	
    $sql = "SELECT * FROM datos_depto WHERE depto = '$depto' AND password = '$password1'";
    $resultado= mysqli_query($conexion, $sql);
    $numero_registros = mysqli_num_rows($resultado);
    if ($numero_registros != 0) {
		$row = mysqli_fetch_assoc($resultado);
	    echo 'depto: ' . $row['depto'] . ' cambio : ' . $row['cambio'] . '   '. "<br>";
		if ($row['cambio'] == 0) {
            ?> <script language="JavaScript">alert("Se solicita hacer cambio de password");window.location.href="/prueba2/registro.html"</script>"; <?php
		}
		else {
			session_start();
			$_SESSION["datos"]= $depto;
			echo "valor a pasar " . $_SESSION["datos"] . "<br>";
			header("Location: /https://robdoqui.github.io/php/menu.php");
		}
    }
    else {
		?> <script language="JavaScript">alert("Credenciales Inválidas. Por Favor, verifica tu depto y/o password");window.location.href="/prueba2/index.html"</script>"; <?php
    }
}
?>
</body>
</html>
