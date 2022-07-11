<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Provincia</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
	<!--Nombre de la categoria-->
	<div class="mb-3">
  	<label for="provincia" class="form-label">Nombre de la provincia</label>
  	<input type="text" class="form-control" id="nombre_provincia" placeholder="malaga" name="nombre_provincia" pattern="[A-Za-z]{30}"required>
	</div>
	<!--Boton-->
	<div class="d-grid gap-2 col-6 mx-auto">
  		<button type="submit" class="btn btn-secondary">Guardar</button>
	</div>
</form>
<?php
	$registro = new Controlador();
	$registro -> registroProvinciaControlador();
?>