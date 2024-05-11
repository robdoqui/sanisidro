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
       // header("Location: /prueba2/login.html");	
    $archivo = "/xampp/htdocs/prueba2/salida/" . "portada" . ".pdf";
	echo $archivo . "<br>";

    if (file_exists($archivo)) {
        header('Content-Type: application/pdf');
        readfile($archivo);
    } else {
        echo 'El archivo no existe'. "<br>";
    }	   
?>

</body>
</html>