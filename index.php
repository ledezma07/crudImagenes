<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PRINCIPAL</title>
	<link rel="stylesheet" type="text/css" href="estilos/css/bootstrap.min.css">
</head>
<body>
	<div class="container">	
		<div class="row">
			<?php
			include("cabecera.php");
			 ?>
		</div>
		<div class="row"><h1>LISTA DE  PERSONAS</h1></div>
		<div class="row">
		<form action="frm_reg_persona.php">
			<input type="submit" value ="REGISTRAR" class="btn btn-danger">
			
		</form>	
		<form action="frm_login.php">
			<input type="submit" value ="GUARDAR" class="btn btn-dark">
		</form>	

		<form action="frm_productos.php">
			<input type="submit" value ="PRODUCTOS" class="btn btn-dark">
		</form>	



		BOTON REGISTRAR</div>
		<div class="row">
		<table class="table">	
		<thead>	
			<tr>	
				<td>Nª</td>
				<td>CI:</td>
				<td>NOMBRES:</td>
				<td>EMAIL</td>
				<td>PASSWORD</td>
				<td>AVATAR</td>
			</tr>
		</thead>
<?php 
include("conexion.php");
$conn =conectar();
$sqlSelect = "SELECT * FROM users";
$consulta =mysqli_query($conn,$sqlSelect);
$lista = mysqli_fetch_object($consulta);
$i=0;
do
{
	$i++;

?>

		<tbody>	
			<tr>	
				<td>1</td>
				<td>123</td>
				<td>RUTH ANABEL LIMACHI TAQUICHIRI</td>
				<td>rut123@gmail.com</td>
				<td>12345678</td>
				<td>asdgadfhgadfg.jpg</td>
				<td>	
					<a href="#" class="btn btn-primary "><img src="iconos/update.png" width="25px" alt=""></a>
					<a href="#" class="btn btn-danger "><img src="iconos/delete.png" width="25px" alt=""></a>
				</td>
			</tr>
		</tbody>

<?php

}while($lista = mysqli_fetch_object($consulta));
?>
	</table>
		</div>
		<div class="row">PIE DE PAGINA</div>
	</div>

	<table>	
		<thead>	
		</thead>

		<tbody>	
		</tbody>
	</table>


</body>
</html>