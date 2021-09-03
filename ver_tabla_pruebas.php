<!DOCTYPE html>
<html>
<head>
<!-- <META HTTP-EQUIV="Refresh" CONTENT="10"> -->
	<!-- CSS TABLE/MAIN CSS -->

	<link rel="stylesheet" type="text/css" href="total/css_table/main.css">

	<title>-registros Fontana Viamonte </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>

$(document).ready(function()
{
	setInterval(function(){
	$("#btn").click();
}, 8000);
});
	</script>
</head>

<!-- TERMINA HEAD -->
<!-- EMPIEZA BODY -->

<center>

	<body>

<!-- NAV BAR -->

		<header>

			<ul class="nav">
				<li class="liLeft"><a href="admin_pruebas.php">Inicio</a></li>
				<li class="liLeft"><a href="formulario_producto.php">Registrar Productos</a></li>
				<li class="liRight"><a href="#about">About</a></li>
				<li class="liLeft active">
					<form target="_self" method="post" action="ver_tabla_pruebas.php" style="height: 46px;">
						<input id="TABLA" name="TABLA" type="hidden" value="productos">
						<button id="btn" style=" margin: 0px; width: 200px; height:46px; color:white " type="submit" onclick="javascript: form.action='ver_tabla_pruebas.php';">Ver Registros</button>
					</form>
				</li>
			</ul>
		</header>

<!-- CLEAR FLOATS -->

		<div class="clearFloats">
		</div>

<!-- TABLA VENTAS -->

		<div class="content">
			<div class="container">
				<div class='wrap-table100'>
					<div class='table100 ver1 m-b-110'>
						<table data-vertable='ver1'>
						<div class="logoB">
						<div class="divLogo">
								<h2 class="h2Logo">VENTAS MOSTRADOR - FONTANA VIAMONTE </h2>
						</div>

							<thead id="tabla">
								<tr class='row100 head'>
									<th class='column100 column1'>
										<center class="numero">Nº</center>
									</th>
									<th class='column100 column2' data-column='column2'>
										<center class="producto">PRODUCTO</center>
									</th>
									<th class='column100 column3' data-column='column3'>
										<center>VENDEDOR</center>
									</th>
									<th class='column100 column4' data-column='column4'>
										<center>FECHA INGRESO</center>
									</th>
									<th class='column100 column5' data-column='column5'>
										<center>ID</center>
									</th>
									
								</tr>
							</thead>
							<tbody>


								<?php
								require('conectar.php');
								?>



								<?php
								$tabla = $_POST['TABLA'];
								$sql = "SELECT * from `" . $tabla . "` order by id DESC ";
								$result = mysqli_query($con, $sql);
								while ($crow = mysqli_fetch_assoc($result)) {
								?>
									<tr class='row100'>
										<td style='width:10px'>
											<center class="numero"> <?php echo $crow['numero']; ?> </center>
										</td>
										<td class="producto">
											<center class="producto"><?php echo $crow['producto']; ?> </center>
										</td>
										<td>
											<center><?php echo $crow['serie']; ?></center>
										</td>
										<td>
											<center><?php echo $crow['fechaing']; ?></center>
										</td>
										<td>
											<center><?php echo $crow['id']; ?></center>
										</td>
									</tr>
								<?php
								}
								?>

							</tbody>
						</table>

					</div>
				</div>
				<div>
				</div>
			</div>
		</div>
	</body>
</center>
<script>

</script>
</html>