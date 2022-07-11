<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Medico</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- Consulta Especialidad-->
    <div class="mb-3">
	<label for="especialidad" class="form-label">Especialidad: </label>
	<select class="form-select" aria-label="Default select example" name="especialidad" id="especialidad" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaEspecialidadControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["cod_especialidad"].'">'.$valores["nombre_especialidad"].'</option>';
	  	}
	  ?>
	</select>
	</div>
    <!-- Consulta Personas Medicos  -->
    <div class="mb-3">
	<label for="medico" class="form-label">Medico: </label>
	<select class="form-select" aria-label="Default select example" name="medico" id="medico" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaPersonaMedicoControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["codigo_persona"].'">'.$valores["nombre"].'</option>';
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
	$registro -> registroMedicoControlador();
?>