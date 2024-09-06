<div class="container">
<div class="row">
	<?php 
	include("cabecera.php");
	?>
</div>
<div class="row">
	<div class="col-3"></div>
	<div class="col-6">
		<h3>Formulario de Autentificacion</h3>
		<hr>
		<form action="reg_login.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
			<label class="form-label" for="txt_ci">USUARIO:</label>
			<input class="form-control" type="text" name="txt_ci" id= "txt_ci">
			</div>	
			<div class="mb-3">
			<label class="form-label" for="txt_apellidos">PASSWORD:</label>
			<input class="form-control" type="password" name="txt_password" id= "txt_password">
			</div>				
			<input type="submit" class="btn btn-primary" value="INGRESAR">
            <a href="index.php"class="btn btn-danger" >CANCELAR</a>
		</form>		
	</div>
	<div class="col-3"></div>	
</div>	
</div>

