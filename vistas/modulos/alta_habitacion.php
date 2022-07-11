<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Habitacion</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
	<!--Nombre de la Habitacion-->
	<div class="mb-3">
  	<label for="num_camas" class="form-label">Numero de camas: </label>
  	<input type="text" class="form-control" id="num_camas" placeholder="" name="num_camas" pattern="[0-9]"required>
	</div>
	<!--Boton-->
	<div class="d-grid gap-2 col-6 mx-auto">
  		<button type="submit" class="btn btn-secondary">Guardar</button>
	</div>
</form>
<?php
	$registro = new Controlador();
	$registro -> registroHabitacionControlador();
?>