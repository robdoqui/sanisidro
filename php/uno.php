<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css "href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    <title> Gastos Comunes San Isidro 45</title>
</head>

<body>
    <h1>    </h1>
<?php
    session_start();
    echo "departamento " . $_SESSION["datos"];
       // header("Location: /prueba2/login.html");	
    $archivo = "/xampp/htdocs/prueba2/salida/" . $_SESSION['datos'] . ".pdf";
	echo $archivo . "<br>";
	unset($_SESSION["datos"]);	

    if (file_exists($archivo)) {
        header('Content-Type: application/pdf');
        readfile($archivo);
    } else {
         ?> <script language="JavaScript">alert("No existe este archivo");window.location.href="/prueba2/index.html"</script>"; <?php	   
    }

?>
	<p class="mt-3">Por Favor, Vuelva al Inicio presionando Continuar <a href="/prueba2/index.html">Continuar</a></p>
</body>
</html>