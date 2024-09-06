<div class="container">
<div class="row">
	<?php 
	include("cabecera.php");
	?>
</div>
<div class="row">
	<div class="col-3"></div>
	<div class="col-6">
		<h3>Formulario de Registro de Person</h3>
		<hr>
		<form action="reg_persona.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
			<label class="form-label" for="txt_ci">CI:</label>
			<input class="form-control" type="text" name="txt_ci" id= "txt_ci">
			</div>	
			<div class="mb-3">
			<label class="form-label" for="txt_apellidos">NOMBRES:</label>
			<input class="form-control" type="text" name="txt_nombres" id= "txt_nombres">
			</div>	
			<div class="mb-3">
			<label class="form-label" for="txt_nombres">EMAIL:</label>
			<input class="form-control" type="email" name="txt_email" id= "txt_email">
			</div>	
			<div class="mb-3">
			<label class="form-label" for="txt_nombres">PASSWORD:</label>
			<input class="form-control" type="password" name="txt_password" id= "txt_password">
			</div>
			<div class="mb-3">
			<label class="form-label" for="txt_nombres">AVATAR:</label>
			<input class="form-control" type="file" name="txt_avatar" id= "txt_avatar">
			</div>
			<input type="submit" class="btn btn-primary">
		</form>

		
	</div>
	<div class="col-3"></div>	
</div>	
</div>