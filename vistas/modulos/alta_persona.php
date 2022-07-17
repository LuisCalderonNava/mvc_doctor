<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Persona</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
	<!--Nombre de la persona-->
	<div class="mb-3">
  	<label for="nombre_persona" class="form-label">Nombre: </label>
  	<input type="text" class="form-control" id="nombre_persona" placeholder="Luis Paulo" name="nombre_persona" required onkeypress="return soloLetras(event)" maxlength="20">
	</div>
    <!-- apellido numero 1 -->
    <div class="mb-3">
  	<label for="apellido1" class="form-label">Apellido 1: </label>
  	<input type="text" class="form-control" id="apellido1" placeholder="Calderon" name="apellido1" required onkeypress="return soloLetras(event)" maxlength="20">
	</div>
    <!-- apellido numero 2-->
    <div class="mb-3">
  	<label for="apellido2" class="form-label">Apellido 2: </label>
  	<input type="text" class="form-control" id="apellido2" placeholder="Calderon" name="apellido2" required onkeypress="return soloLetras(event)" maxlength="20">
    <!-- telefono -->
    <div class="mb-3">
  	<label for="telefono" class="form-label">Telefono: </label>
  	<input type="text" class="form-control" id="telefono" placeholder="323-129-0260" name="telefono" required onkeypress="return soloNumeros(event)" maxlength="20">

	<!--Boton-->
	<div class="d-grid gap-2 col-6 mx-auto">
  		<button type="submit" class="btn btn-secondary">Guardar</button>
	</div>
	<script type="text/javascript">
    function soloLetras(e)
    {
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales)
       {
            if(key == especiales[i])
            {
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial)
        {
            return false;
        }
    }
	</script>
  	<script type="text/javascript">
    function soloNumeros(e)
    {
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "1234567890";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales)
       {
            if(key == especiales[i])
            {
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial)
        {
            return false;
        }
    }
    </script>
</form>
<?php
	$registro = new Controlador();
	$registro -> registroPersonaControlador();
?>