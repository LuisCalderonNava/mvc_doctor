<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Paciente</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
	<!--Direccion-->
	<div class="mb-3">
  	<label for="direccion" class="form-label">Direccion: </label>
  	<input type="text" class="form-control" id="direccion" placeholder="Nayar #23..." name="direccion" required>
	</div>
    <!-- Fecha de nacimiento -->
    <div class="mb-3">
  	<label for="fecha_nac" class="form-label">Fecha de nacimiento: </label>
  	<input type="date" class="form-control" id="fecha_nac"  name="fecha_nac" required>
	</div>
    <!-- Persona-->
    <div class="mb-3">
	<label for="nom_persona" class="form-label">Nombre persona</label>
	<select class="form-select" aria-label="Default select example" name="nom_persona" id="nom_persona" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaPersonaPacienteControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["codigo_persona"].'">'.$valores["nombre"].'</option>';
	  	}
	  ?>
	</select>
	</div>
    <!-- tPoblacion -->
    <div class="mb-3">
	<label for="poblacion" class="form-label">Poblacion</label>
	<select class="form-select" aria-label="Default select example" name="poblacion" id="poblacion" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaPoblacionControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["cod_poblacion"].'">'.$valores["cp"].'</option>';
	  	}
	  ?>
	</select>
	</div>
	<!--Boton-->
	<div class="d-grid gap-2 col-6 mx-auto">
  		<button type="submit" class="btn btn-secondary">Guardar</button>
	</div>
</form>
<?php
	$registro = new Controlador();
	$registro -> registroPacienteControlador();
?>