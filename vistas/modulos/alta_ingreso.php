<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Ingreso</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <!-- Fecha de Ingreso -->
    <div class="mb-3">
  	<label for="fecha_ingreso" class="form-label">Fecha de nacimiento: </label>
  	<input type="date" class="form-control" id="fecha_ingreso"  name="fecha_ingreso" required>
	</div>
    <!-- Numero de cama -->
    <div class="mb-3">
  	<label for="numero_cama" class="form-label">Numero de cama: </label>
  	<input type="text" class="form-control" id="numero_cama"  name="numero_cama" required>
	</div>

    <!-- Persona-->
    <div class="mb-3">
	<label for="nom_paciente" class="form-label">Nombre paciente</label>
	<select class="form-select" aria-label="Default select example" name="nom_paciente" id="nom_paciente" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaPacienteControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["codigo_paciente"].'">'.$valores["nombre"].'</option>';
	  	}
	  ?>
	</select>
	</div>
    <!-- Medico -->
    <div class="mb-3">
	<label for="nom_medico" class="form-label">Medico: </label>
	<select class="form-select" aria-label="Default select example" name="nom_medico" id="nom_medico" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaMedicoControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["cod_medico"].'">'.$valores["nombre"].'</option>';
	  	}
	  ?>
	</select>
	</div>
        <!-- Habitacion -->
    <div class="mb-3">
	<label for="habitacion: " class="form-label">Habitacion: </label>
	<select class="form-select" aria-label="Default select example" name="habitacion" id="habitacion" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaHabitacionControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["cod_habitacion"].'">'.$valores["num_camas"].'</option>';
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
	$registro -> registroIngresoControlador();
?>