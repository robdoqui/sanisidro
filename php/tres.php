<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css "href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    <title> <h1>Gastos Comunes San Isidro 45</h1></title>
	<style> body{background-image: url("papel4.jpg");}</style>
</head>

<body>
    <div class="container my-3">
    <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8"> 
	<div class="border border-secondary">
<?php 
	session_start();
	$con = new mysqli('localhost', 'root', '', 'sanisidro45');
	$depto1 = $_SESSION['datos'];
	$respuesta = $con->query("SELECT * FROM pagos_depto where depto = '$depto1' order by depto, fecha desc limit 10");
	unset($_SESSION["datos"]);
?>
<table border="2px" class="table table-striped border border-secondary" align="center"> 
	<thead>
	<p>&nbsp&nbsp</p>
	<h5 align="center">Listado de sus Últimos Pagos </h5>	
		<th>Departamento&nbsp</th>
		<th>Num. Boleta&nbsp</th>
		<th>Monto&nbsp</th>	
		<th>Fecha&nbsp</th>
		<th>Mes Gasto Común&nbsp</th>
    </thead>
	
		<?php while($user = mysqli_fetch_array($respuesta)){ ?>
			<tr>
				<td><b><?php echo $user['depto']; ?></b></td>
				<td><b><?php echo $user['num_boleta']; ?></b></td>
				<td><b><?php printf("$%s ", number_format ($user["monto"], 0, ',', '.')); ?></b></td>
				<td><b><?php echo $user['fecha']; ?></td>
				<td><b><?php echo $user['mes_gasto_comun']; ?></b></td>
			</tr>
			<?php }
			?>
			<!-- <p class="mt-3">Por Favor, Vuelva al Inicio presionando Continuar <a href="/prueba2/index.html">Continuar</a></p> -->
			<p class="btn btn-info">Por Favor, Vuelva al Inicio presionando Continuar <a href="/prueba2/index.html" class="btn btn-outline-dark">Continuar</a></p>			
</table>
	<p>&nbsp</p>
    </div>
  </div>
 </div>
</div>
</body>
</html>