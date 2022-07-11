<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Persona</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
	<!--Nombre de la categoria-->
	<div class="mb-3">
  	<label for="nom_persona" class="form-label">Nombre: </label>
  	<input type="text" class="form-control" id="nom_persona" placeholder="Luis Paulo" name="nom_persona" pattern="[A-Za-z]{20}"required>
	</div>
    <!-- apellido numero 1 -->
    <div class="mb-3">
  	<label for="apellido1" class="form-label">Apellido 1: </label>
  	<input type="text" class="form-control" id="apellido1" placeholder="Calderon" name="apellido1" pattern="[A-Za-z]{20}"required>
	</div>
    <!-- apellido numero 2-->
    <div class="mb-3">
  	<label for="apellido2" class="form-label">Apellido 2: </label>
  	<input type="text" class="form-control" id="apellido2" placeholder="Calderon" name="apellido2" pattern="[A-Za-z]{20}"required>
    <!-- telefono -->
    <div class="mb-3">
  	<label for="telefono" class="form-label">Apellido 1: </label>
  	<input type="text" class="form-control" id="telefono" placeholder="323-129-0260" name="telefono" pattern="[0-9]{20}"required>

	<!--Boton-->
	<div class="d-grid gap-2 col-6 mx-auto">
  		<button type="submit" class="btn btn-secondary">Guardar</button>
	</div>
</form>
<?php
	$registro = new Controlador();
	$registro -> registroPersonaControlador();
?>